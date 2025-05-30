<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peralihan Hak</title>
    {{-- <link rel="stylesheet" href="{{ public_path('css') }}/bootstrap.min.css"> --}}

    {{-- <link href="{{asset('company')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('company')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('company')}}/assets/css/style.css" rel="stylesheet">
    <link href="{{asset('company')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet"> --}}
    
    <style>
        
    .huruf {
        font-family: 'Times New Roman';
        font-size: 11px;
    }
    </style>
</head>
<body>
    {{-- <main class="huruf">
        <table width="30%" style="float: left;">
            <tbody>
                <tr>
                    <td colspan="2">
                    Perihal:  Permohonan Peralihan Hak                   
                    </td>
                </tr>
                <tr>
                    <td width="20%"></td>
                    <td width="80%" style="border-bottom: 1px solid;">Jual Beli/Hibah/Waris/<br>
                        Lelang/Tukar Menukar/<br>
                        Pembagian Hak Bersama<br>
                        /Balik Nama<br>
                        HM/HGB/HP No. 1211/<br>
                        Kel.: Gambut </td>
                    
                </tr>
            </tbody>
        </table>

        <table width="100%" style="float: right;">
            <tbody>
                <tr>
                    <td width="40%"></td>
                    <td width="60%">Kepada Yth.<br>
                    Kepala Kantor Pertanahan<br>
                    Kabupaten Banjar/<br>
                    di-<br></td>
                </tr>
                <tr>
                    <td width="40%"></td>
                    <td>&nbsp; &nbsp; &nbsp; &nbsp;<u>MARTAPURA</u></td>
                </tr>
            </tbody>
        </table>
    </main>
    <main class="huruf" >
        <table width="100%" style="float:inherit;">
            <tr>
                <td></td>
                <td colspan="2">Yang bertanda tangan dibawah ini :</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td colspan="2">: Aulia Rakhman</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td colspan="2">: Pedagang</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td colspan="2">: Banjarmasin</td>
            </tr>
            <tr>
                <td>Untuk dan atas nama</td>
                <td colspan="2">: -</td>
            </tr>
        </table>
    </main> --}}
    <table style="width:487.0pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td style="width: 353.8pt;padding: 0cm 5.4pt;height: 85.55pt;vertical-align: top;">
                    <table style="width:487.0pt;border-collapse:collapse;border:none;">
                        <tbody>
                            <tr>
                                <td style="width: 353.8pt;padding: 0cm 5.4pt;height: 85.55pt;vertical-align: top;">
                                    <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-family:"Times New Roman",serif;'>Perihal : Permohonan Peralihan Hak</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:  38.5pt;'><span style='font-family:"Times New Roman",serif;'>Jual Beli/Hibah/Waris/</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:  38.5pt;'><span style='font-family:"Times New Roman",serif;'>Lelang/Tukar Menukar/</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:  38.5pt;'><span style='font-family:"Times New Roman",serif;'>Pembagian Hak Bersama/</span></p>
                                    {{-- <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:  38.5pt;'><span style='font-family:"Times New Roman",serif;'>Balik Nama</span></p> --}}
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:33.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:5.5pt;'><span style='font-family:"Times New Roman",serif;'>{{ $peralihan_hak->hak->kd_hak }}. No {{ $peralihan_hak->no_hak }} /</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:33.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:5.5pt;'><u><span style='font-family:"Times New Roman",serif;'>Kel. : {{ $peralihan_hak->kelurahan->nm_kelurahan }}</span></u></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:33.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:5.5pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                                </td>
                                <td style="width: 133.2pt;padding: 0cm 5.4pt;height: 85.55pt;vertical-align: top;">
                                    <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:left;'><span style='font-family:"Times New Roman",serif;'>Kepada Yth.<br>&nbsp;Kepala Kantor Pertanahan<br>&nbsp;Kabupaten Banjar<br>&nbsp;di-</span></p>
                                    <p style='margin-top:6.0pt;margin-right:0cm;margin-bottom:  0cm;margin-left:11.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><u><span style='font-family:"Times New Roman",serif;'>MARTAPURA</span></u></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;margin-left:0cm;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:44.0pt;'><span style='font-family:"Times New Roman",serif;'>Yang bertanda tangan dibawah ini :</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $peralihan_hak->nama }}</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Pekerjaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $peralihan_hak->pekerjaan }}</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $peralihan_hak->alamat }}</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-311.5pt;'><span style='font-family:"Times New Roman",serif;'>Untuk dan atas nama&nbsp; &nbsp; &nbsp; &nbsp;: {{ $peralihan_hak->nm_kuasa }}</span></p>
                    <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:8.0pt;margin-left:14.2pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-family:"Times New Roman",serif; text-align: justify;'>Dengan ini mengajukan permohonan untuk mendapatkan pelayanan dan penyelesaian sebagaimana perihal tersebut diatas, terhadap sebidang tanah yang terletak di Jalan {{ $peralihan_hak->jalan_tanah }} RT. {{ $peralihan_hak->rt }} RW. {{ $peralihan_hak->rw }} Kelurahan {{ $peralihan_hak->kelurahan->nm_kelurahan }} Kecamatan {{ $peralihan_hak->kecamatan->nm_kecamatan }} Kabupaten Banjar.</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:14.2pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Tanah tersebut dipergunakan Untuk : 
                    @if ($peralihan_hak->jenis_tanah == 'Non Pertanian')
                    Non pertanian/<s>Perumahan</s>
                    @else
                    <s>Non pertanian</s>/Perumahan
                    @endif
                        
                    </span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:36.0pt;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;margin:0cm;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-295.65pt;'><span style='font-family:"Times New Roman",serif;'>Demikian untuk dapat dipertimbangkan dan dapat di proses sebagaimana mestinya.</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:324.0pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-295.65pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:324.0pt;line-height:108%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-295.65pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:297.7pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Martapura, {{ $tgl }}</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:297.7pt;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Pemohon / Kuasa Pemohon,</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:11.0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-indent:-239.85pt;'><br></p>
                    <table style="float: left">
                        <tbody>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td><br></td>
                                <td><br></td>
                            </tr>
                        </tbody>
                    </table><span style='font-family:"Times New Roman",serif;'>&nbsp;</span>
                    <p><br></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
                </td>
                <td style="width: 133.2pt;padding: 0cm 5.4pt;height: 85.55pt;vertical-align: top;"><br></td>
            </tr>
        </tbody>
    </table>
    <p><br></p>
    <p><br></p>
</body>
</html>