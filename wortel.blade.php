<!doctype html>
<html lang="id">
<head>
<meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1"/>
<!--meta content="#000000" name="theme-color"/--><link rel="icon" href="/icon.svg"/>
<script defer src="https://unpkg.com/alpinejs@3.10.4/dist/cdn.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<link href="/output.css" rel="stylesheet"/>

</head>
<body>
<main class="container-2xl">

<header x-data="{ open: false }">
<nav class="bg-slate-900 w-full py-3 border-bottom">
  <div class="mx-auto px-2 flex justify-between" style="max-width: 800px;">

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
<div class="md:px-24 px-2 mx-auto pt-2 pb-2 overflow-x" style="max-width: 800px;">
<canvas id="myChart" class="w-full" width="400" height="400"></canvas>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Wortel Kecil', 'Wortel Sedang', 'Wortel Besar'],
        datasets: [{
            label: 'Mata uang Rupiah',
            data: [4000, 4500, 5000],
            backgroundColor: [
		'rgba(54, 162, 235, 0.2)',
		'rgba(54, 162, 235, 0.2)',
		'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
		'rgba(54, 162, 235, 1)',
		'rgba(54, 162, 235, 1)',
		'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</div>
</div>

<div class="w-full mx-auto bg-slate-900 text-slate-400 border-t-2 border-slate-800" style="font-family: 'Initial', sans-serif;">
<div class="md:px-24 px-2 pt-2 pb-6 mx-auto text-sm tracking-wide" style="font-weight: 400; max-width: 800px;">
<title class="block text-lg py-2 font-medium text-slate-300">Analitik Harga Wortel per 1 KG (Kilo Gram)</title>
<summary class="text-lg block" style="font-weight: 400; font-family: Arial;">
<time class="text-md text-blue-200 block py-2 flex justify-start">
<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><path d="M17,2c-0.55,0-1,0.45-1,1v1H8V3c0-0.55-0.45-1-1-1S6,2.45,6,3v1H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14 c1.1,0,2-0.9,2-2V6c0-1.1-0.9-2-2-2h-1V3C18,2.45,17.55,2,17,2z M19,20H5V10h14V20z M11,13c0-0.55,0.45-1,1-1s1,0.45,1,1 s-0.45,1-1,1S11,13.55,11,13z M7,13c0-0.55,0.45-1,1-1s1,0.45,1,1s-0.45,1-1,1S7,13.55,7,13z M15,13c0-0.55,0.45-1,1-1s1,0.45,1,1 s-0.45,1-1,1S15,13.55,15,13z M11,17c0-0.55,0.45-1,1-1s1,0.45,1,1s-0.45,1-1,1S11,17.55,11,17z M7,17c0-0.55,0.45-1,1-1 s1,0.45,1,1s-0.45,1-1,1S7,17.55,7,17z M15,17c0-0.55,0.45-1,1-1s1,0.45,1,1s-0.45,1-1,1S15,17.55,15,17z"/></g></svg>
Kamis, 03 November 2022.</time>
Analitiklink mencatat analitik harga wortel mulai 03 November 2022. Cara membaca harga di bagan dapat anda sentuh. Sedangkan deskripsi secara naratif dapat anda baca dan pahami dibawah ini.<br/>
Harga jenis wortel dibagi menjadi 3 yaitu wortel ukuran kecil, wortel ukuran sedang  dan wortel ukuran besar, Secara kualitas wortel terdiri dari beberapa nilai diantaranya ukuran, warna dan kondisi kesegaran wortel. Harga Wortel kecil per 1 Kilogram dengan harga 4.000 Rupiah dan harga wortel sedang per 1 kilogram dengan harga 4.500 rupiah serta wortel besar per 1 kilogram dengan harga 5000 Rupiah. Dibeberapa wilayah tertentu di suatu provinsi mungkin ada penyesuaian ketetapan harga ada wilayah yang sedikit penurunan dari harga umum dan sedikit kenaikan dari ketetapan harga wortel yang analitiklink yang sudah diumumkan. Harga yang tercatat dibagan statistik cenderung tetap, harga wortel tersebar diseluruh provinsi di indonesia cenderung banyak perubahan naik dan turun laporkan harga di wilayah anda dengan berkomentar di discord analitiklink, Analitiklink akan memperbarui pencatatan harga dibagan analitik seiring dengan kebijakan baru dengan secepatnya.
</summary>
</div>
</div>

<h3 class="flex border-l bg-slate-900 text-lg font-medium text-neutral-300 p-2 text-center">Validitas Data Analytics <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"/></svg></h3>
<section class="flex bg-slate-900 overflow-x-scroll">
<div class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md">
    <a href="#">
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-neutral-600 dark:text-white">News </h5>
    </a>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
</div>

<div class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md">
    <a href="#">
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-neutral-600 dark:text-white">Need a help in Claim?</h5>
    </a>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
</div>

<div class="p-6 mx-5 my-5 min-w-fit max-w-sm bg-neutral-900 rounded-sm shadow-md">
    <a href="#">
        <h5 class="mb-2 text-lg font-semibold tracking-tight text-neutral-600 dark:text-white">Need a help in Claim?</h5>
    </a>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline process on how to certify for your weekly benefits:</p>
</div>
</section>

<div class="w-full text-white mx-auto bg-gray-700 border-t border-neutral-800 select-none">
<div class="md:px-24 mx-auto px-4 py-8" style="max-width: 800px;">
<img class="rounded-full block h-14 w-14 md:h-10 md:w-10 bg-white border-4 border-slate-800 hover:border-blue-400 hover:bg-blue-300" src="/icon.svg" alt="Figure"/>
<p class="block pt-2 pl-2 py-2 text-neutral-200 italic">AnalitikLink sangat bagus tampilan bagan analitik data yang kuat ditambah tampilan background yang Blue Mode.</p>
<h5 class="block py-1 pl-2 text-neutral-300 font-sm underline">Giofanny Sabekti</h5>
<h6 class="block pl-2 text-neutral-200 font-sm font-bold italic">Karyawan, Analitiklink</h6>
</div>
</div>

<section class="w-full mx-auto select-none">
<div class="md:px-24 px-2 mx-auto columns-2 flex justify-center py-10 bg-neutral-800 border-t border-neutral-700" style="max-width: 800px;">
<p class="block text-neutral-300 px-4 w-3/4">Komentar hanya tersedia di server discord, Ajukan permohonan terkait privasi, data rahasia, data salah, DisInformasi dan Report.</p>
<button type="button" class="btn block mx-auto bg-sky-900 hover:bg-blue-800 px-4 border border-neutral-600 rounded-full">
<a href="/discord.html" rel="noopener"><svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="white"><path d="M14.82 4.26a10.14 10.14 0 0 0-.53 1.1 14.66 14.66 0 0 0-4.58 0 10.14 10.14 0 0 0-.53-1.1 16 16 0 0 0-4.13 1.3 17.33 17.33 0 0 0-3 11.59 16.6 16.6 0 0 0 5.07 2.59A12.89 12.89 0 0 0 8.23 18a9.65 9.65 0 0 1-1.71-.83 3.39 3.39 0 0 0 .42-.33 11.66 11.66 0 0 0 10.12 0q.21.18.42.33a10.84 10.84 0 0 1-1.71.84 12.41 12.41 0 0 0 1.08 1.78 16.44 16.44 0 0 0 5.06-2.59 17.22 17.22 0 0 0-3-11.59 16.09 16.09 0 0 0-4.09-1.35zM8.68 14.81a1.94 1.94 0 0 1-1.8-2 1.93 1.93 0 0 1 1.8-2 1.93 1.93 0 0 1 1.8 2 1.93 1.93 0 0 1-1.8 2zm6.64 0a1.94 1.94 0 0 1-1.8-2 1.93 1.93 0 0 1 1.8-2 1.92 1.92 0 0 1 1.8 2 1.92 1.92 0 0 1-1.8 2z"/></svg></a>
</button>
</div>
</section>


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
