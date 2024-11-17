<div class="mx-auto min-h-screen">
    {{-- Header section --}}
    @include('welcome.header')
    {{-- Feactures section --}}
    @include('welcome.features')
    {{-- We are --}}
    @include('welcome.we-are')
    {{-- Mision/Vision --}}
    @include('welcome.mision-vision')

    <section class="relative mx-auto w-full max-w-screen-2xl px-8 pt-20">
        <div class="prose mx-auto max-w-full">

            <h2 class="text-center">Valores Corporativos</h2>
            <p class="mx-auto max-w-xl text-center">Estos principios guían todas nuestras iniciativas y nos inspiran a
                seguir
                trabajando con
                dedicación y pasión por el bienestar de nuestras comunidades.</p>

            <div class="grid grid-cols-1 pt-14 md:grid-cols-2 lg:grid-cols-3">
                <div class="p-6 md:p-8 lg:p-10">
                    <x-icon class="h-14 w-auto text-orange-500 dark:text-white" name="o-users" />
                    <h3>Compromiso Social</h3>
                    <p>Nos dedicamos a mejorar la vida de las comunidades a las que servimos, poniendo siempre sus
                        necesidades y aspiraciones en el centro de nuestras acciones.</p>
                </div>

                <div class="p-6 md:p-8 lg:p-10">
                    <x-icon class="h-14 w-auto text-orange-500 dark:text-white" name="o-battery-100" />
                    <h3>Sostenibilidad</h3>
                    <p>Promovemos prácticas que aseguren el uso responsable de los recursos naturales, garantizando su
                        disponibilidad para las generaciones futuras.</p>
                </div>

                <div class="p-6 md:p-8 lg:p-10">
                    <x-icon class="h-14 w-auto text-orange-500 dark:text-white" name="o-squares-2x2" />
                    <h3>Equidad e Inclusión</h3>
                    <p>Nos dedicamos a mejorar la vida de las comunidades a las que servimos, poniendo siempre sus
                        necesidades y aspiraciones en el centro de nuestras acciones.</p>
                </div>

                <div class="p-6 md:p-8 lg:p-10">
                    <x-icon class="h-14 w-auto text-orange-500 dark:text-white" name="o-light-bulb" />
                    <h3>Innovación</h3>
                    <p>Buscamos constantemente soluciones creativas y efectivas para los desafíos sociales y ambientales
                        que enfrentan nuestras comunidades.</p>
                </div>

                <div class="p-6 md:p-8 lg:p-10">
                    <x-icon class="h-14 w-auto text-orange-500 dark:text-white" name="o-cube-transparent" />
                    <h3>Transparencia y Ética</h3>
                    <p>Actuamos con integridad y honestidad en todas nuestras acciones, asegurando la rendición de
                        cuentas y la confianza de las comunidades y aliados.</p>
                </div>

                <div class="p-6 md:p-8 lg:p-10">
                    <x-icon class="h-14 w-auto text-orange-500 dark:text-white" name="o-lifebuoy" />
                    <h3>Colaboración</h3>
                    <p>Creemos en el poder del trabajo en equipo y las alianzas estratégicas para alcanzar objetivos
                        comunes y maximizar el impacto positivo en nuestras comunidades.</p>
                </div>

                <div class="p-6 md:p-8 lg:p-10">
                    <x-icon class="h-14 w-auto text-orange-500 dark:text-white" name="o-heart" />
                    <h3>Respeto</h3>
                    <p>Valoramos y respetamos la diversidad cultural y las tradiciones de las comunidades del medio y
                        bajo Atrato, integrándolas en nuestro enfoque de desarrollo.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="relative mx-auto w-full max-w-screen-2xl px-8 pt-20">
        <div class="prose mx-auto max-w-full">

            <h2 class="text-center">Geografía y biodiversidad de los ríos Curbaradó, Jiguamiandó y Domingodó</h2>
            <p class="mx-auto max-w-3xl text-center">
                Estos ríos se encuentran en una región rica en biodiversidad,
                ubicada en el departamento del Chocó Municipio Carmen del Darién , conocido por su exuberante vegetación
                y ecosistemas diversos. La cuenca del río Atrato es uno de los lugares con mayor biodiversidad del
                planeta, con una amplia variedad de especies de flora y fauna.
            </p>

            <div class="grid grid-cols-1 pt-14 md:grid-cols-2 lg:grid-cols-3">
                <div class="p-6 md:p-8 lg:p-10">
                    <x-icon class="h-14 w-auto text-emerald-500 dark:text-white" name="o-map" />
                    <h3>Geografía</h3>
                    <p>Los ríos Curbaradó y Jiguamiandó fluyen a través de áreas de selva tropical húmeda, donde el
                        clima es cálido y lluvioso durante la mayor parte del año. Esta región es caracterizada por su
                        topografía variada, que incluye montañas, llanuras aluviales y pantanos. El río Domingodó
                        también contribuye a este paisaje acuático, proporcionando hábitats esenciales para muchas
                        especies.</p>
                </div>

                <div class="col-span-2 p-6 md:p-8 lg:p-10">
                    <x-icon class="h-14 w-auto text-orange-500 dark:text-white" name="o-globe-americas" />
                    <h3>Biodiversidad</h3>
                    <p>La biodiversidad en estos ríos es impresionante. En sus aguas habitan numerosas especies de
                        peces, muchos de los cuales son endémicos. Además, las riberas están llenas de vegetación que
                        incluye árboles como el ceiba y varias palmas. Esta vegetación no solo proporciona refugio y
                        alimento para la fauna local, sino que también actúa como un filtro natural para el agua.</p>
                    <p>
                        Los ecosistemas acuáticos son vitales para muchas comunidades locales que dependen de ellos para
                        su sustento. La pesca artesanal es una práctica común y sostenible en estas áreas.
                    </p>
                </div>

                <div class="col-span-full p-6 md:p-8 lg:p-10">
                    <x-icon class="h-14 w-auto text-orange-500 dark:text-white" name="o-arrow-trending-down" />
                    <h3>Entorno ambiental</h3>
                    <p>El entorno ambiental de los ríos Curbaradó, Jiguamiandó y Domingodó enfrenta desafíos
                        significativos debido a la deforestación, la minería ilegal y otras actividades humanas. La
                        conservación de estos ecosistemas es crucial no solo para mantener la biodiversidad local, sino
                        también para proteger las fuentes de agua que son esenciales para las comunidades cercanas.</p>
                    <p>Ademas de su gran belleza estos afluentes poseen un gran entorno cultural y ancestral junto a a
                        comunidades negras e indígenas que lo hacen ser lugares privilegiados de nuestro territorio..
                    </p>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-2xl pt-14">
            <x-slider class="rounded-3xl shadow-xl" id :sliders="$footSliders" />
        </div>

    </section>
    <section class="relative mx-auto w-full max-w-screen-2xl px-8 pt-20" id="contact">
        <div class="prose max-w-full py-10">
            <h2 class="text-center">Contáctanos </h2>
        </div>
        <livewire:contact-form />
    </section>
</div>
