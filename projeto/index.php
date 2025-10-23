<?php
require_once 'dados.php';


function renderizar_card_membro($membro) {
    echo '
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100 border-0 card-membro">
            <img src="imagens/' . htmlspecialchars($membro['imagem']) . '" class="card-img-top membro-img" alt="' . htmlspecialchars($membro['nome']) . '">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold text-primary mb-1">' . htmlspecialchars($membro['nome']) . '</h5>
                <h6 class="card-subtitle text-muted mb-3">' . htmlspecialchars($membro['cargo']) . '</h6>
                <p class="card-text text-secondary small">' . htmlspecialchars($membro['bio']) . '</p>
            </div>
        </div>
    </div>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conheça Nossa Equipe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        h1 {
            font-weight: 700;
            color: #0d6efd;
        }

        .membro-img {
            height: 460px;
            width: 100%;
            object-fit: cover;
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
        }

        .card-membro {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 0.75rem;
        }

        .card-membro:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-size: 1.1rem;
        }

        .card-subtitle {
            font-size: 0.9rem;
        }

        .card-text {
            font-size: 0.85rem;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">👥 Conheça Nossa Equipe</h1>

        <div class="row justify-content-center">
            <?php foreach ($equipe as $membro): ?>
                <?php renderizar_card_membro($membro); ?>
            <?php endforeach; ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
