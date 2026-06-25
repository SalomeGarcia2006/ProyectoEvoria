<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>EVORIA | Sistema inteligente de logistica </title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        
        #hero-canvas {
            width: 100%;
            height: 100%;
            display: block;
        }

        .hero-gradient-overlay {
            background: linear-gradient(to bottom, rgba(24, 43, 63, 0.4) 0%, rgba(24, 43, 63, 0) 20%, rgba(24, 43, 63, 0) 80%, #fbf9fb 100%);
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface-variant": "#44474c",
                        "on-error": "#ffffff",
                        "surface-bright": "#fbf9fb",
                        "secondary-fixed": "#c1e8fc",
                        "surface-container-low": "#f5f3f5",
                        "outline": "#74777d",
                        "surface-container": "#efedef",
                        "on-secondary": "#ffffff",
                        "surface-tint": "#4e6076",
                        "on-tertiary": "#ffffff",
                        "secondary": "#3d6374",
                        "inverse-surface": "#303032",
                        "surface-container-highest": "#e4e2e4",
                        "primary-fixed-dim": "#b5c8e2",
                        "primary-fixed": "#d1e4ff",
                        "inverse-primary": "#b5c8e2",
                        "surface-container-high": "#e9e7e9",
                        "on-primary": "#ffffff",
                        "surface": "#fbf9fb",
                        "on-secondary-container": "#426878",
                        "surface-variant": "#e4e2e4",
                        "tertiary-fixed": "#ffddb6",
                        "on-secondary-fixed-variant": "#244c5b",
                        "on-surface": "#1b1c1d",
                        "error-container": "#ffdad6",
                        "background": "#fbf9fb",
                        "tertiary-fixed-dim": "#e3c197",
                        "primary": "#182b3f",
                        "on-primary-fixed": "#081d30",
                        "on-primary-fixed-variant": "#36485d",
                        "tertiary": "#3a2508",
                        "primary-container": "#2f4156",
                        "on-secondary-fixed": "#001f29",
                        "surface-dim": "#dbd9db",
                        "on-tertiary-container": "#c6a57e",
                        "on-tertiary-fixed-variant": "#5a4223",
                        "on-background": "#1b1c1d",
                        "secondary-fixed-dim": "#a5ccdf",
                        "inverse-on-surface": "#f2f0f2",
                        "secondary-container": "#bee6f9",
                        "on-primary-container": "#9aadc6",
                        "on-error-container": "#93000a",
                        "error": "#ba1a1a",
                        "tertiary-container": "#523b1c",
                        "outline-variant": "#c4c6cd"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "margin-desktop": "32px",
                        "sm": "12px",
                        "xl": "32px",
                        "container-max": "1440px",
                        "lg": "24px",
                        "xs": "8px",
                        "container-max": "1440px",
                        "base": "4px",
                        "margin-mobile": "16px",
                        "md": "16px",
                        "gutter": "20px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "title-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "label-md": ["Inter"],
                        "title-lg": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "title-md": ["16px", {"lineHeight": "24px", "fontWeight": "600"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "label-sm": ["11px", {"lineHeight": "14px", "fontWeight": "600"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "title-lg": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
</head>
<body class="bg-background text-on-surface font-body-md overflow-x-hidden">
<!-- Navigation -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-lg h-16 bg-primary/90 backdrop-blur-md text-on-primary border-b border-white/10">
<div class="flex items-center gap-xl">
<span class="font-headline-md text-headline-md font-bold tracking-tight">EVORIA</span>
<div class="hidden md:flex gap-md">
<a class="text-white/80 hover:text-white transition-colors font-title-md text-title-md border-b-2 border-secondary-fixed pb-1" href="#management">Gestion</a>
<a class="text-white/80 hover:text-white transition-colors font-title-md text-title-md" href="#resources">Recursos</a>
<a class="text-white/80 hover:text-white transition-colors font-title-md text-title-md" href="#inventory">Inventario</a>
<a class="text-white/80 hover:text-white transition-colors font-title-md text-title-md" href="#budget">Presupuesto</a>
</div>
</div>
<div class="flex items-center gap-md">
<span class="material-symbols-outlined cursor-pointer active:opacity-80">   </span>
<span class="material-symbols-outlined cursor-pointer active:opacity-80">settings</span>
<div class="w-8 h-8 rounded-full bg-secondary overflow-hidden border border-white/20">
<img alt="Profile" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAdUY0iXog6474vBC6XVbxMMo6z2OlqldrzxAVGYbvMMq9iFadp4ndU09Nr2ak_m27Zs73RuL1bdpUbBSdVo4Hk0f7iM89Nma7SyT3awWTay3rd_yFodg6fH-ToBLehI2FVhM1JxnRojGgY3-25wufrhDXqwbjwSrlv4fQStO7uKhbiQwsXSmlq_3e9kTxHDXd7o7DJHtTX7tAkThMDADmhc2Kqdxd9Qzu-a_-oA2LAiscK7GB-zoZgX3yqQI-ItFUY8eFRiK_BWQ"/>
</div>
</div>
</nav>
<main class="relative z-10">
<!-- Hero Section -->
<section class="relative h-screen min-h-[600px] flex items-center justify-center overflow-hidden">
<!-- Van Gogh Shader Background -->
<div class="absolute inset-0 z-0">
<canvas id="hero-canvas"></canvas>
<div class="absolute inset-0 hero-gradient-overlay"></div>
</div>
<!-- Content Container -->
<div class="relative z-10 max-w-4xl px-margin-desktop text-center flex flex-col items-center gap-lg">
<h2 class="text-surface-bright font-display-lg text-display-lg opacity-90 tracking-widest uppercase">EVORIA</h2>
<h1 class="text-white font-headline-lg text-headline-lg md:text-5xl leading-tight drop-shadow-lg">
                Coordinación Total para Eventos de Alto Impacto
            </h1>
<p class="text-surface-container font-body-lg text-body-lg max-w-2xl mx-auto drop-shadow-md">
                Centralice cada nodo de su logística en una única plataforma inteligente. Desde la gestión de recursos humanos hasta el control de inventario en tiempo real.
            </p>
<div class="flex flex-col sm:flex-row gap-md mt-md">
<button class="bg-surface-bright text-primary px-xl py-md font-title-md text-title-md rounded hover:bg-white transition-all flex items-center justify-center gap-xs shadow-xl">
                    Iniciar Planificación
                    <span class="material-symbols-outlined">arrow_forward</span>
</button>
<button class="border-2 border-white/40 text-white px-xl py-md font-title-md text-title-md rounded hover:bg-white/10 transition-all backdrop-blur-sm">
                    Ver Módulos
                </button>
</div>
</div>
</section>
<!-- Intro Section -->
<section class="py-xl px-margin-desktop bg-surface" id="management">
<div class="max-w-4xl mx-auto text-center">
<h2 class="text-primary font-headline-lg text-headline-lg mb-md">¿Qué es EVORIA?</h2>
<p class="text-on-surface-variant font-body-lg text-body-lg">
                EVORIA es un ecosistema digital diseñado para arquitectos de eventos. No solo gestionamos tareas; sincronizamos cada elemento de la cadena de suministro, desde la primera cotización hasta el reporte post-evento, garantizando que nada quede al azar.
            </p>
</div>
</section>
<!-- Modules Grid -->
<section class="py-xl px-margin-desktop bg-surface-container-low" id="resources">
<div class="max-w-container-max mx-auto">
<h2 class="text-primary font-headline-lg text-headline-lg mb-xl text-center">Módulos Principales</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-md">
<div class="bg-white p-lg rounded-xl border border-outline-variant hover:border-secondary transition-all group">
<span class="material-symbols-outlined text-primary mb-md text-3xl group-hover:scale-110 transition-transform">event_seat</span>
<h3 class="font-title-lg text-title-lg text-primary mb-xs">Gestión de Eventos</h3>
<p class="text-label-md text-on-surface-variant">Control centralizado de cronogramas y sedes.</p>
</div>
<div class="bg-white p-lg rounded-xl border border-outline-variant hover:border-secondary transition-all group">
<span class="material-symbols-outlined text-primary mb-md text-3xl group-hover:scale-110 transition-transform">groups</span>
<h3 class="font-title-lg text-title-lg text-primary mb-xs">Gestión de Recursos</h3>
<p class="text-label-md text-on-surface-variant">Asignación eficiente de capital humano y equipos.</p>
</div>
<div class="bg-white p-lg rounded-xl border border-outline-variant hover:border-secondary transition-all group">
<span class="material-symbols-outlined text-primary mb-md text-3xl group-hover:scale-110 transition-transform">inventory_2</span>
<h3 class="font-title-lg text-title-lg text-primary mb-xs">Inventario</h3>
<p class="text-label-md text-on-surface-variant">Trazabilidad total de activos en tiempo real.</p>
</div>
<div class="bg-white p-lg rounded-xl border border-outline-variant hover:border-secondary transition-all group">
<span class="material-symbols-outlined text-primary mb-md text-3xl group-hover:scale-110 transition-transform">payments</span>
<h3 class="font-title-lg text-title-lg text-primary mb-xs">Presupuestos</h3>
<p class="text-label-md text-on-surface-variant">Análisis financiero y control de desviaciones.</p>
</div>
<div class="bg-white p-lg rounded-xl border border-outline-variant hover:border-secondary transition-all group">
<span class="material-symbols-outlined text-primary mb-md text-3xl group-hover:scale-110 transition-transform">schedule</span>
<h3 class="font-title-lg text-title-lg text-primary mb-xs">Cronogramas</h3>
<p class="text-label-md text-on-surface-variant">Líneas de tiempo críticas con alertas inteligentes.</p>
</div>
<div class="bg-white p-lg rounded-xl border border-outline-variant hover:border-secondary transition-all group">
<span class="material-symbols-outlined text-primary mb-md text-3xl group-hover:scale-110 transition-transform">analytics</span>
<h3 class="font-title-lg text-title-lg text-primary mb-xs">Reportes</h3>
<p class="text-label-md text-on-surface-variant">Business Intelligence para la toma de decisiones.</p>
</div>
<div class="bg-white p-lg rounded-xl border border-outline-variant hover:border-secondary transition-all group">
<span class="material-symbols-outlined text-primary mb-md text-3xl group-hover:scale-110 transition-transform">rule</span>
<h3 class="font-title-lg text-title-lg text-primary mb-xs">Auditoría</h3>
<p class="text-label-md text-on-surface-variant">Registro histórico de cada acción realizada.</p>
</div>
<div class="bg-white p-lg rounded-xl border border-outline-variant hover:border-secondary transition-all group">
<span class="material-symbols-outlined text-primary mb-md text-3xl group-hover:scale-110 transition-transform">hub</span>
<h3 class="font-title-lg text-title-lg text-primary mb-xs">Coordinación</h3>
<p class="text-label-md text-on-surface-variant">Herramientas de colaboración multi-departamento.</p>
</div>
</div>
</div>
</section>
<!-- Benefits -->
<section class="py-xl px-margin-desktop bg-white">
<div class="max-w-container-max mx-auto flex flex-col md:flex-row gap-xl items-center">
<div class="md:w-1/2">
<img alt="Workflow" class="rounded-xl border border-outline-variant shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdN43oYqPAOzsIc4R8fqGjGjCG5JWyWhoj7ieq8Oyh-WFCwwUGUngvjp_MW4cesHL5mVLoZ4WylKdaAJyLSannZUL2YAGCXKPGlEdh0KCfDHrVeeV-fbSNo_s_2v5XeN9b5CIkqUKtT5_eGQFGPrrEO_wr7e0LscgJuoshAruUG_AUbza9ncLNl-TqrdYOkRtJ9ZoC03ch8s-iJ_BAIjC_KyNQy5nlTCfatCpOGrCswz8dq7sPEKOMFAdCI-YKbZ1DjJSRv-qFibU"/>
</div>
<div class="md:w-1/2 space-y-lg">
<h2 class="text-primary font-headline-lg text-headline-lg">Beneficios Estratégicos</h2>
<ul class="space-y-md">
<li class="flex items-start gap-md">
<span class="material-symbols-outlined text-secondary bg-secondary-container p-xs rounded-full">check_circle</span>
<div>
<h4 class="font-title-md text-title-md text-primary">Organización Impecable</h4>
<p class="text-body-md text-on-surface-variant">Elimine el caos informativo con flujos de trabajo estandarizados.</p>
</div>
</li>
<li class="flex items-start gap-md">
<span class="material-symbols-outlined text-secondary bg-secondary-container p-xs rounded-full">tune</span>
<div>
<h4 class="font-title-md text-title-md text-primary">Control Absoluto</h4>
<p class="text-body-md text-on-surface-variant">Visibilidad granular de cada activo y recurso asignado.</p>
</div>
</li>
<li class="flex items-start gap-md">
<span class="material-symbols-outlined text-secondary bg-secondary-container p-xs rounded-full">bolt</span>
<div>
<h4 class="font-title-md text-title-md text-primary">Eficiencia Operativa</h4>
<p class="text-body-md text-on-surface-variant">Reducción del 30% en tiempos de planificación y ejecución.</p>
</div>
</li>
</ul>
</div>
</div>
</section>
<!-- Architecture Diagram -->
<section class="py-xl px-margin-desktop bg-surface-container-high overflow-hidden">
<div class="max-w-container-max mx-auto text-center">
<h2 class="text-primary font-headline-lg text-headline-lg mb-xl">Arquitectura del Sistema</h2>
<div class="flex flex-col md:flex-row items-center justify-center gap-md md:gap-xl">
<div class="p-lg bg-primary text-on-primary rounded border border-outline w-48 shadow-lg">
<span class="font-bold text-label-md">FRONTEND</span>
<p class="text-label-sm opacity-80">React / Tailwind</p>
</div>
<div class="h-8 w-1 md:h-1 md:w-16 bg-secondary"></div>
<div class="p-lg bg-secondary text-on-secondary rounded border border-outline w-48 shadow-lg">
<span class="font-bold text-label-md">API REST</span>
<p class="text-label-sm opacity-80">Authentication Layer</p>
</div>
<div class="h-8 w-1 md:h-1 md:w-16 bg-secondary"></div>
<div class="p-lg bg-primary-container text-on-primary rounded border border-outline w-48 shadow-lg">
<span class="font-bold text-label-md">BACKEND PHP</span>
<p class="text-label-sm opacity-80">Laravel Core</p>
</div>
<div class="h-8 w-1 md:h-1 md:w-16 bg-secondary"></div>
<div class="p-lg bg-white text-primary rounded border-2 border-primary w-48 shadow-lg">
<span class="font-bold text-label-md">MYSQL</span>
<p class="text-label-sm text-outline">Relational Data</p>
</div>
</div>
</div>
</section>
<!-- Security & Contact -->
<section class="py-xl px-margin-desktop bg-white">
<div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-xl">
<div>
<h2 class="text-primary font-headline-lg text-headline-lg mb-lg">Seguridad de Nivel Empresarial</h2>
<div class="space-y-md">
<div class="flex gap-md items-center p-md bg-surface-container rounded-xl">
<span class="material-symbols-outlined text-primary text-3xl">shield_lock</span>
<span class="text-body-lg text-primary">Encriptación AES-256 en reposo y tránsito.</span>
</div>
<div class="flex gap-md items-center p-md bg-surface-container rounded-xl">
<span class="material-symbols-outlined text-primary text-3xl">verified_user</span>
<span class="text-body-lg text-primary">Autenticación de dos factores (2FA) integrada.</span>
</div>
<div class="flex gap-md items-center p-md bg-surface-container rounded-xl">
<span class="material-symbols-outlined text-primary text-3xl">backup</span>
<span class="text-body-lg text-primary">Backups incrementales cada 15 minutos.</span>
</div>
<div class="flex gap-md items-center p-md bg-surface-container rounded-xl">
<span class="material-symbols-outlined text-primary text-3xl">gavel</span>
<span class="text-body-lg text-primary">Cumplimiento estricto con normativas GDPR y SOC2.</span>
</div>
</div>
</div>
<div class="bg-surface-container-low p-xl rounded-xl border border-outline-variant" id="contact">
<h2 class="text-primary font-headline-lg text-headline-lg mb-lg">Contacto Corporativo</h2>
<form class="space-y-md">
<div>
<label class="block text-label-md text-primary mb-xs">Nombre Completo</label>
<input class="w-full bg-white border border-outline-variant rounded p-md focus:ring-2 focus:ring-secondary transition-all" placeholder="Ej: Juan Pérez" type="text"/>
</div>
<div>
<label class="block text-label-md text-primary mb-xs">Correo Institucional</label>
<input class="w-full bg-white border border-outline-variant rounded p-md focus:ring-2 focus:ring-secondary transition-all" placeholder="ejemplo@empresa.com" type="email"/>
</div>
<div>
<label class="block text-label-md text-primary mb-xs">Mensaje</label>
<textarea class="w-full bg-white border border-outline-variant rounded p-md focus:ring-2 focus:ring-secondary transition-all" placeholder="Cuéntenos sobre sus necesidades logísticas..." rows="4"></textarea>
</div>
<button class="w-full bg-primary text-on-primary font-title-md text-title-md py-md rounded hover:bg-primary-container transition-all" type="submit">
                        Enviar Solicitud
                    </button>
</form>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-xl px-margin-desktop flex flex-col md:flex-row justify-between items-center max-w-container-max mx-auto bg-surface-container-highest border-t border-outline-variant">
<div class="mb-md md:mb-0">
<span class="font-title-lg text-title-lg text-primary">EVORIA</span>
<p class="font-label-md text-label-md text-on-surface-variant mt-2">© 2024 EVORIA Logistics Systems. All rights reserved.</p>
</div>
<div class="flex flex-wrap justify-center gap-md">
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">System Architecture</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Contact Support</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Security Protocol</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Terms of Service</a>
</div>
</footer>
<!-- Van Gogh Shader Logic -->
<script>
(function() {
  const canvas = document.getElementById('hero-canvas');

  function syncSize() {
    const w = canvas.clientWidth || 1280;
    const h = canvas.clientHeight || 720;
    if (canvas.width !== w || canvas.height !== h) {
      canvas.width = w;
      canvas.height = h;
    }
  }
  
  if (typeof ResizeObserver !== 'undefined') {
    new ResizeObserver(syncSize).observe(canvas);
  }
  syncSize();

  const gl = canvas.getContext('webgl') || canvas.getContext('experimental-webgl');
  if (!gl) return;

  const vs = `attribute vec2 a_position;
varying vec2 v_texCoord;
void main() {
  v_texCoord = a_position * 0.5 + 0.5;
  gl_Position = vec4(a_position, 0.0, 1.0);
}`;

  const fs = `precision highp float;
varying vec2 v_texCoord;
uniform float u_time;
uniform vec2 u_resolution;
uniform vec2 u_mouse;

float hash(vec2 p) {
    p = fract(p * vec2(123.34, 456.21));
    p += dot(p, p + 45.32);
    return fract(p.x * p.y);
}

mat2 rot(float a) {
    float s = sin(a);
    float c = cos(a);
    return mat2(c, -s, s, c);
}

float flowNoise(vec2 p) {
    vec2 i = floor(p);
    vec2 f = fract(p);
    float a = hash(i);
    float b = hash(i + vec2(1.0, 0.0));
    float c = hash(i + vec2(0.0, 1.0));
    float d = hash(i + vec2(1.0, 1.0));
    vec2 u = f * f * (3.0 - 2.0 * f);
    return mix(a, b, u.x) + (c - a) * u.y * (1.0 - u.x) + (d - b) * u.x * u.y;
}

float fbm(vec2 p) {
    float v = 0.0;
    float a = 0.5;
    vec2 shift = vec2(100.0);
    for (int i = 0; i < 5; ++i) {
        v += a * flowNoise(p);
        p = rot(0.5) * p * 2.0 + shift;
        a *= 0.5;
    }
    return v;
}

void main() {
    vec2 uv = v_texCoord;
    vec2 p = uv * 2.0 - 1.0;
    p.x *= u_resolution.x / u_resolution.y;

    // Van Gogh Inspired Palette (Corporate adjusted)
    vec3 deepBlue = vec3(0.05, 0.1, 0.2); // Darker navy
    vec3 skyBlue = vec3(0.184, 0.255, 0.337); // #2F4156
    vec3 golden = vec3(0.784, 0.851, 0.902); // #C8D9E6 (Used as highlights)
    vec3 strokeColor = vec3(0.337, 0.486, 0.553); // #567C8D

    float time = u_time * 0.15;
    vec2 swirlCenter = vec2(0.5, 0.5);
    vec2 d = uv - swirlCenter;
    float r = length(d);
    
    float n = fbm(uv * 3.0 + time + fbm(uv * 2.0 - time * 0.5));
    vec2 flowUV = uv + vec2(cos(n * 6.28), sin(n * 6.28)) * 0.05;
    
    vec3 bg = mix(deepBlue, skyBlue, uv.y + n * 0.3);
    
    float strokes = smoothstep(0.4, 0.6, fbm(flowUV * 10.0 + time));
    bg = mix(bg, strokeColor, strokes * 0.4);

    float stars = 0.0;
    for(float i = 0.0; i < 2.0; i++) {
        vec2 starPos = uv * (6.0 + i * 3.0);
        vec2 grid = floor(starPos);
        float sHash = hash(grid);
        if(sHash > 0.96) {
            float blink = 0.6 + 0.4 * sin(u_time * 2.0 + sHash * 10.0);
            float dist = length(fract(starPos) - 0.5);
            stars += smoothstep(0.2, 0.0, dist) * blink;
        }
    }
    
    float glow = smoothstep(0.6, 0.0, length(uv - vec2(0.8, 0.8)));
    bg += golden * glow * 0.15;

    float mouseGlow = 1.0 - smoothstep(0.0, 0.3, length(uv - (u_mouse / u_resolution)));
    
    vec3 finalColor = bg + stars * golden + mouseGlow * golden * 0.1;
    
    gl_FragColor = vec4(finalColor, 1.0);
}`;

  function cs(type, src) {
    const s = gl.createShader(type);
    gl.shaderSource(s, src);
    gl.compileShader(s);
    return s;
  }

  const prog = gl.createProgram();
  gl.attachShader(prog, cs(gl.VERTEX_SHADER, vs));
  gl.attachShader(prog, cs(gl.FRAGMENT_SHADER, fs));
  gl.linkProgram(prog);
  gl.useProgram(prog);

  const buf = gl.createBuffer();
  gl.bindBuffer(gl.ARRAY_BUFFER, buf);
  gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([-1,-1, 1,-1, -1,1, 1,1]), gl.STATIC_DRAW);

  const pos = gl.getAttribLocation(prog, 'a_position');
  gl.enableVertexAttribArray(pos);
  gl.vertexAttribPointer(pos, 2, gl.FLOAT, false, 0, 0);

  const uTime = gl.getUniformLocation(prog, 'u_time');
  const uRes = gl.getUniformLocation(prog, 'u_resolution');
  const uMouse = gl.getUniformLocation(prog, 'u_mouse');

  let mouse = { x: 0, y: 0 };
  window.addEventListener('mousemove', (event) => {
    const rect = canvas.getBoundingClientRect();
    if (rect.width && rect.height) {
      const nx = (event.clientX - rect.left) / rect.width;
      const ny = 1.0 - (event.clientY - rect.top) / rect.height;
      mouse.x = nx * canvas.width;
      mouse.y = ny * canvas.height;
    }
  });

  function render(t) {
    if (typeof ResizeObserver === 'undefined') syncSize();
    gl.viewport(0, 0, canvas.width, canvas.height);
    if (uTime) gl.uniform1f(uTime, t * 0.001);
    if (uRes) gl.uniform2f(uRes, canvas.width, canvas.height);
    if (uMouse) gl.uniform2f(uMouse, mouse.x, mouse.y);
    gl.drawArrays(gl.TRIANGLE_STRIP, 0, 4);
    requestAnimationFrame(render);
  }
  render(0);
})();
</script>
</body></html>