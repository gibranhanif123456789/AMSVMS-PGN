<!DOCTYPE html>
<html>

<head>
    <title>Data Fasilitas</title>
    <style>
        @page {
            size: landscape;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 11pt;
            line-height: 1.3;
            margin: 0.25in 0.25in 0.5in 0.25in;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 12px;
            padding: 4px;
            width: 100%;
        }

        .footer {
            margin-top: 20px;
            width: 100%;
            position: relative;
            page-break-inside: avoid;
        }

        .footer .tanggal {
            text-align: right;
            margin-bottom: 60px;
            font-size: 12px;
        }

        .footer .ttd {
            text-align: right;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <h3>Data Alatukur</h3>

    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Region</th>
                    <th>Alatukur</th>
                    <th>Alatukur ke</th>
                    <th>Brand</th>
                    <th>Type</th>
                    <th>Serial Number</th>
                    <th>Tahun Perolehan</th>
                    <th>Kondisi</th>
                    <th>Keterangan</th>
                    <th>Milik</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align: center;"><?php echo e($index + 1); ?></td>
                        <td><?php echo e($item->region->nama_region); ?></td>
                        <td><?php echo e($item->jenisalatukur->nama_alatukur); ?></td>
                        <td style="text-align: center;"><?php echo e($item->alatukur_ke); ?></td>
                        <td><?php echo e(optional($item->brandalatukur)->nama_brand); ?></td>
                        <td><?php echo e($item->type); ?></td>
                        <td><?php echo e($item->serialnumber); ?></td>
                        <td style="text-align: center;"><?php echo e($item->tahunperolehan); ?></td>
                        <td><?php echo e($item->kondisi); ?></td>
                        <td><?php echo e($item->keterngan); ?></td>
                        <td><?php echo e($item->user->name); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <table style="width: 100%; margin-bottom: 60px; font-size: 12px; border: none;">
            <tr>
                <td style="text-align: left; border: none;">Dibuat: <?php echo e(\Carbon\Carbon::now('Asia/Jakarta')->translatedFormat('j F Y H:i')); ?></td>
                <td style="text-align: right; border: none;">Jakarta, <?php echo e(\Carbon\Carbon::now('Asia/Jakarta')->translatedFormat('j F Y H:i')); ?></td>
            </tr>
        </table>

        <div class="ttd" style="text-align: right;">
            <br><br><br>
            (....................................)
        </div>
    </div>

</body>

</html><?php /**PATH C:\laragon\www\Sourcekode\CODE-AMSVMS\resources\views\exports\alatukur.blade.php ENDPATH**/ ?>