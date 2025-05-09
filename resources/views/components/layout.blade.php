<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Control</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="h-screen">

        <nav class="h-1/10 flex items-center justify-center bg-blue-100">
            <a href="/">
                <span class="font-semibold">Controle de gastos</span>
            </a>
        </nav>
        
        
            {{ $slot }}
        
        
    </div>
</body>
</html>