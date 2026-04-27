const express = require('express');
const app = express();

app.use(express.json());

app.post('/proxy', async (req, res) => {
    const webhook = "https://discord.com/api/webhooks/1498370184749256886/iP4blLVbwpMG5HdS_KvuOYJZR6cf5cFnOoR28kkJDUFzMfKwjKQyR-_MX7gkhONyF1vC";
    
    try {
        const response = await fetch(webhook, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(req.body)
        });
        res.status(200).send('ok');
    } catch(e) {
        res.status(500).send('error');
    }
});

app.listen(3000, () => console.log('Proxy running on port 3000'));