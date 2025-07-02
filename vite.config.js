import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';




export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/usersassets/app.css',
                /*'resources/sass/app.scss',*/
                /*'resources/usersassets/css/bootstrap.css',
                'resources/usersassets/css/style.css',
                'resources/usersassets/css/responsive.css',
                'resources/usersassets/app.js',*/

            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '$':  'jQuery',
        },
    },
});

/*

import { defineConfig } from 'vite'
import { svelte } from '@sveltejs/vite-plugin-svelte'

export default defineConfig({
  plugins: [
    svelte({
      emitCss: false
    })
  ],

  build: {
    assetsDir: '',
    sourcemap: true,
    lib: {
      entry: 'src/main.js',
      formats: ['iife'],
      name: 'SvelteMicroFrontend',
      fileName: 'svelte-micro-frontend'
    }
  }
})*/


/*
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/usersassets/css/bootstrap.css',
                'resources/usersassets/css/style.css',
                'resources/usersassets/css/responsive.css',
                'resources/usersassets/js/jquery.js',
                'resources/usersassets/js/popper.min.js',
                'resources/usersassets/js/chosen.min.js',
                'resources/usersassets/js/bootstrap.min.js',
                'resources/usersassets/js/jquery.fancybox.js',
                'resources/usersassets/js/jquery.modal.min.js',
                'resources/usersassets/js/mmenu.polyfills.js',
                'resources/usersassets/js/mmenu.js',
                'resources/usersassets/js/appear.js',
                'resources/usersassets/js/anm.min.js',
                'resources/usersassets/js/ScrollMagic.min.js',
                'resources/usersassets/js/rellax.min.js',
                'resources/usersassets/js/owl.js',
                'resources/usersassets/js/wow.js',
                'resources/usersassets/js/script.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '$':  'jQuery',
        },
    },
});*/

