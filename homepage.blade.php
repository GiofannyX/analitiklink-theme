<!doctype html>
<html lang="id">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta content="#ffffff" name="theme-color"/><link rel="icon" href="/icon.svg"/>
<script defer src="https://unpkg.com/alpinejs@3.10.4/dist/cdn.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<link href="/output.css" rel="stylesheet"/>

</head>
<body>
<main class="container-2xl">

<header x-data="{ open: false }">
<nav class="bg-slate-900 w-full py-3 border-bottom select-none">
  <div class="mx-auto px-2 flex justify-between">

    <div class="text-slate-300 font-semibold flex justify-between">
        <div class="px-1">
	<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 3.87v.02c0 .67.45 1.23 1.08 1.43C16.93 6.21 19 8.86 19 12c0 .52-.06 1.01-.17 1.49-.14.64.12 1.3.69 1.64l.01.01c.86.5 1.98.05 2.21-.91.17-.72.26-1.47.26-2.23 0-4.5-2.98-8.32-7.08-9.57-.95-.29-1.92.44-1.92  1.44zm-2.06 15.05c-2.99-.43-5.42-2.86-5.86-5.84-.54-3.6 1.66-6.77 4.83-7.76.64-.19 1.09-.76 1.09-1.43v-.02c0-1-.97-1.73-1.93-1.44-4.51 1.38-7.66 5.86-6.98 10.96.59 4.38 4.13 7.92 8.51 8.51 3.14.42 6.04-.61 8.13-2.53.74-.68.61-1.89-.26-2.39-.58-.34-1.3-.23-1.8.22-1.47 1.34-3.51 2.05-5.73 1.72z"/></svg>
        </div>
	<div class="text-md">
	  <span>AnalitikLink</span> <span class="text-sm text-slate-400 font-normal"> Data Analytic</span>
	</div>
    </div>  
    <button @click="open = ! open" class="outline outline-offset-2 outline-1 hover:bg-slate-700 outline-slate-800" style="border-radius: 1px;">
	<svg class="text-slate-300" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M4,5h16c0.55,0,1-0.45,1-1c0-0.55-0.45-1-1-1H4C3.45,3,3,3.45,3,4C3,4.55,3.45,5,4,5z"/><path d="M20,19H4c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1h16c0.55,0,1-0.45,1-1C21,19.45,20.55,19,20,19z"/></g></g></svg>
    </button>
  
 </div>
</nav>

<div class="w-full bg-slate-800 text-sky-50 text-sm p-1 py-5 border-t border-b border-gray-600" x-show="open">
<div class="flex justify-center columns-2 md:px-24 px-2 mx-auto" style="max-width: 800px;">
	<a href="/" class="block md:px-10 px-2" rel="noopener" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/></svg> Homepage</a>
	<a href="/sitemap.html" class="block md:px-10 px-2" rel="noopener" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-5.5-2.5l7.51-3.49L17.5 6.5 9.99 9.99 6.5 17.5zm5.5-6.6c.61 0 1.1.49 1.1 1.1s-.49 1.1-1.1 1.1-1.1-.49-1.1-1.1.49-1.1 1.1-1.1z"/></svg> Sitemap</a>
	<a href="/contact.html" class="block md:px-10 px-2" rel="noopener" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10C22,6.48,17.52,2,12,2z M12,20c-4.42,0-8-3.58-8-8 s3.58-8,8-8s8,3.58,8,8S16.42,20,12,20z"/><path d="M7.1,10.18c0.26,0.56,0.39,1.16,0.4,1.8c0.01,0.63-0.13,1.25-0.4,1.86l1.37,0.62c0.37-0.81,0.55-1.65,0.54-2.5 c-0.01-0.84-0.19-1.65-0.54-2.4L7.1,10.18z"/><path d="M13.33,7.33c0.78,1.57,1.18,3.14,1.18,4.64c0,1.51-0.4,3.09-1.18,4.69l1.35,0.66c0.88-1.81,1.33-3.61,1.33-5.35 c0-1.74-0.45-3.53-1.33-5.31L13.33,7.33z"/><path d="M10.2,8.72c0.53,1.07,0.8,2.21,0.8,3.4c0,1.17-0.26,2.23-0.78,3.15l1.3,0.74c0.65-1.15,0.98-2.45,0.98-3.89 c0-1.42-0.32-2.79-0.96-4.07L10.2,8.72z"/></g></g></svg> Contact</a>
	<a href="/discord.html" class="block md:px-10 px-2" rel="noopener" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg> Discord</a>
</div>
</div>
</header>

<div class="w-full mx-auto bg-neutral-900 border-b-1 border-neutral-800 text-slate-300">
<div class="mx-auto pt-2 pb-2 overflow-x">
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="/wortel.html" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Wortel Per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="/es-kristal.html" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Es Batu Kristal Per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Pupuk Yaramila Complex Per 50 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Zinc Anode Per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Fungisida Antracol per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Voer 511 Per 50 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>

<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ubi Cilembu Per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Pupuk Mutiara per 50 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Jagung Manis per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ikan Mujair per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Cat Tembok per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Telur Ayam per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>

<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Rambutan per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Mayonaise per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Oyong per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Nastar per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Teh Per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga LPG 5 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>

<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga SilverQueen per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Pupuk Phonska per 50 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Karet per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
   <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Jahe Merah per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Emas per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga CPO per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>

<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Fire Extinguisher per 6 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Pupuk ZA per 50 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Rumput Gajah per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga NPK Yaramila per 50 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ikan Bawal Per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Usus Ayam per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>

<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Mesin Cuci 8 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
   <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Dada Ayam per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ovaltine per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Mete per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Maggot per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Kentang per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>

<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Walet per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Nangka Per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Kepiting per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Alpukat per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga VCO per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600>
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Daging Sapi per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>

<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Lemon Per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Apar per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Salak per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Quaker OAT 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Lactogen per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Kacang Panjang per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Udang per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Rumput Laut per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Maggot Hidup per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Jeruk Nipis per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Besi Beton per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>

<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Pupuk Urea Per 50 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>

<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Nanas Per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>

<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga LPG per 12 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>

<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Iga Sapi per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>

</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Cabai Merah per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900"> 
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Gula per 3 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Fermipan per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>

<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Deterjen per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>

<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Vinilex per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>

<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Oncom per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Wiremesh per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Selada per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Besar per 60 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>

<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ikan Tongkol per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>

<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Jagung per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>

<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ubi Jalar per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Sayap Ayam per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga refill gas 12 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Pupuk TSP per 50 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ori Cat per 50 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Gula Merah per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Gula Halus per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Cat Dulax per 25 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ayam Fillet per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Fertiphos per 50 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Emping per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Timbangan 60 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Keledai per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Sarang Burung Walet per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Dada Ayam Fillet per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Cat Nippon Paint per 25 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga ZA Tawon per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Kacang Hijau per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Vanilli Bubuk 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ikan Patin per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga LPG 12 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Bawang Merah per 1 Kilogram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Bright Gas per 12 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Margarin 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Anggur Per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Vanilli Kering per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Limau Kasturi per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Tabung Gas Kosong 3 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Oyster per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Timah per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Bawang Putih per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Udang Galah per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Oksigen per 60 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Sorgum per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Rumput Pakchong per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ikan Gabus per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Fabrikasi Baja per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Merica per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Garam per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Jeruk per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Mangga per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Bagasi Air Asia per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Kunyit per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Okra per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
   <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Minyak Goreng per 1 Liter</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Kacang Tanah per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
   <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Freon R22 per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Emas Batangan 1 Kilo gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Daging Kambing per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Udang Windu per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ikan Tuna per 60 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ikan Mas per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Strawberry per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Tomat per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Jahe per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Nila per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Lele per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Ubi Kayu per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Freon R410 per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Pupuk KCL per 50 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Cat Besi per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Yeast per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Melon per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Tepung Terigu per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Apel per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Beras Pandan Wangi per 25 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Begel 8X12 per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Zircon per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Semangka per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Lobster per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Kuningan per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Cumi per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Besi per Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Q LUC per 25 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Udang Vaname per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Kelapa Sawit per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Timun per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Oatmeal per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Mentega per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
<section class="flex bg-slate-900 overflow-x-scroll">
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Yogurt per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Apar per 9 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Rendang Daging per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Zeopit per Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Singkong per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
<a href="" class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md select-none hover:border border-blue-900">
    <svg class="mb-2 w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g><path d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z"/><polygon points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93"/><polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9"/></g></g></svg>
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-white">Harga Nikel per 1 Kilo Gram</h5>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
    <div class="inline-flex items-center text-blue-600">
        See detail
	<svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
    </div>
</a>
</section>
</div>
</div>



<footer class="md:px-24 px-2 py-6 bg-neutral-900 bottom-0 select-none">
<div class="flex text-gray-200">
<h1 class="mb-6 font-semibold">
<div class="md:ml-20">
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff">
<path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 3.87v.02c0 .67.45 1.23 1.08 1.43C16.93 6.21 19 8.86 19 12c0 .52-.06 1.01-.17 1.49-.14.64.12 1.3.69 1.64l.01.01c.86.5 1.98.05 2.21-.91.17-.72.26-1.47.26-2.23 0-4.5-2.98-8.32-7.08-9.57-.95-.29-1.92.44-1.92 1.44zm-2.06 15.05c-2.99-.43-5.42-2.86-5.86-5.84-.54-3.6 1.66-6.77 4.83-7.76.64-.19 1.09-.76 1.09-1.43v-.02c0-1-.97-1.73-1.93-1.44-4.51 1.38-7.66 5.86-6.98 10.96.59 4.38 4.13 7.92 8.51 8.51 3.14.42 6.04-.61 8.13-2.53.74-.68.61-1.89-.26-2.39-.58-.34-1.3-.23-1.8.22-1.47 1.34-3.51 2.05-5.73 1.72z"/></svg>
</div><h1>Copyright © AnalitikLink</h1> <span class="px-2 text-xs text-neutral-500">Version 1.7</span>
</div>
<div class="font-normal flex justify-between md:justify-evenly text-gray-300">
<a href="/about.html" rel="nofollow" class="border-t hover:border-t-4 px-1 py-1">About</a>
<a href="/support.html" rel="nofollow" class="border-t hover:border-t-4 px-1 py-1">Support</a>
<a href="/disclaimer.html" rel="nofollow" class="border-t hover:border-t-4 px-1 py-1">Disclaimer</a>
<a href="/privacy.html" rel="nofollow" class="border-t hover:border-t-4 p-1 px-1 py-1">Privacy</a>
</div>
</footer>

</main>
</body>
</html>
