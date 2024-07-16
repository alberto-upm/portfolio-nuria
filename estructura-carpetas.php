portfolio/
│
├── public/                   # Archivos públicos (CSS, imágenes, JS no empaquetados, HTML)
│   ├── css/
│   │   └── styles.css
│   ├── js/
│   │   └── scripts.js
│   ├── images/
│   │   └── (imágenes de tu portafolio)
│   └── index.html            # Archivo HTML principal
│
├── src/                      # Código fuente (JSX/TSX si usas React, otros componentes de frontend)
│   ├── components/           # Componentes de React (si usas React)
│   ├── pages/                # Páginas del sitio
│   ├── styles/               # Archivos CSS/SCSS (opcional, si usas preprocesadores)
│   ├── utils/                # Utilidades y funciones auxiliares
│   └── index.js              # Punto de entrada de la aplicación (JS o JSX)
│
├── server/                   # Código del servidor (si tienes backend)
│   ├── controllers/          # Controladores
│   ├── models/               # Modelos de base de datos
│   ├── routes/               # Rutas de la API
│   └── server.js             # Punto de entrada del servidor
│
├── .gitignore                # Archivos y directorios a ignorar por git
├── package.json              # Dependencias y scripts del proyecto
├── README.md                 # Documentación del proyecto
└── webpack.config.js         # Configuración de Webpack (si usas Webpack)
