<?php
    $app->get('/', function ($request, $response, $args) {
        // Render file upload form
        return $this->renderer->render($response, 'index.phtml', $args);
    });
    
    $app->post('/upload', function ($request, $response, $args) {
        $files = $request->getUploadedFiles();
        if (empty($files['newfile'])) {
            throw new Exception('Expected a newfile');
        }
    
        $newfile = $files['newfile'];


        if ($newfile->getError() === UPLOAD_ERR_OK) {
            $uploadFileName = $newfile->getClientFilename();
            $newfile->moveTo("/src/$uploadFileName");
    }
    });



?>