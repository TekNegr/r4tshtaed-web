<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pseudo-Bureau</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body class="bg-gray-700 h-screen w-screen flex flex-col">
    <div class="flex-grow relative overflow-hidden h-full w-full">
        <livewire:d-stop />
    </div>
    <div class="bg-gray-800">
        <livewire:tsk-bar />
    </div>
  @livewireScripts
</body>
</html>