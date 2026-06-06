<?php
require_once __DIR__ . '/../core/db.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin_id = $_POST['admin_id'] ?? '';
    $password = $_POST['password'] ?? '';
    $full_name = $_POST['full_name'] ?? '';

    if (empty($admin_id) || empty($password) || empty($full_name)) {
        $error = 'Please fill in all fields.';
    } else {
        // Check if admin_id exists
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE admin_id = ?");
        $stmt->execute([$admin_id]);
        if ($stmt->fetchColumn() > 0) {
            $error = 'Administrator ID already exists.';
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (admin_id, password, full_name) VALUES (?, ?, ?)");
            if ($stmt->execute([$admin_id, $hashed_password, $full_name])) {
                $success = 'Successfully registered. You can now login.';
            } else {
                $error = 'Registration failed. Please try again.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo BASE_URL; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Beetle System</title>
    <link rel="stylesheet" href="core/style.css">
    <link rel="icon" type="image/svg+xml" href="core/favicon.svg">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Outfit:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        .login-page {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg-primary);
            overflow: hidden;
        }

        .login-container {
            width: 100%;
            max-width: 450px;
            padding: 3rem;
            position: relative;
            z-index: 10;
            opacity: 0;
            transform: translateY(30px);
            animation: formFadeIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            animation-delay: 0.1s;
        }

        @keyframes formFadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .login-logo {
            width: 60px;
            height: 60px;
            background: var(--bg-secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: var(--text-secondary);
            animation: floatLogo 4s ease-in-out infinite;
        }

        @keyframes floatLogo {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .login-logo svg {
            width: 32px;
            height: 32px;
        }

        .login-title {
            font-family: var(--font-heading);
            font-size: 2rem;
            font-weight: 900;
            letter-spacing: -1px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        /* Ambient background glow */
        .login-glow {
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255, 122, 0, 0.03) 0%, transparent 70%);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
            z-index: 1;
        }
    </style>
</head>
<body class="inner-page">
    
    <section class="login-page">
        <div class="login-glow"></div>
        <div class="login-container">
            <div class="login-header">
                <a href="<?php echo BASE_URL; ?>" class="login-logo">
                    <svg viewBox="0 0 100 120" xmlns="http://www.w3.org/2000/svg">
                        <path d="M50 40 C30 40 25 60 25 80 C25 100 40 110 50 110 Z" fill="currentColor" />
                        <path d="M50 40 C70 40 75 60 75 80 C75 100 60 110 50 110 Z" fill="currentColor" />
                        <circle cx="50" cy="30" r="12" fill="currentColor" />
                        <path d="M45 20 C40 10 35 15 30 10 M55 20 C60 10 65 15 70 10" fill="none" stroke="currentColor" stroke-width="2" />
                    </svg>
                </a>
                <h1 class="login-title">NEW RECRUIT.</h1>
                <p style="opacity:0.5; font-size: 0.9rem; margin-top: 0.5rem;">CREATE YOUR ACCESS CREDENTIALS</p>
            </div>

            <form class="login-form" method="POST" action="">
                <?php if ($error): ?>
                    <div style="background: rgba(255,0,0,0.05); color: #ff4444; padding: 0.8rem; border-radius: 8px; font-size: 0.8rem; border: 1px solid rgba(255,0,0,0.1); text-align: center;"><?php echo $error; ?></div>
                <?php endif; ?>
                <?php if ($success): ?>
                    <div style="background: rgba(0,255,0,0.05); color: #44ff44; padding: 0.8rem; border-radius: 8px; font-size: 0.8rem; border: 1px solid rgba(0,255,0,0.1); text-align: center;"><?php echo $success; ?></div>
                <?php endif; ?>
                
                <div class="form-group">
                    <label style="font-size:0.6rem; letter-spacing: 2px; font-weight: 900; opacity: 0.5;">FULL NAME</label>
                    <input type="text" name="full_name" placeholder="Agent Name" required style="background: rgba(0,0,0,0.02); border: 1px solid rgba(0,0,0,0.1); padding: 1rem; border-radius: 8px; width: 100%; font-family: var(--font-main);">
                </div>
                <div class="form-group">
                    <label style="font-size:0.6rem; letter-spacing: 2px; font-weight: 900; opacity: 0.5;">ADMINISTRATOR ID</label>
                    <input type="text" name="admin_id" placeholder="AD-XXX-X" required style="background: rgba(0,0,0,0.02); border: 1px solid rgba(0,0,0,0.1); padding: 1rem; border-radius: 8px; width: 100%; font-family: var(--font-main);">
                </div>
                <div class="form-group">
                    <label style="font-size:0.6rem; letter-spacing: 2px; font-weight: 900; opacity: 0.5;">SECURE PASSPHRASE</label>
                    <input type="password" name="password" placeholder="••••••••" required style="background: rgba(0,0,0,0.02); border: 1px solid rgba(0,0,0,0.1); padding: 1rem; border-radius: 8px; width: 100%; font-family: var(--font-main);">
                </div>

                <button type="submit" class="submit-btn" style="width:100%; margin-top: 1rem; padding: 1.2rem;">INITIATE ACCESS</button>
            </form>

            <div style="margin-top: 2rem; text-align: center; font-size: 0.9rem; opacity: 0.6;">
                Already have access? <a href="admin" style="color: var(--text-primary); font-weight: 700; text-decoration: none;">Login instead</a>
            </div>
        </div>
    </section>

    <script src="core/main.js"></script>
</body>
</html>
