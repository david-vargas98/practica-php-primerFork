<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

final class PracticaTest extends TestCase
{
    public function testFilesExistence(): void
    {
        $this->assertFileExists('index.php');
        $this->assertFileExists('formulario.php');
        $this->assertFileExists('conexion.php');
    }

    public function testForm(): void
    {
        $form = file_get_contents('formulario.php');
        $this->assertStringContainsStringIgnoringCase('action=""', $form, $message = 'No se ha definido action');
        $this->assertStringContainsStringIgnoringCase('method="post"', $form, $message = 'No está asignado el método post');
    }

    public function testStore(): void
    {
        $form = file_get_contents('formulario.php');
        $this->assertStringContainsStringIgnoringCase('$_POST', $form, $message = 'No se utiliza $_POST');
        $this->assertStringContainsStringIgnoringCase('header(', $form, $message = 'No se encuenra método header()');
        $this->assertStringContainsStringIgnoringCase('Location: index.php', $form, $message = 'No se redirecciona hacia index.php');
        $this->assertStringContainsStringIgnoringCase('INSERT INTO', $form, $message = 'No se llama a INSERT INTO');
    }

    public function testPost(): void
    {
        $client = new Client();
        $response = $client->post('http://localhost/practica-php/formulario.php', [
                'form_params' => [
                    'nombre' => 'edgar',
                    'correo' => 'correo@live.com',
                ]
            ]);

        $code = $response->getStatusCode();

        $this->assertStringContainsStringIgnoringCase('edgar', (string) $response->getBody(), $message = 'No está muestra registro creado');
    }
}
