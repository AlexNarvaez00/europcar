<?= $this->extend("base_layout") ?>
<?= $this->section('main') ?>

<section class="max-w-[820px] mx-auto flex flex-wrap gap-5 min-h-screen">
  <?= $this->include("components/header") ?>
  <main class="w-full flex flex-col gap-5 self-center">
    <section class="relative container-form-main px-8">
      <div class="w-3/4 py-1 rounded-tl-md absolute top-[-10px] left-[15px] bg-cyan-600 shadow-xl clip-path-title">
        <p class="text-center text-white text-2xl">Elige fecha y hora</p>
      </div>
      <div class="w-full bg-sky-400 overflow-hidden rounded-xl">
        <h2 class="mt-5 md:mt-auto text-end text-white font-bold text-3xl px-5 py-3">
          Paso 1
        </h2>
        <div class="container-form px-5">
          <form class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-3" id="formStation" data-session="<?= $sessionId ?>">
            <section class="col-span-1 flex flex-col gap-4">
              <div class="container-input">
                <?= view("components/label", ["text" => "OFINICIA DE ENTREGA"]) ?>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="selectStationIn">
                  <option>Seleccione</option>
                  <?php foreach ($stationList as $station) : ?>
                    <option value="<?= $station->stationId ?>">
                      <?= $station->cityName ?> (<?= $station->stationName ?>)
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="container-input flex gap-4">
                <?= view("components/input", ["type" => "date", "name" => "date-starting"]) ?>
                <?= view("components/input", ["type" => "time", "name" => "time-starting"]) ?>
              </div>
            </section>
            <section class="col-span-1 flex flex-col gap-4">
              <div class="container-input flex flex-col gap-4">
                <div class="container-input">
                  <?= view("components/label", ["text" => "OFINICIA DE SALIDA"]) ?>
                  <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="selectStationOut">
                    <option>Seleccione</option>
                    <?php /**
                    <?php foreach ($stationListOut as $station) : ?>
                      <option value="<?= $station->stationId ?>">
                      <?= $station->cityName ?> (<?= $station->stationName ?>)
                      </option>
                    <?php endforeach; ?>
                     */  ?>
                  </select>
                </div>
                <div class="container-input flex gap-4">
                  <?= view("components/input", ["type" => "date", "name" => "date-ending"]) ?>
                  <?= view("components/input", ["type" => "time", "name" => "time-ending"]) ?>
                </div>
              </div>
            </section>
            <footer class="col-span-1 md:col-span-2 border-t-2 border-withe py-5 flex gap-5 justify-between items-center self-end">
              <a href="#" class="text-white underline text-xl font-bold">
                OFICINAS PRINCIPALES
              </a>
              <Button class="bg-gradient-to-b from-sky-300 to-sky-600 ring-white ring-1">
                CONTINUAR
              </Button>
            </footer>
          </form>
        </div>
      </div>
    </section>
    <section class="w-full">
      <h2 class="text-center text-4xl text-white py-2 font-semibold bg-neutral-400">
        Renta desde $30 al día
      </h2>
    </section>
  </main>
  <?= $this->include("components/footer") ?>
</section>

























































<?= $this->endSection() ?>
