    <div class="card container-fluid">
        <div class="card-header">
            RM.02.01-RJ / Rev.02 / 19 Pasien Anak - anak
            <div class="card-tools">
            </div>
        </div>
        <form action="" class="simpanrmanak">
            <table class="table table-sm text-xs">
                <tr>
                    <td>Tanggal & Jam Kunjungan</td>
                    <td><input readonly id="tgldanjamkunjungan_pasienanak" class="form-control form-control-sm" name="tgldanjamkunjungan_pasienanak" id="tgldanjamkunjungan_pasienanak" value="{{ $now }}"></td>
                </tr>
                <tr>
                    <td>Tanggal & Jam Pengkajian</td>
                    <td><input readonly id="tgldanjampengkajian_pasienanak" name="tgldanjampengkajian_pasienanak" class="form-control form-control-sm" value="{{ $now }}"></td>
                </tr>
                <tr>
                    <td>Keluhan Utama</td>
                    <td>
                        <textarea class="form-control form-control-sm" name="keluhanutama_pasienanak" id="keluhanutama_pasienanak"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="text-center bg-secondary">
                        <h5>Tanda tanda Vital</h5>
                    </td>
                </tr>
                <tr>
                    <td>Tekanan Darah</td>
                    <td>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" id="tekanandarah_pasienanak" name="tekanandarah_pasienanak" class="form-control form-control-sm" />
                            <div class="input-group-append">
                                <div class="input-group-text text-xs">mmHg</div>
                            </div>
                        </div>
                    </td>
                    <td>Frekuensi Nadi</td>
                    <td>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" id="frekuensinadi_pasienanak" name="frekuensinadi_pasienanak" class="form-control form-control-sm" />
                            <div class="input-group-append">
                                <div class="input-group-text text-xs">X / Menit</div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Frekuensi Napas</td>
                    <td>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" id="frekuensinapas_pasienanak" name="frekuensinapas_pasienanak" class="form-control form-control-sm" />
                            <div class="input-group-append">
                                <div class="input-group-text text-xs">X / Menit</div>
                            </div>
                        </div>
                    </td>
                    <td>Suhu</td>
                    <td>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" id="suhu_pasienanak" name="suhu_pasienanak" class="form-control form-control-sm" />
                            <div class="input-group-append">
                                <div class="input-group-text text-xs">C</div>
                            </div>
                        </div>
                    </td>
                </tr>
                <TR>
                    <td colspan="4" class="text-center bg-secondary mt-3">
                        <h5>Assesmen
                            Psikologi,Sosial,Ekonomi,Kultural Dan Spiritual</h5>
                    </td>
                </TR>
                <tr>
                    <td>Anak Kandung</td>
                    <td colspan="4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="anakkandung_pasienanak" id="anakkandung_pasienanak" value="Tidak">
                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="anakkandung_pasienanak" id="anakkandung_pasienanak" value="Ya" checked>
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Gangguan Tumbuh Kembang</td>
                    <td colspan="4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="gangguantumbuhkembang_pasienanak" id="gangguantumbuhkembang_pasienanak" value="Tidak" checked>
                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="gangguantumbuhkembang_pasienanak" id="gangguantumbuhkembang_pasienanak" value="Ya">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Kekerasan Fisik</td>
                    <td colspan="4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="kekerasanfisik_pasienanak" id="kekerasanfisik_pasienanak" value="Tidak" checked>
                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="kekerasanfisik_pasienanak" id="kekerasanfisik_pasienanak" value="Ya">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tinggal Bersama</td>
                    <td colspan="4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="tinggalbersama_pasienanak" id="tinggalbersama_pasienanak" value="Orang Tua" checked>
                            <label class="form-check-label" for="inlineRadio1">Orang Tua</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3" type="radio" name="tinggalbersama_pasienanak" id="tinggalbersama_pasienanak" value="Lainya">
                            <label class="form-check-label" for="inlineRadio2">Lainya</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan ORang Tua</td>
                    <td colspan="4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="pekerjaan_pasienanak" id="pekerjaan_pasienanak" value="5">
                            <label class="form-check-label" for="inlineRadio1">PNS/TNI/POLRI</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3" type="radio" name="pekerjaan_pasienanak" id="pekerjaan_pasienanak" value="3">
                            <label class="form-check-label" for="inlineRadio2">Wiraswasta</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="pekerjaan_pasienanak" id="pekerjaan_pasienanak" value="15">
                            <label class="form-check-label" for="inlineRadio1">Pegawai
                                Swasta</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3" type="radio" name="pekerjaan_pasienanak" id="pekerjaan_pasienanak" value="6" checked>
                            <label class="form-check-label" for="inlineRadio2">Lain -
                                lain</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Agama Orang Tua</td>
                    <td colspan="4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="agama_pasienanak" id="agama_pasienanak" value="1">
                            <label class="form-check-label" for="inlineRadio1">Islam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3" type="radio" name="agama_pasienanak" id="agama_pasienanak" value="2">
                            <label class="form-check-label" for="inlineRadio2">Kristen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="agama_pasienanak" id="agama_pasienanak" value="4">
                            <label class="form-check-label" for="inlineRadio1">Hindu</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3" type="radio" name="agama_pasienanak" id="agama_pasienanak" value="5">
                            <label class="form-check-label" for="inlineRadio2">Budha</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3" type="radio" name="agama_pasienanak" id="agama_pasienanak" value="8">
                            <label class="form-check-label" for="inlineRadio2">Lain -
                                lain</label>
                        </div>
                    </td>
                </tr>
                <TR>
                    <td colspan="4" class="text-center bg-secondary mt-3">
                        <h5>Status Fungsional</h5>
                    </td>
                </TR>
                <tr>
                    <td>Penggunaan Alat Bantu</td>
                    <td colspan="4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="alatbantu_pasienanak" id="alatbantu_pasienanak" value="Tidak" checked>
                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="alatbantu_pasienanak" id="alatbantu_pasienanak" value="Tongkat">
                            <label class="form-check-label" for="inlineRadio1">Tongkat</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="alatbantu_pasienanak" id="alatbantu_pasienanak" value="Kursi Roda">
                            <label class="form-check-label" for="inlineRadio1">Kursi Roda</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cacat Tubuh</td>
                    <td colspan="4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="cacat_pasienanak" id="cacat_pasienanak" value="Tidak" checked>
                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="cacat_pasienanak" id="cacat_pasienanak" value="Ada">
                            <label class="form-check-label" for="inlineRadio1">Ada</label>
                        </div>
                        <input type="text" class="form-control form-control-sm" id="namacacatubuh" name="namacacatubuh" placeholder="Sebutkan cacat tubuh ..." value="tidak ada">

                    </td>
                </tr>

                <TR>
                    <td colspan="4" class="text-center bg-secondary mt-3">
                        <h5>Skring Rasa Nyeri</h5>
                    </td>
                </TR>
                <tr>
                    <td>Apakah Pasien Mengeluh Nyeri</td>
                    <td colspan="4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input ml-2 mr-3" type="radio" name="nyeri_pasienanak" id="nyeri_pasienanak" value="Tidak" checked>
                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mr-3" type="radio" name="nyeri_pasienanak" id="nyeri_pasienanak" value="Ya">
                            <label class="form-check-label" for="inlineRadio2">Ya</label>
                        </div>
                        <input type="text" id="skalanyeripasienanak" name="skalanyeripasienanak" class="form-control form-control-sm" placeholder="skala nyeri ...">
                        <img src="{{ asset('public/img/skalanyeri.jpg') }}" width="350px" alt="">
                    </td>
                </tr>
            </table>
            <table class="table table-bordered table-sm">
                <thead>

                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" class="bg-warning">Metode Wong Beker Faces Scales (pasin > 3 tahun)</td>
                    </tr>
                    <tr class="bg-secondary">
                        <td class="text-center">Kategori</td>

                        <td class="text-center">Nilai Score</td>
                    </tr>
                    <tr>
                        <td> 1. Face (wajah)</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="wajah_pasienanak" id="wajah_pasienanak" value="Tidak ada ekpresi khusus, senyum" skor="0" checked>
                                <label class="form-check-label" for="inlineRadio2"> Tidak ada ekpresi khusus, senyum</label>
                            </div>
                        </td>
                        <td rowspan="3">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="wajah_pasienanak" id="wajah_pasienanak" value="Menyeringa, mengerukan dahi, tampak tidak teratrik (kadang-kadanag)" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Menyeringa, mengerukan dahi, tampak tidak teratrik (kadang-kadanag)</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="wajah_pasienanak" id="wajah_pasienanak" value="Dagu gemetar, gerutu berulang(sering)" skor="2">
                                <label class="form-check-label" for="inlineRadio2"> Dagu gemetar, gerutu berulang(sering)</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2. leg (posisi kaki)</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="kaki_pasienanak" id="kaki_pasienanak" value="osisi normal atau santai" skor="0" checked>
                                <label class="form-check-label" for="inlineRadio2"> Posisi normal atau santai</label>
                            </div>
                        </td>
                        <td rowspan="2">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="kaki_pasienanak" id="kaki_pasienanak" value="Gelisah, tegang" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Gelisah, tegang</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="kaki_pasienanak" id="kaki_pasienanak" value="menendang, kaki tertekuk" skor="2">
                                <label class="form-check-label" for="inlineRadio2"> menendang, kaki tertekuk</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3. activity</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="activity_pasienanak" id="activity_pasienanak" value="Berbaring tenang, posisi normal, gerakan mudah" skor="0" checked>
                                <label class="form-check-label" for="inlineRadio2"> Berbaring tenang, posisi normal, gerakan mudah</label>
                            </div>
                        </td>
                        <td rowspan="3">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="activity_pasienanak" id="activity_pasienanak" value="Menggeliat, tidak bisa diam, tegang" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Menggeliat, tidak bisa diam, tegang</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="activity_pasienanak" id="activity_pasienanak" value="kaku atau teggang" skor="2">
                                <label class="form-check-label" for="inlineRadio2"> kaku atau teggang</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>4. Cry (menangis)</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="cry_pasienanak" id="cry_pasienanak" value="tidak menangis" skor="0" checked>
                                <label class="form-check-label" for="inlineRadio2"> tidak menangis</label>
                            </div>
                        </td>
                        <td rowspan="3">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="cry_pasienanak" id="cry_pasienanak" value="Merintih, merengek, kadang-kadang mengeluh" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Merintih, merengek, kadang-kadang mengeluh</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="cry_pasienanak" id="cry_pasienanak" value="terus menangis atau teriak" skor="2">
                                <label class="form-check-label" for="inlineRadio2">terus menangis atau teriak</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>5. Consolabity</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="consolabity_pasienanak" id="consolabity_pasienanak" value="Rileks" skor="0" checked>
                                <label class="form-check-label" for="inlineRadio2"> Rileks</label>
                            </div>
                        </td>

                        <td rowspan="3">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="consolabity_pasienanak" id="consolabity_pasienanak" value="Dapat ditemukan dengan sentuhan pelukan, bujukan, dialihkan" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Dapat ditemukan dengan sentuhan pelukan, bujukan, dialihkan</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="consolabity_pasienanak" id="consolabity_pasienanak" value="sering mengeluh, sulit dibujuk" skor="2">
                                <label class="form-check-label" for="inlineRadio2"> sering mengeluh, sulit dibujuk</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"> catatan : beri tanda ✓ pada 〇 pilihan</td>
                    </tr>

                </tbody>
            </table>
            <table class="table table-bordered table-sm">
                <thead>

                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" class="bg-warning">MetodeNIPS (pasien bayi baru lahir - 30 hari)</td>
                    </tr>
                    <tr class="bg-secondary">
                        <td class="text-center">Parameter</td>
                        <td class="text-center">Skor Pasien</td>
                    </tr>
                    <tr>
                        <td>1. Ekspresi wajah</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="ekspresi_pasienanak" id="ekspresi_pasienanak" value="rileks" skor="0" checked>
                                <label class="form-check-label" for="inlineRadio2"> Rileks</label>
                            </div>
                        </td>
                        <td rowspan="2">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="ekspresi_pasienanak" id="ekspresi_pasienanak" value="meringis" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Meringis</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2. Menangis</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input checked type="radio" class="text-center form-check-input" name="nangis_pasienanak" id="nangis_pasienanak" value="Tidak Menangis" skor="0">
                                <label class="form-check-label" for="inlineRadio2"> Tidak menangis</label>
                            </div>
                        </td>
                        <td rowspan="3">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="nangis_pasienanak" id="nangis_pasienanak" value="Meringis" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Meringis</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="nangis_pasienanak" id="nangis_pasienanak" skor="2" value="Menangis Keras">
                                <label class="form-check-label" for="inlineRadio2"> Menangis keras</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3. Pola Napas</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input checked type="radio" class="text-center form-check-input" name="pola_pasienanak" id="pola_pasienanak" value="Rileks" skor="0">
                                <label class="form-check-label" for="inlineRadio2"> Rileks</label>
                            </div>
                        </td>
                        <td rowspan="2">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="pola_pasienanak" id="pola_pasienanak" value="Perubahan Pola Nafas" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Perubahan pola napas</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4. Lengan kaki</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input checked type="radio" class="text-center form-check-input" name="l_pasienanak" id="l_pasienanak" value="Rileks" skor="0">
                                <label class="form-check-label" for="inlineRadio2"> Rileks</label>
                            </div>
                        </td>
                        <td rowspan="4">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="l_pasienanak" id="l_pasienanak" value="Fleksi" skor="0">
                                <label class="form-check-label" for="inlineRadio2"> Fleksi</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="k_pasienanak" id="k_pasienanak" value="Rileks" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Rileks</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="k_pasienanak" id="k_pasienanak" value="fleksi" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> fleksi</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5. Terangsang</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input checked type="radio" class="text-center form-check-input" name="terangsang_pasienanak" id="terangsang_pasienanak" value="Tidur" skor="0">
                                <label class="form-check-label" for="inlineRadio2"> Tidur</label>
                            </div>
                        <td rowspan="3">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="terangsang_pasienanak" id="terangsang_pasienanak" value="Bangun" skor="0">
                                <label class="form-check-label" for="inlineRadio2"> Bangun</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="terangsang_pasienanak" id="terangsang_pasienanak" value="Rewel" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Rewel</label>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
            <table class="table table-bordered table-sm">
                <thead>
                    <td class="text-center" colspan="2"><label>Asesmen Resiko Jatuh</label></td>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" class="bg-warning">Metode Humpty Dumpty</td>
                    </tr>
                    <tr class="bg-secondary">
                        <td class="text-center">Parameter</td>
                        <td class="text-center">Nilai Skor</td>
                    </tr>
                    <tr>
                        <td>1. Umur</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="umur_pasienanak" id="umur_pasienanak" value=" Dibawah 3 tahun" skor="4">
                                <label class="form-check-label" for="inlineRadio2"> Dibawah 3 tahun</label>
                            </div>
                        </td>
                        <td rowspan="4">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="umur_pasienanak" id="umur_pasienanak" value="3-7 tahun" skor="3">
                                <label class="form-check-label" for="inlineRadio2"> 3-7 tahun</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="umur_pasienanak" id="umur_pasienanak" value="7-13 tahun" skor="2">
                                <label class="form-check-label" for="inlineRadio2"> 7-13 tahun</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="umur_pasienanak" id="umur_pasienanak" value="Lebih 13 tahun" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Lebih 13 tahun</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2. Jenis Kelamin</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="jk_pasienanak" id="jk_pasienanak" value="Laki-laki" skor="2">
                                <label class="form-check-label" for="inlineRadio2"> Laki - laki</label>
                            </div>
                        </td>
                        <td rowspan="2">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="jk_pasienanak" id="jk_pasienanak" value="Perempuan" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Perempuan</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3. Diagnosis</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="diagnosis_pasienanak" id="diagnosis_pasienanak" value="Gangguan neurologis" skor="4">
                                <label class="form-check-label" for="inlineRadio2"> Gangguan neurologis</label>
                            </div>
                        </td>
                        <td rowspan="4">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="diagnosis_pasienanak" id="diagnosis_pasienanak" value="Perubahan dalam oksigenasi (masalah saluran napas, dehidrasi, anemia, anorexia, sinkop, sakit kepala,)" skor="3">
                                <label class="form-check-label" for="inlineRadio2"> Perubahan dalam oksigenasi (masalah saluran napas, dehidrasi, anemia, anorexia, sinkop, sakit kepala,)</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="diagnosis_pasienanak" id="diagnosis_pasienanak" value="kelaian psikis atau prilaku" skor="2">
                                <label class="form-check-label" for="inlineRadio2"> kelaian psikis atau prilaku</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="diagnosis_pasienanak" id="diagnosis_pasienanak" value="Diagnosis lainya" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Diagnosis lainya</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4. Gangguan Kognitif</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="kognitif_pasienanak" id="kognitif_pasienanak" value="Tidak menyadari keterbatasan diri" skor="3">
                                <label class="form-check-label" for="inlineRadio2"> Tidak menyadari keterbatasan diri</label>
                            </div>
                        </td>
                        <td rowspan="3">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="kognitif_pasienanak" id="kognitif_pasienanak" value="Lupa akan adanya keterbatasan" skor="2">
                                <label class="form-check-label" for="inlineRadio2"> Lupa akan adanya keterbatasan</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="kognitif_pasienanak" id="kognitif_pasienanak" value="Orientasi baik terhadap diri sendiri" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Orientasi baik terhadap diri sendiri</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5. Faktor Lingkungan</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="fl_pasienanak" id="fl_pasienanak" value="Riwayat jatuh dari tempat tidur saat bayi/anak" skor="4">
                                <label class="form-check-label" for="inlineRadio2"> Riwayat jatuh dari tempat tidur saat bayi/anak</label>
                            </div>
                        </td>
                        <td rowspan="4">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="fl_pasienanak" id="fl_pasienanak" value="Pasien menggunakan alat bantu atau bpx/model" skor="3">
                                <label class="form-check-label" for="inlineRadio2"> Pasien menggunakan alat bantu atau bpx/model</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="fl_pasienanak" id="fl_pasienanak" value=" pasien di letakan di tempat tidur" skor="2">
                                <label class="form-check-label" for="inlineRadio2"> pasien di letakan di tempat tidur</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="fl_pasienanak" id="fl_pasienanak" value="Diluar ruang rawat" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> Diluar ruang rawat</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>6. Respon terhadap operasi/obat penenang/efek anastesi</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="rsp_pasienanak" id="rsp_pasienanak" value="dalam 24 jam" skor="3">
                                <label class="form-check-label" for="inlineRadio2"> dalam 24 jam</label>
                            </div>
                        </td>
                        <td rowspan="3">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="rsp_pasienanak" id="rsp_pasienanak" value="dalam 48 jam" skor="2">
                                <label class="form-check-label" for="inlineRadio2"> dalam 48 jam</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="rsp_pasienanak" id="rsp_pasienanak" value="48 jam" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> > 48 jam</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>7. Penggunaan obat</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="obat_pasienanak" id="obat_pasienanak" value="Bermacam obat yang digunakan : obat
                                    sedative (kecuali pasien itu, yang
                                    menggunakan sedasi dan paralisis , hiponotik,
                                    barbinurate, fenotiazen, antidepresan, laksatif/diuretik, natkotik)" skor="3">
                                <label class="form-check-label" for="inlineRadio2"> Bermacam obat yang digunakan : obat
                                    sedative (kecuali pasien itu, yang
                                    menggunakan sedasi dan paralisis , hiponotik,
                                    barbinurate, fenotiazen, antidepresan, laksatif/diuretik, natkotik)</label>
                            </div>
                        </td>
                        <td rowspan="3">
                            <textarea readonly class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="obat_pasienanak" id="obat_pasienanak" value="Penggunaan salah satu obat di atas" skor="2">
                                <label class="form-check-label" for="inlineRadio2"> Penggunaan salah satu obat di atas</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="text-center form-check-input" name="obat_pasienanak" id="obat_pasienanak" value="penggunaan obat lainya" skor="1">
                                <label class="form-check-label" for="inlineRadio2"> penggunaan obat lainya</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-sm text-md">
                <thead>
                    <th class="text-center">Tanggal Assesmen Perawat</th>
                    <th class="text-center">Nama Perawat</th>
                    <th>Tanda Tangan Dokter</th>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>
                            <textarea readonly disabled name="tanggal_assesmen" class="form-control" id="tanggal_assesmen" name="tanggal_assesmen" cols="30" rows="2"> {{ $now }}</textarea>
                        </td>

                        <td>
                            <textarea readonly disabled name="nama_perawat" class="form-control" id="nama_perawat" name="tanggal_assesmen" cols="30" rows="2">{{ strtoupper(auth()->user()->name) }}</textarea>
                            <textarea hidden name="id_perawat" id="id_perawat" cols="50" rows="10">{{ strtoupper(auth()->user()->id) }}</textarea>
                        </td>
                        <td>
                            <div id="signature-pad">
                                <div style="border:solid 1px teal; width:360px;height:110px;padding:3px;position:relative;">
                                    <div id="note" onmouseover="my_function();">tulis tanda tangan didalam box ...
                                    </div>
                                    <canvas id="the_canvas" width="350px" height="100px"></canvas>
                                </div>
                                <div style="margin:10px;">
                                    <input hidden type="" id="signature" name="signature">
                                    <button type="button" id="clear_btn" class="btn btn-danger" data-action="clear"><span class="glyphicon glyphicon-remove"></span>
                                        Clear</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="col-md-12 justify-content-end mb-2">
                <button type="button" class="btn btn-success float-right mr-2 tombol-simpanrmanak">Simpan</button>
            </div>
        </form>
    </div>


    <script>
        $(document).ready(function() {
            tglkunjungan = $('#tglmasuk').val()
            $('#tgldanjamkunjungan').val(tglkunjungan)
        });
        $(document).ready(function() {
            $(".tombol-simpanrmanak").click(function() {
                cacatpasienanak = $('#cacat_pasienanak').val()
                nyeri_pasienanak = $('#nyeri_pasienanak').val()

                if (cacatpasienanak == ' Ya') {
                    namacacat = $('#namacacatubuh').val()
                    if (namacacatubuh == '') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oopss...',
                            text: 'Keterangan cacat tubuh belum diisi',
                            footer: ''
                        })
                        return
                    }
                }
                if (nyeri_pasienanak == 'Ya') {
                    skala = $('#skalanyeripasienanak').val()
                    if (skala == '') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Skala nyeri belum diisi...',
                            footer: ''
                        })
                        return
                    }
                }
                spinner = $('#loader2');
                spinner.show();
                var canvas = document.getElementById('the_canvas');
                var dataUrl = canvas.toDataURL();
                if (dataUrl ==
                    'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAV4AAABkCAYAAADOvVhlAAADOklEQVR4Xu3UwQkAAAgDMbv/0m5xr7hAIcjtHAECBAikAkvXjBEgQIDACa8nIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECAivHyBAgEAsILwxuDkCBAgIrx8gQIBALCC8Mbg5AgQICK8fIECAQCwgvDG4OQIECDweoABlt2MJjgAAAABJRU5ErkJggg=='
                ) {
                    dataUrl = ''
                }
                document.getElementById("signature").value = dataUrl;
                var data = $('.simpanrmanak').serializeArray();
                kodekunjungan = $('#kodekunjungan').val()
                rm = $('#nomorrm').val()
                tglmasuk = $('#tglmasuk').val()
                $.ajax({
                    async: true,
                    type: 'post',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",
                        data: JSON.stringify(data),
                        kodekunjungan,
                        rm,
                        tglmasuk,
                    },
                    url: '<?= route('simpanrmanak') ?>',
                    error: function(data) {
                        spinner.hide();
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Sepertinya ada masalah.....',
                            footer: ''
                        })
                    },
                    success: function(data) {
                        spinner.hide();

                        if (data.kode == 500) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: data.message,
                                footer: ''
                            })
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'OK',
                                text: 'Data berhasil di simpan!',
                                footer: ''
                            })
                        }
                    }
                });

            });
        });
    </script>
    <script>
        var wrapper = document.getElementById("signature-pad");
        var clearButton = wrapper.querySelector("[data-action=clear]");
        var canvas = wrapper.querySelector("canvas");
        var el_note = document.getElementById("note");
        var signaturePad;
        signaturePad = new SignaturePad(canvas);
        clearButton.addEventListener("click", function(event) {
            document.getElementById("note").innerHTML = "The signature should be inside box";
            signaturePad.clear();
        });

        function my_function() {
            document.getElementById("note").innerHTML = "";
        }
    </script>