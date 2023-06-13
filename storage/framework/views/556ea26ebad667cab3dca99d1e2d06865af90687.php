<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
      Silahkan ajukan pengaduan Anda!
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://example.com/gambar1.jpg" alt="Layanan KTP">
        <div class="px-4 py-4">
          <h3 class="text-lg font-semibold text-gray-800">Pengajuan KTP</h3>
          <p class="mt-2 text-gray-600">Layanan ini memungkinkan Anda untuk mengajukan permohonan pembuatan Kartu Tanda Penduduk (KTP) secara online.</p>
          <a href="<?php echo e(route('ktp')); ?>" class="text-blue-500 hover:underline">Lihat detail</a>
        </div>
      </div>

      <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://example.com/gambar2.jpg" alt="Layanan KK">
        <div class="px-4 py-4">
          <h3 class="text-lg font-semibold text-gray-800">Pengajuan KK</h3>
          <p class="mt-2 text-gray-600">Layanan ini memungkinkan Anda untuk mengajukan permohonan perubahan Kartu Keluarga (KK) secara online.</p>
          <a href="#" class="text-blue-500 hover:underline">Lihat detail</a>
        </div>
      </div>

      <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://example.com/gambar3.jpg" alt="Layanan PBB">
        <div class="px-4 py-4">
          <h3 class="text-lg font-semibold text-gray-800">Pengajuan PBB</h3>
          <p class="mt-2 text-gray-600">Layanan ini memungkinkan Anda untuk mengajukan pembayaran Pajak Bumi dan Bangunan (PBB) secara online.</p>
          <a href="#" class="text-blue-500 hover:underline">Lihat detail</a>
        </div>
      </div>

      <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://example.com/gambar4.jpg" alt="Layanan Surat Pengantar">
        <div class="px-4 py-4">
          <h3 class="text-lg font-semibold text-gray-800">Pengajuan Surat Pengantar</h3>
          <p class="mt-2 text-gray-600">Layanan ini memungkinkan Anda untuk mengajukan permohonan surat pengantar secara online.</p>
          <a href="#" class="text-blue-500 hover:underline">Lihat detail</a>
        </div>
      </div>
    </div>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?> </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
    <?php endif; ?>

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PENGKAT-Pengaduan-Masyarakat-master\resources\views/pages/masyarakat/index.blade.php ENDPATH**/ ?>