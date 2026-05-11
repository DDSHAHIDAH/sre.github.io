<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Revision Hub: Requirements Engineering (CSE3203/3503)</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: #f0f4f8;
            font-family: 'Segoe UI', 'Inter', system-ui, -apple-system, 'Roboto', sans-serif;
            line-height: 1.5;
            color: #1e293b;
            padding: 2rem 1rem;
        }
        .container {
            max-width: 1300px;
            margin: 0 auto;
        }
        /* header */
        .hero {
            background: linear-gradient(135deg, #0f2b3d, #1a4a6f);
            border-radius: 2rem;
            padding: 2rem 2rem 2rem 2rem;
            margin-bottom: 2rem;
            color: white;
            box-shadow: 0 12px 25px -10px rgba(0,0,0,0.2);
        }
        .hero h1 {
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: -0.3px;
            margin-bottom: 0.5rem;
        }
        .hero p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 700px;
        }
        .badge {
            background: #ffb347;
            color: #1e293b;
            display: inline-block;
            border-radius: 40px;
            padding: 0.2rem 1rem;
            font-size: 0.8rem;
            font-weight: 600;
            margin-top: 1rem;
        }
        /* tab navigation */
        .tab-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-bottom: 2rem;
            border-bottom: 2px solid #cbd5e1;
            padding-bottom: 0.5rem;
        }
        .tab-btn {
            background: transparent;
            border: none;
            font-size: 1.1rem;
            font-weight: 600;
            padding: 0.7rem 1.5rem;
            border-radius: 40px;
            cursor: pointer;
            transition: all 0.2s ease;
            color: #334155;
            font-family: inherit;
        }
        .tab-btn:hover {
            background: #e2e8f0;
            color: #0f3b5c;
        }
        .tab-btn.active {
            background: #1a4a6f;
            color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        /* cards & content */
        .chapter-content {
            display: none;
            animation: fadeIn 0.25s ease;
        }
        .chapter-content.active-chapter {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px);}
            to { opacity: 1; transform: translateY(0);}
        }
        .card {
            background: white;
            border-radius: 1.5rem;
            padding: 1.8rem;
            margin-bottom: 1.8rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: transform 0.1s;
            border: 1px solid #e9eef3;
        }
        .card h2 {
            font-size: 1.7rem;
            margin-bottom: 1rem;
            color: #0c4a6e;
            border-left: 5px solid #ffb347;
            padding-left: 1rem;
        }
        .card h3 {
            font-size: 1.3rem;
            margin: 1.2rem 0 0.6rem 0;
            color: #1e4a76;
        }
        .card h4 {
            font-size: 1.1rem;
            margin: 1rem 0 0.4rem;
            color: #2c5a7a;
        }
        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.2rem;
            margin: 1rem 0;
        }
        .info-box {
            background: #f8fafc;
            border-radius: 1rem;
            padding: 1rem;
            border-left: 4px solid #ffb347;
        }
        .kano-badge {
            display: inline-block;
            background: #eef2ff;
            border-radius: 20px;
            padding: 0.2rem 0.8rem;
            font-weight: 500;
            font-size: 0.8rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 1rem 0;
            font-size: 0.95rem;
        }
        th, td {
            border: 1px solid #cbd5e1;
            padding: 0.7rem;
            text-align: left;
            vertical-align: top;
        }
        th {
            background: #eef2ff;
            font-weight: 600;
        }
        .glossary-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
        }
        .glossary-item {
            background: white;
            border: 1px solid #dce3ec;
            border-radius: 50px;
            padding: 0.3rem 1rem;
            font-size: 0.85rem;
            font-weight: 500;
        }
        hr {
            margin: 1rem 0;
            border-color: #e2e8f0;
        }
        .highlight {
            background: #fffbeb;
            padding: 0.2rem 0.4rem;
            border-radius: 8px;
            font-weight: 500;
        }
        footer {
            text-align: center;
            margin-top: 3rem;
            padding: 1.5rem;
            color: #475569;
            border-top: 1px solid #cbd5e1;
        }
        @media (max-width: 640px) {
            .tab-btn {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
            .card {
                padding: 1.2rem;
            }
            .hero h1 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="hero">
        <h1>📘 RE Revision Hub</h1>
        <p>CSE3203 / CSE3503 — Requirements Engineering <br> Nota lengkap Bab 1 hingga 4 | Exam preparation</p>
        <div class="badge">🎯 berdasarkan silibus & slides</div>
    </div>

    <div class="tab-bar">
        <button class="tab-btn active" data-tab="chap1">📖 Bab 1: Asas RE</button>
        <button class="tab-btn" data-tab="chap2">🔍 Bab 2: Sistem & Konteks</button>
        <button class="tab-btn" data-tab="chap3">💡 Bab 3: Elicitation</button>
        <button class="tab-btn" data-tab="chap4">📄 Bab 4: Dokumentasi</button>
    </div>

    <!-- ================= BAB 1 ================= -->
    <div id="chap1" class="chapter-content active-chapter">
        <div class="card">
            <h2>📌 Bab 1: Gambaran Keseluruhan RE</h2>
            <h3>🎯 Matlamat Bab</h3>
            <ul>
                <li>Peranan <strong>quality management</strong> dalam RE</li>
                <li>4 aktiviti utama RE</li>
                <li>Kemahiran Requirement Engineer</li>
                <li>Peranan komunikasi (Model 4 Telinga)</li>
                <li>3 jenis keperluan (Functional, Quality, Constraint)</li>
            </ul>
            <h3>✅ Definisi Requirement (IEEE 610.12)</h3>
            <p><em>“Suatu kondisi atau keupayaan yang mesti dipenuhi oleh sistem untuk memenuhi kontrak, standard atau spesifikasi.”</em></p>
            <h3>⚠️ Mengapa projek gagal? (Survey ESI 2005)</h3>
            <ul>
                <li><strong>50% Poor requirement definition</strong> – punca utama</li>
                <li>17% Poor scope definition | 15% Inadequate risk mgmt | 3% kurang sumber berkualiti</li>
            </ul>
            <h3>🧑‍🤝‍🧑 Stakeholder</h3>
            <p>Individu/kumpulan yang secara langsung/tidak langsung <strong>mempengaruhi keperluan sistem</strong>.</p>
            <h3>⚙️ 4 Aktiviti Utama RE</h3>
            <div class="grid-2">
                <div class="info-box"><strong>1. Elicitation</strong><br>Dapat & perhalusi keperluan dari stakeholder.</div>
                <div class="info-box"><strong>2. Documentation</strong><br>Mendokumentasi keperluan dengan betul.</div>
                <div class="info-box"><strong>3. Validation & Negotiation</strong><br>Semak kualiti & selesai konflik.</div>
                <div class="info-box"><strong>4. Requirement Management</strong><br>Struktur, perubahan, pelaksanaan konsisten.</div>
            </div>
            <h3>🗣️ Model Komunikasi 4-Ear (Schulz von Thun)</h3>
            <table>
                <tr><th>Telinga</th><th>Maksud</th><th>Contoh</th></tr>
                <tr><td>Fakta</td><td>Maklumat objektif</td><td>"Lampu trafik hijau"</td></tr>
                <tr><td>Rayuan</td><td>Arahan/permintaan</td><td>"Mula memandu"</td></tr>
                <tr><td>Hubungan</td><td>Bagaimana hubungan</td><td>"Saya pemandu lebih baik"</td></tr>
                <tr><td>Pendedahan diri</td><td>Apa yang didedah tentang diri</td><td>"Saya tergesa-gesa"</td></tr>
            </table>
            <h3>🛠️ Kemahiran Requirements Engineer</h3>
            <p>Empati, komunikasi, keyakinan, analitikal, penyelesaian konflik, moderasi, pengetahuan metodologi.</p>
            <h3>🏷️ 3 Jenis Keperluan</h3>
            <table>
                <tr><th>Functional</th><td>Apa sistem perlu buat (tingkah laku/fungsi)</td></tr>
                <tr><th>Quality (NF)</th><td>Kriteria kualiti, mesti boleh diverifikasi (cth: prestasi, keselamatan)</td></tr>
                <tr><th>Constraint</th><td>Had ruang penyelesaian (cth: guna OS tertentu, bajet)</td></tr>
            </table>
        </div>
    </div>

    <!-- ================= BAB 2 ================= -->
    <div id="chap2" class="chapter-content">
        <div class="card">
            <h2>🔍 Bab 2: Sistem & Konteks Sistem</h2>
            <h3>📐 Istilah Utama</h3>
            <ul>
                <li><strong>Sempadan Sistem (System Boundary)</strong> – memisahkan sistem dari persekitaran; bahagian yang BOLEH diubah semasa pembangunan.</li>
                <li><strong>Konteks Sistem (System Context)</strong> – bahagian persekitaran yang RELEVAN untuk memahami keperluan.</li>
                <li><strong>Sempadan Konteks (Context Boundary)</strong> – memisahkan persekitaran relevan dari yang TIDAK relevan.</li>
            </ul>
            <h3>🔄 Konteks vs Skop</h3>
            <ul>
                <li><strong>Konteks</strong>: perubahan sempadan PERLU rundingan dengan rakan antara muka.</li>
                <li><strong>Skop</strong>: julat yang boleh direka; perubahan skop biasanya TIDAK perlu rundingan.</li>
            </ul>
            <h3>🏢 Contoh: Sistem Perpustakaan</h3>
            <p><strong>Dalam sempadan sistem</strong>: proses perniagaan, perisian, perkakasan, dokumen.<br>
            <strong>Konteks</strong>: Pustakawan, Ahli, Sistem Pembayaran, Sistem Penerbit, Peraturan, Peristiwa (tempoh pinjaman tamat).<br>
            <strong>Tidak relevan</strong>: Sistem HR.</p>
            <h3>📊 Mendokumentasi Konteks: UML</h3>
            <div class="grid-2">
                <div class="info-box"><strong>📈 DFD (Data Flow Diagram)</strong><br>Sumber & tujuan aliran data antara sistem & entiti luar.</div>
                <div class="info-box"><strong>👥 Use Case Diagram</strong><br>Pelakon & kes gunaan (apa yang sistem lakukan).</div>
            </div>
            <h3>📌 Tips Exam</h3>
            <ul>
                <li>Sempadan sistem ↔ boleh diubah, perlu rundingan jika berubah.</li>
                <li>Sempadan konteks ↔ relevan vs tidak relevan.</li>
                <li>Kenalpasti pelakon, sistem luaran, peristiwa, dokumen untuk sesebuah sistem.</li>
            </ul>
        </div>
    </div>

    <!-- ================= BAB 3 ================= -->
    <div id="chap3" class="chapter-content">
        <div class="card">
            <h2>💡 Bab 3: Requirement Elicitation</h2>
            <h3>🎯 Objektif</h3>
            <ul>
                <li>Mengetahui sumber keperluan (Stakeholder, sistem sedia ada, undang-undang)</li>
                <li>Mengaplikasi <strong>Kano Model</strong> untuk keutamaan ciri</li>
                <li>Memilih teknik elicitation berdasarkan situasi</li>
                <li>Mengurus stakeholder: senarai & peta kuasa/kepentingan</li>
            </ul>
            <h3>🗺️ Peta Stakeholder (Power/Interest Matrix)</h3>
            <table>
                <tr><th>Kategori</th><th>Kuasa</th><th>Kepentingan</th><th>Strategi</th></tr>
                <tr><td>Promoters</td><td>Tinggi</td><td>Tinggi</td><td>Libatkan sepenuhnya</td></tr>
                <tr><td>Defenders</td><td>Sederhana/Rendah</td><td>Tinggi</td><td>Beri maklumat & sokongan</td></tr>
                <tr><td>Latents</td><td>Tinggi</td><td>Rendah</td><td>Pastikan tidak menghalang</td></tr>
                <tr><td>Apathetics</td><td>Rendah</td><td>Rendah</td><td>Maklumkan secukupnya</td></tr>
            </table>

            <h3>📊 Kano Model (3 Kategori Utama)</h3>
            <div class="grid-2">
                <div class="info-box"><span class="kano-badge">❌ Dissatisfiers (Basic)</span> Mesti ada. Jika tiada → kecewa. Jika ada → neutral. Contoh: sistem boleh log masuk.</div>
                <div class="info-box"><span class="kano-badge">⚖️ Satisfiers (Performance)</span> Lebih banyak → lebih puas. Contoh: kelajuan pemprosesan.</div>
                <div class="info-box"><span class="kano-badge">✨ Delighters (Excitement)</span> Kejutan. Jika ada → gembira, jika tiada → tidak kecewa. Contoh: pengecaman muka.</div>
            </div>

            <h3>🛠️ Teknik Elicitation (Penting untuk exam)</h3>
            <ul>
                <li><strong>Temubual (Interview)</strong> – individu/kumpulan</li>
                <li><strong>Soal Selidik (Questionnaire)</strong> – soalan terbuka/tertutup</li>
                <li><strong>Observasi (Observation / Apprenticing)</strong> – RE belajar dari pengalaman sebenar, kenalpasti basic factors.</li>
                <li><strong>Teknik kreativiti:</strong> Brainstorming, Analogi (hidden/open), Mind mapping</li>
                <li><strong>Berpusat dokumen:</strong> System Archeology, Perspektif-based reading, Requirement reuse</li>
                <li><strong>Teknik sokongan:</strong> Workshop (dimoderasi RE), Prototaip (UI mockup, CRC cards)</li>
            </ul>
            <h3>🧠 Faktor pemilihan teknik</h3>
            <p>Pengetahuan stakeholder, budaya, kerahsiaan, domain, keperluan detail, sama ada stakeholder tahu menyatakan kerja mereka → guna observation / dokumentasi.</p>
        </div>
    </div>

    <!-- ================= BAB 4 ================= -->
    <div id="chap4" class="chapter-content">
        <div class="card">
            <h2>📄 Bab 4: Requirements Documentation</h2>
            <h3>📌 Mengapa perlu dokumentasi?</h3>
            <ul>
                <li>Keperluan bersifat <strong>tahan lama</strong> (long lasting)</li>
                <li><strong>Kepentingan undang-undang</strong> (kontrak, litigasi)</li>
                <li>Perlu <strong>diakses semua pihak</strong> (pengurusan, pembangun, penguji, klien)</li>
                <li>Asas untuk anggaran usaha, perancangan projek, pengurusan risiko, ujian, penerimaan.</li>
            </ul>
            <h3>👥 Kumpulan Sasaran & Kegunaan</h3>
            <table>
                <tr><th>Kumpulan</th><th>Kegunaan dokumen keperluan</th></tr>
                <tr><td>Pengurusan</td><td>Kontrak, anggaran, kawalan projek, analisis risiko</td></tr>
                <tr><td>Pembangun</td><td>Seni bina sistem, implementasi, bahan sokongan</td></tr>
                <tr><td>Klien/Kontraktor</td><td>Perancangan aktiviti, penerimaan (acceptance)</td></tr>
                <tr><td>Penguji</td><td>Spesifikasi kes ujian (test specification)</td></tr>
            </table>
            <h3>📑 Requirements Specification vs Requirements Document</h3>
            <ul>
                <li><strong>Spesifikasi Keperluan</strong>: koleksi keperluan sistematik. Terdapat <em>Customer Requirements Spec</em> (ditulis pelanggan) dan <em>System/Software Requirements Spec</em> (ditulis pembekal).</li>
                <li><strong>Dokumen Keperluan</strong>: dokumen yang mengandungi spesifikasi keperluan (sinonim biasa).</li>
            </ul>
            <h3>🏆 Ciri-ciri keperluan yang baik</h3>
            <p><span class="highlight">Jelas (Clear)</span> · <span class="highlight">Lengkap (Complete)</span> · <span class="highlight">Konsisten (Consistent)</span> · <span class="highlight">Boleh diuji (Verifiable)</span></p>

            <h3>📖 Glosari (Glossary) – elemen kritikal</h3>
            <p><strong>Tujuan:</strong> Memastikan semua stakeholder guna istilah yang sama dengan makna yang sama, mengelakkan salah tafsir.<br>
            <strong>Kandungan:</strong> Istilah, definisi, sinonim, rujukan. Peraturan: gunakan secara konsisten, kemas kini, satu istilah satu makna.</p>

            <h3>📐 Standard & Penyesuaian</h3>
            <ul>
                <li>Rujukan: <strong>ISO/IEC/IEEE 29148:2011</strong> – garis panduan struktur dokumen keperluan.</li>
                <li>Struktur boleh <strong>disesuaikan</strong> mengikut model kitaran hayat (contoh: projek tangkas guna user stories).</li>
            </ul>
            <h3>🧾 Ringkasan Bab 4 (Exam focus)</h3>
            <ul>
                <li>Dokumentasi perlu untuk semua kumpulan sasaran</li>
                <li>Spesifikasi vs dokumen keperluan</li>
                <li>Glosari memastikan konsistensi istilah</li>
                <li>Kandungan dokumen bergantung pada standard, bentuk dan proses</li>
            </ul>
        </div>
    </div>

    <!-- additional glossary + quick reference -->
    <div class="card" style="background: #fefce8;">
        <h3>📚 Glosari Pantas (Semua Bab)</h3>
        <div class="glossary-list">
            <span class="glossary-item">🧩 Requirements Engineering</span>
            <span class="glossary-item">🎯 Stakeholder</span>
            <span class="glossary-item">📌 Elicitation</span>
            <span class="glossary-item">📋 Kano Model</span>
            <span class="glossary-item">🔖 System Boundary</span>
            <span class="glossary-item">🌐 Context Boundary</span>
            <span class="glossary-item">📄 DFD / Use Case</span>
            <span class="glossary-item">📝 Functional Req</span>
            <span class="glossary-item">⚙️ Quality Req</span>
            <span class="glossary-item">🚧 Constraint</span>
            <span class="glossary-item">🗣️ 4-Ear Model</span>
            <span class="glossary-item">📖 Requirements Specification</span>
            <span class="glossary-item">🧾 Glossary</span>
            <span class="glossary-item">🏭 ISO/IEC 29148</span>
        </div>
        <hr>
        <p>💡 <strong>Tips peperiksaan:</strong> Fokus pada perbezaan sempadan sistem & konteks, teknik elicitation berdasarkan situasi, Kano model (basic/performance/excitement), kenapa glosari penting, dan 4 aktiviti RE. Semua jawapan ada di dalam nota di atas.</p>
    </div>
    <footer>
        📘 Revision untuk CSE3203/3503 — berdasarkan slides Chapter 1-4. Selamat belajar & semoga berjaya!
    </footer>
</div>

<script>
    // Tab switching logic
    const tabs = document.querySelectorAll('.tab-btn');
    const chapters = {
        chap1: document.getElementById('chap1'),
        chap2: document.getElementById('chap2'),
        chap3: document.getElementById('chap3'),
        chap4: document.getElementById('chap4')
    };

    function activateTab(tabId) {
        // remove active from all chapters
        Object.values(chapters).forEach(ch => {
            ch.classList.remove('active-chapter');
        });
        if (chapters[tabId]) {
            chapters[tabId].classList.add('active-chapter');
        }
        // update button active style
        tabs.forEach(btn => {
            btn.classList.remove('active');
            if (btn.getAttribute('data-tab') === tabId) {
                btn.classList.add('active');
            }
        });
    }

    tabs.forEach(btn => {
        btn.addEventListener('click', () => {
            const tabName = btn.getAttribute('data-tab');
            if (tabName === 'chap1') activateTab('chap1');
            else if (tabName === 'chap2') activateTab('chap2');
            else if (tabName === 'chap3') activateTab('chap3');
            else if (tabName === 'chap4') activateTab('chap4');
        });
    });
    // default chap1 already active
</script>
</body>
</html>
