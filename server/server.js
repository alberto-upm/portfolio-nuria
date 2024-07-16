// server/server.js

const express = require('express');
const app = express();
const port = 3000;

app.use(express.json());
app.use(express.static('public'));

app.get('/api/projects', (req, res) => {
    const projects = [
        { id: 1, name: 'Proyecto 1', description: 'Descripción del proyecto 1' },
        { id: 2, name: 'Proyecto 2', description: 'Descripción del proyecto 2' }
    ];
    res.json(projects);
});

app.listen(port, () => {
    console.log(`Servidor escuchando en http://localhost:${port}`);
});
