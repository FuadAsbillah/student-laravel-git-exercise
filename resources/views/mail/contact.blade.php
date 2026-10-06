<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $subject }}</title>
    </head>
    <body style="font-family: ui-sans-serif, system-ui, sans-serif; background-color: #f9fafb; padding: 40px;">
        <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; padding: 32px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <h1 style="font-size: 20px; font-weight: 600; margin-bottom: 16px; color: #111827;">
                New contact form submission
            </h1>

            <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #f3f4f6;">
                <p style="margin: 0; color: #6b7280; font-size: 14px;">
                    <strong style="color: #111827;">From:</strong> {{ $name }} ({{ $email }})
                </p>
            </div>

            <div style="margin-bottom: 20px;">
                <p style="margin: 0; color: #6b7280; font-size: 14px; margin-bottom: 8px;">
                    <strong style="color: #111827;">Subject:</strong> {{ $subject }}
                </p>
            </div>

            <div>
                <p style="margin: 0 0 8px; color: #6b7280; font-size: 14px;">
                    <strong style="color: #111827;">Message:</strong>
                </p>
                <p style="margin: 0; color: #1f2937; line-height: 1.6; white-space: pre-wrap;">
                    {{ $body }}
                </p>
            </div>
        </div>
    </body>
</html>
