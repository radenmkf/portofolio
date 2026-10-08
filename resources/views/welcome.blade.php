<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio - Rd. Muhammad Khrysna Febrieansyach</title>
  <style>
    :root {
      --primary: #0284c7;
      --primary-dark: #0369a1;
      --secondary: #0f172a;
      --bg: #f8fafc;
      --card-bg: #ffffff;
      --text: #334155;
      --text-muted: #64748b;
      --border: #e2e8f0;
    }

    * {
      box-sizing: border-box;
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
      background-color: var(--bg);
      color: var(--text);
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 860px;
      margin: 0 auto;
      background: var(--card-bg);
      padding: 36px;
      border-radius: 12px;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
    }

    .profile-header {
      text-align: center;
      padding-bottom: 24px;
      border-bottom: 1px solid var(--border);
    }

    .profile-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      object-position: center 20%;
      margin: 0 auto 16px;
      display: block;
      border: 4px solid var(--primary);
      box-shadow: 0 4px 14px rgba(2, 132, 199, 0.25);
    }

    h1 {
      margin: 0 0 8px;
      color: var(--secondary);
      font-size: 1.8rem;
    }

    .subtitle {
      color: var(--primary);
      font-weight: 600;
      font-size: 1.05rem;
      margin-bottom: 12px;
    }

    .bio {
      max-width: 650px;
      margin: 0 auto;
      color: var(--text-muted);
    }

    h2 {
      color: var(--secondary);
      border-left: 4px solid var(--primary);
      padding-left: 12px;
      margin-top: 36px;
      margin-bottom: 18px;
      font-size: 1.35rem;
    }

    blockquote {
      font-style: italic;
      color: #475569;
      background-color: #f0f9ff;
      border-left: 4px solid var(--primary);
      margin: 20px 0;
      padding: 14px 20px;
      border-radius: 0 8px 8px 0;
    }
    blockquote footer {
      font-style: normal;
      font-weight: 600;
      font-size: 0.85rem;
      margin-top: 6px;
      color: var(--primary-dark);
    }

    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 16px;
      margin-top: 12px;
    }

    .skill-card {
      background: #f8fafc;
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 16px;
    }

    .skill-card h3 {
      margin: 0 0 10px;
      font-size: 1rem;
      color: var(--secondary);
    }

    .badge-list {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    .badge {
      background-color: #e0f2fe;
      color: #0369a1;
      padding: 4px 10px;
      border-radius: 20px;
      font-size: 0.82rem;
      font-weight: 500;
    }

    .project-card {
      background: #ffffff;
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 18px;
      margin-bottom: 14px;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .project-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.06);
    }

    .project-card h3 {
      margin: 0 0 6px;
      color: var(--secondary);
      font-size: 1.1rem;
    }

    .project-card p {
      margin: 0 0 10px;
      color: var(--text-muted);
      font-size: 0.95rem;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 16px 0;
    }

    th, td {
      border: 1px solid var(--border);
      padding: 12px 14px;
      text-align: left;
    }

    th {
      background-color: #f1f5f9;
      color: var(--secondary);
      font-weight: 600;
    }

    .media-box {
      background: #f8fafc;
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      margin-top: 12px;
    }

    iframe {
      width: 100%;
      max-width: 640px;
      height: 360px;
      border-radius: 8px;
      border: none;
    }

    audio {
      width: 100%;
      max-width: 500px;
    }

    .contact-form {
      display: grid;
      gap: 12px;
      margin-top: 16px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid var(--border);
      border-radius: 6px;
      font-family: inherit;
      font-size: 0.95rem;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      outline: none;
      border-color: var(--primary);
    }

    .btn-submit {
      background: var(--primary);
      color: #ffffff;
      border: none;
      padding: 12px;
      font-weight: 600;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.2s;
    }

    .btn-submit:hover {
      background: var(--primary-dark);
    }

    .social-links {
      text-align: center;
      margin-top: 24px;
    }

    .social-links a {
      display: inline-block;
      margin: 0 8px;
      color: var(--primary);
      text-decoration: none;
      font-weight: 600;
      padding: 6px 12px;
      border: 1px solid var(--border);
      border-radius: 6px;
      transition: all 0.2s;
    }

    .social-links a:hover {
      background: var(--primary);
      color: white;
      border-color: var(--primary);
    }

    footer.page-footer {
      text-align: center;
      margin-top: 40px;
      padding-top: 20px;
      border-top: 1px solid var(--border);
      color: var(--text-muted);
      font-size: 0.88rem;
    }
  </style>
</head>
<body>
  <div class="container">

    <!-- 1. Header & Foto Profil (Laravel Asset Helper) -->
    <header class="profile-header">
      <img src="{{ asset('profil.jpg') }}" alt="Foto Profil Rd. Muhammad Khrysna Febrieansyach" class="profile-img">
      <h1>Rd. Muhammad Khrysna Febrieansyach</h1>
      <div class="subtitle">Informatics Student &bull; Web &amp; IoT Enthusiast</div>
      <p class="bio">
        Mahasiswa Teknik Informatika yang berfokus pada pengembangan antarmuka web, rekayasa perangkat lunak, serta implementasi sistem cerdas berbasis mikrokontroler dan Internet of Things.
      </p>
    </header>

    <!-- 2. Kutipan Inspiratif -->
    <section>
      <blockquote cite="https://www.goodreads.com">
        "Kreativitas adalah kecerdasan yang bersenang-senang dan terus mengeksplorasi inovasi baru."
        <footer>&mdash; Albert Einstein</footer>
      </blockquote>
    </section>

    <!-- 3. Bidang Keahlian -->
    <section>
      <h2>Keahlian &amp; Teknologi</h2>
      <div class="skills-grid">
        <div class="skill-card">
          <h3>Web Development</h3>
          <div class="badge-list">
            <span class="badge">Laravel Framework</span>
            <span class="badge">HTML5 Semantik</span>
            <span class="badge">CSS3 Modern</span>
            <span class="badge">PHP / MySQL</span>
          </div>
        </div>
        <div class="skill-card">
          <h3>Hardware &amp; IoT</h3>
          <div class="badge-list">
            <span class="badge">ESP32 &amp; Arduino</span>
            <span class="badge">Sensor DHT11</span>
            <span class="badge">Sensor HC-SR04</span>
            <span class="badge">Blynk IoT Platform</span>
          </div>
        </div>
        <div class="skill-card">
          <h3>Tools &amp; Metodologi</h3>
          <div class="badge-list">
            <span class="badge">Git &amp; GitHub</span>
            <span class="badge">SDLC (Waterfall)</span>
            <span class="badge">Canva Design</span>
            <span class="badge">VS Code</span>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. Proyek Pilihan -->
    <section>
      <h2>Proyek Pilihan</h2>
      <div class="project-card">
        <h3>Uji Safety Mesin: Deteksi Jarak &amp; Suhu (IoT)</h3>
        <p>Sistem pemantauan keselamatan mesin otomatis menggunakan mikrokontroler ESP32 terintegrasi sensor jarak HC-SR04, sensor suhu DHT11, relay, dan notifikasi peringatan melalui aplikasi Blynk IoT.</p>
        <div class="badge-list">
          <span class="badge">ESP32</span>
          <span class="badge">C++ / Arduino IDE</span>
          <span class="badge">Blynk IoT</span>
        </div>
      </div>

      <div class="project-card">
        <h3>Website Portofolio Responsif</h3>
        <p>Perancangan halaman profil web interaktif berbasis HTML5 semantik, CSS Flexbox/Grid, serta elemen multimedia yang terstruktur.</p>
        <div class="badge-list">
          <span class="badge">Laravel Blade</span>
          <span class="badge">HTML5</span>
          <span class="badge">Responsive Web</span>
        </div>
      </div>

      <div class="project-card">
        <h3>Analisis Perancangan Sistem Metode Waterfall</h3>
        <p>Penyusunan dokumen perancangan dan alur SDLC model sekuensial linier dari tahap analisis kebutuhan hingga verifikasi sistem.</p>
        <div class="badge-list">
          <span class="badge">SDLC</span>
          <span class="badge">Waterfall Model</span>
          <span class="badge">Software Engineering</span>
        </div>
      </div>
    </section>

    <!-- 5. Riwayat Akademik & Pengalaman -->
    <section>
      <h2>Riwayat Akademik &amp; Proyek</h2>
      <table>
        <thead>
          <tr>
            <th>Aktivitas / Jenjang</th>
            <th>Institusi / Tim</th>
            <th>Tahun</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>S1 Teknik Informatika</td>
            <td>Fakultas Teknologi Informasi (FTI)</td>
            <td>2024 - Sekarang</td>
          </tr>
          <tr>
            <td>Pengembangan Proyek IoT Keselamatan Mesin</td>
            <td>Informatika Kelompok Proyek</td>
            <td>2026</td>
          </tr>
          <tr>
            <td>Praktikum Pemrograman Berbasis Web</td>
            <td>Laboratorium Komputer FTI</td>
            <td>2026</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- 6. Hobi & Minat -->
    <section>
      <h2>Minat &amp; Fokus Pembelajaran</h2>
      <p>Kegiatan eksplorasi mandiri:</p>
      <ul>
        <li>Eksperimen mikrokontroler, modul sensor, dan otomasi IoT</li>
        <li>Riset arsitektur dan perakitan komponen perangkat keras komputer</li>
        <li>Desain tata letak grafis dan visualisasi antarmuka aplikasi</li>
      </ul>

      <p>Rencana peningkatan keterampilan teknis berurutan:</p>
      <ol>
        <li>Penguasaan arsitektur backend dan basis data MySQL</li>
        <li>Integrasi API mikrokontroler dengan dashboard berbasis web</li>
        <li>Penerapan framework web modern untuk produksi skala penuh</li>
      </ol>
    </section>

    <!-- 7. Multimedia Audio & Video -->
    <section>
      <h2>Multimedia &amp; Showcase</h2>
      <p><strong>Audio Favorit:</strong></p>
      <div class="media-box">
        <p style="margin: 0 0 10px; font-size: 0.9rem; color: var(--text-muted);">
          Lagu Sunda - Tukang Dagang (Yordan Remix / DJ Oncom Gondrong)
        </p>
        <audio controls>
          <source src="{{ asset('lagu.mp3') }}" type="audio/mpeg">
          Browser Anda tidak mendukung pemutar audio.
        </audio>
      </div>

      <p style="margin-top: 20px;"><strong>Video Demonstrasi Proyek:</strong></p>
      <div class="media-box">
        <iframe src="https://www.youtube.com/embed/_pDyQI0-bSo" 
                title="Demo IoT: Monitoring Suhu DHT11 &amp; Kontrol Kipas Otomatis via ESP32 &amp; Blynk - Kelompok 3"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
        </iframe>
        <p style="margin-top: 10px; font-size: 0.9rem; color: var(--text-muted);">
          Demo IoT: Monitoring Suhu DHT11 &amp; Kontrol Kipas Otomatis via ESP32 &amp; Blynk - Kelompok 3
        </p>
      </div>
    </section>

    <!-- 8. Form Kontak -->
    <section>
      <h2>Kirim Pesan</h2>
      <form class="contact-form" action="#" method="POST" onsubmit="event.preventDefault(); alert('Pesan berhasil terkirim!');">
        <input type="text" name="nama" placeholder="Nama Anda" required>
        <input type="email" name="email" placeholder="Alamat Email" required>
        <textarea name="pesan" rows="4" placeholder="Tuliskan pesan atau tawaran kolaborasi..." required></textarea>
        <button type="submit" class="btn-submit">Kirim Pesan</button>
      </form>
    </section>

    <!-- 9. Tautan Media Sosial -->
    <section class="social-links">
      <a href="https://github.com/radenmkf" target="_blank" rel="noopener noreferrer">GitHub</a>
      <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer">LinkedIn</a>
      <a href="https://fti.unsap.ac.id" target="_blank" rel="noopener noreferrer">Website FTI Kampus</a>
    </section>

    <!-- 10. Footer -->
    <footer class="page-footer">
      <p>&copy; 2026 Rd. Muhammad Khrysna Febrieansyach. Praktikum Pemrograman Berbasis Web (Laravel Edition).</p>
    </footer>

  </div>
</body>
</html>