<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Portfolio</title>
    <style>
        body { font-family: 'Courier New', monospace; background: #0a0a0a; color: #e8e8e8; margin: 0; padding: 20px; }
        .wrapper { max-width: 600px; margin: 0 auto; background: #0f0f0f; border: 1px solid #1a1a1a; border-top: 3px solid #800000; }
        .header { background: #000; padding: 25px 30px; border-bottom: 1px solid #1a1a1a; }
        .header-title { font-size: 0.7rem; letter-spacing: 0.3em; color: #800000; margin-bottom: 5px; }
        .header-main { font-size: 1.2rem; color: #00FF41; text-shadow: 0 0 10px rgba(0,255,65,0.3); }
        .body { padding: 30px; }
        .field { margin-bottom: 20px; }
        .field-label { font-size: 0.65rem; letter-spacing: 0.2em; color: #800000; margin-bottom: 6px; display: block; }
        .field-value { color: #e8e8e8; font-size: 0.9rem; padding: 10px 14px; background: #0a0a0a; border-left: 2px solid #00FF41; }
        .message-box { color: #e8e8e8; font-size: 0.9rem; padding: 15px; background: #0a0a0a; border-left: 2px solid #00FF41; line-height: 1.7; white-space: pre-wrap; }
        .footer { background: #000; padding: 20px 30px; border-top: 1px solid #1a1a1a; font-size: 0.7rem; color: #555; letter-spacing: 0.1em; }
        .neon { color: #00FF41; }
        .maroon { color: #a00000; }
        .prompt { color: #555; margin-right: 8px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-title">// PORTFOLIO CONTACT SYSTEM</div>
            <div class="header-main">📨 NEW MESSAGE RECEIVED</div>
        </div>

        <div class="body">
            <p style="font-size:0.75rem; color:#555; margin-bottom:25px;">
                <span class="prompt">$</span>
                <span class="neon">./incoming-message --parse --notify</span>
            </p>

            <div class="field">
                <span class="field-label">// SENDER NAME</span>
                <div class="field-value">{{ $name }}</div>
            </div>

            <div class="field">
                <span class="field-label">// EMAIL ADDRESS</span>
                <div class="field-value">
                    <a href="mailto:{{ $email }}" style="color:#00FF41; text-decoration:none;">{{ $email }}</a>
                </div>
            </div>

            @if(!empty($subject))
            <div class="field">
                <span class="field-label">// SUBJECT</span>
                <div class="field-value">{{ $subject }}</div>
            </div>
            @endif

            <div class="field">
                <span class="field-label">// MESSAGE</span>
                <div class="message-box">{{ $message }}</div>
            </div>

            <div class="field" style="margin-top:30px;">
                <span class="field-label">// TIMESTAMP</span>
                <div class="field-value neon">{{ now()->format('D, d M Y — H:i:s T') }}</div>
            </div>
        </div>

        <div class="footer">
            <p><span class="maroon">⚡</span> Pesan ini dikirim otomatis dari form kontak portfolio Anda.</p>
            <p>Balas langsung ke: <span class="neon">{{ $email }}</span></p>
        </div>
    </div>
</body>
</html>