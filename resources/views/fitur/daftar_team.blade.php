<style>
        .team-header {
            background-color: #B9FF66;
            padding: 10px 20px;
            display: inline-block;
            border-radius: 5px;
            font-size: 24px;
            font-weight: bold;
        }

        .team-description {
            margin-left: 20px;
            font-size: 16px;
            display: inline-block;
            vertical-align: middle;
        }

        .team-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height:80%;
            display: flex;
            align-items: center;
            position: relative;
        }

        .team-card img {
            border-radius: 50%;
            width: 25%;
            height: 65%;
            margin-right: 20px;
            object-fit: cover; /* Cover the card */
            z-index: 1;
        }

        .team-card .info {
            flex: 1;
        }

        .team-card .name {
            font-size: 18px;
            font-weight: bold;
        }

        .team-card .position {
            font-size: 14px;
            color: #666;
        }

        .team-card .divider {
            border-top: 1px solid #ddd;
            margin: 10px 0;
        }

        .team-card .description {
            font-size: 14px;
        }

        .team-card .linkedin {
            font-size: 20px;
            color: #0077b5;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .header-container {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 20px;
        }
</style>

<div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="header-container">
                        <div class="team-header">
                            Team
                        </div>
                        <div class="team-description">
                            Berkenalan dengan tim ahli yang berdedikasi untuk memberikan layanan terbaik kepada
                            mahasiswa.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="team-card">
                        <img alt="Portrait of M. Faris Hafizh"
                            src="{{ asset('foto/ris.jpg') }}"/>
                        <div class="info">
                            <div class="name">
                                M. Faris Hafizh
                            </div>
                            <div class="position">
                                CEO dan Pendiri
                            </div>
                            <div class="divider">
                            </div>
                            <div class="description">
                                Berperan sebagai pemimpin proyek ini. Bertanggung jawab untuk mengelola visi, misi, dan
                                pengembangan layanan Go Laptop.
                            </div>
                        </div>
                        <i class="fab fa-linkedin linkedin">
                        </i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card">
                        <img alt="Portrait of M. Luthfi T."
                            src="{{ asset('foto/fi.jpg') }}" />
                        <div class="info">
                            <div class="name">
                                M. Luthfi T.
                            </div>
                            <div class="position">
                                Spesialis IT
                            </div>
                            <div class="divider">
                            </div>
                            <div class="description">
                                Keahlian di bidang teknologi, bertanggung jawab atas pengelolaan infrastruktur dan
                                pengembangan website Go Laptop.
                            </div>
                        </div>
                        <i class="fab fa-linkedin linkedin">
                        </i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card">
                        <img alt="Portrait of Arellia Agustin"
                            src="{{ asset('foto/rel.jpg') }}"/>
                        <div class="info">
                            <div class="name">
                                Arellia Agustin
                            </div>
                            <div class="position">
                                Manajer Operasional
                            </div>
                            <div class="divider">
                            </div>
                            <div class="description">
                                Fokus pada perencanaan operasional dan memastikan kelancaran pelaksanaan proyek Go
                                Laptop.
                            </div>
                        </div>
                        <i class="fab fa-linkedin linkedin">
                        </i>
                    </div>
                </div>
            </div>
        </div>