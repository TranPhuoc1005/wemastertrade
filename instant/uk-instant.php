<?php
/**
 * Template Name: UK Instant
 * Template Post Type: page
 */
get_header();
$partial_path = __DIR__ . '/partials/';
?>
<?php require $partial_path . 'uk-head.php'; ?>
<div id="content">
    <?php 
		require $partial_path . 'uk-certificates.php'; 
		require $partial_path . 'uk-benefit.php'; 
		require $partial_path . 'uk-whyus.php'; 
	?>
    <!-- How it work -->
    <section class="hiw">
        <div class="container">
            <div class="hiw__content">
                <div class="title">
                    <p class="title__sub">
                        <?php
							$locale = get_locale();
							if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
								$locale = 'es_MX';
							}
							$texts = [
								'th' => 'วิธีการทำงาน',
								'zh_CN' => '运作方式',
								'tr_TR' => 'Nasıl çalışır',
								'fr_FR' => 'Comment ça fonctionne',
								'es_ES' => 'Cómo funciona',
								'ru_RU' => 'Как это работает',
								'ja' => '仕組み',
								'ko_KR' => '작동 방식',
								'km' => 'របៀបដំណើរការ',
								'bn_BD' => 'এটি কীভাবে কাজ করে',
								'hk' => '運作方式',
								'ir' => 'نحوه کارکرد',
                                'ur' => 'یہ کیسے کام کرتا ہے',
								'id' => 'Cara kerja',
								'pt_BR' => 'Como funciona',
							];
							$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'How it work';
						?>
                    </p>
                    <?php
                        $texts = [
                            'th' => '<h3>แพ็กเกจ <span>Instant Funding <br></span>ทำงานอย่างไร</h3>',
                            'zh_CN' => '<h3><span>即时资金 <br>套餐</span>如何运作</h3>',
                            'tr_TR' => '<h3><span>Anında Fonlama <br>Paketi</span> Nasıl Çalışır</h3>',
                            'fr_FR' => '<h3>Comment fonctionne le <span>Package <br>Instant Funding</span></h3>',
                            'es_ES' => '<h3>Cómo funciona el <span>Paquete de <br>Instant Funding</span></h3>',
                            'ru_RU' => '<h3>Как работает <span>пакет <br>Instant Funding</span></h3>',
                            'ja' => '<h3><span>Instant Funding <br>パッケージ</span>の仕組み</h3>',
                            'ko_KR' => '<h3><span>Instant Funding <br>패키지</span>는 어떻게 작동하나요</h3>',
                            'km' => '<h3><span>កញ្ចប់ Instant Funding <br></span>ដំណើរការយ៉ាងដូចម្តេច</h3>',
                            'bn_BD' => '<h3><span>Instant Funding <br>প্যাকেজ</span> কীভাবে কাজ করে</h3>',
                            'hk' => '<h3><span>Instant Funding <br>套裝</span>如何運作</h3>',
                            'ir' => '<h3><span>بسته تأمین مالی فوری <br></span> چگونه کار می‌کند</h3>',
                            'pt_BR' => '<h3>Como funciona o <span>Pacote de <br>Instant Funding</span></h3>',
                            'uz_UZ' => '<h3><span>Instant Funding <br>paketi</span> qanday ishlaydi</h3>',
                            'ur' => '<h3><span>فوری فنڈنگ <br>پیکیج</span> کیسے کام کرتا ہے</h3>',
                        ];

                        $locale = cc_block_locale($texts);
                        echo $texts[$locale] ?? '<h3>How <span>Instant Funding </span>Works</h3>';
                    ?>
                </div>
                <div class="desc">
                    <p>
                        <?php
                            $locale = get_locale();
                            if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                $locale = 'es_MX';
                            }
                            $texts = [
                                'th' => 'WeMasterTrade ถูกออกแบบมาเพื่อสนับสนุนผู้ที่ไม่มีเงินทุนจำนวนมากในการสร้างบัญชีเทรดรายวันขนาดใหญ่ ขาดประสบการณ์ในการเทรด และมีเครื่องมือและทรัพยากรในการเทรดอย่างจำกัด',
                                'zh_CN' => 'WeMasterTrade 旨在支持那些没有大量资金建立大型日内交易账户、缺乏交易经验以及交易工具和资源有限的人',
                                'tr_TR' => 'WeMasterTrade, büyük bir gün içi işlem hesabı oluşturacak büyük sermayesi olmayan, işlem deneyimi eksik olan ve sınırlı işlem araçları ile kaynaklara sahip kişileri desteklemek için tasarlanmıştır',
                                'fr_FR' => 'WeMasterTrade est conçu pour soutenir les personnes qui ne disposent pas de capitaux importants pour créer un grand compte de trading journalier, qui manquent d’expérience en trading et qui disposent d’outils et de ressources limités',
                                'es_PE' => 'WeMasterTrade está diseñado para apoyar a personas que no cuentan con capital suficiente para crear una cuenta grande de day trading, o que no tienen experiencia ni herramientas de trading avanzadas.<br><br>Si te tomaría más de 12 meses ahorrar $10,000 USD para abrir una cuenta con acceso limitado al mercado, altas comisiones y ejecución lenta, ¿por qué no empezar de inmediato con WeMasterTrade?<br><br>Pagas una pequeña Fee de activación, comienzas a operar de forma inmediata y generas retornos según tu desempeño.',
                                'es_ES' => 'WeMasterTrade está diseñado para apoyar a las personas que no tienen grandes capitales para crear una cuenta grande de day trading, carecen de experiencia en trading y cuentan con herramientas y recursos limitados',
                                'ru_RU' => 'WeMasterTrade создан для поддержки людей, у которых нет большого капитала для создания крупного счета для дневной торговли, недостаточно торгового опыта и ограничены торговые инструменты и ресурсы',
                                'ja' => 'WeMasterTrade は、大きなデイトレード口座を作るための資金がない人、取引経験が不足している人、そして取引ツールやリソースが限られている人を支援するために設計されています',
                                'ko_KR' => 'WeMasterTrade는 큰 규모의 데이 트레이딩 계좌를 만들 자금이 부족하고, 거래 경험이 부족하며, 거래 도구와 자원이 제한된 사람들을 지원하기 위해 설계되었습니다',
                                'km' => 'WeMasterTrade ត្រូវបានរចនាឡើងដើម្បីគាំទ្រអ្នកដែលមិនមានទុនធំសម្រាប់បង្កើតគណនីជួញដូរប្រចាំថ្ងៃធំ ខ្វះបទពិសោធន៍ក្នុងការជួញដូរ និងមានឧបករណ៍និងធនធានជួញដូរមានកំណត់',
                                'bn_BD' => 'WeMasterTrade এমন মানুষের জন্য তৈরি যারা বড় ডে ট্রেডিং অ্যাকাউন্ট তৈরির মতো বড় মূলধন নেই, ট্রেডিং অভিজ্ঞতা কম এবং ট্রেডিং টুল ও রিসোর্স সীমিত',
                                'hk' => 'WeMasterTrade 旨在支持那些沒有大量資金建立大型日內交易帳戶、缺乏交易經驗以及交易工具和資源有限的人',
                                'ir' => 'WeMasterTrade برای حمایت از افرادی طراحی شده است که سرمایه زیادی برای ایجاد یک حساب بزرگ معاملات روزانه ندارند، تجربه معاملاتی کمی دارند و ابزارها و منابع معاملاتی محدودی در اختیار دارند',
                                'ur' => 'WeMasterTrade ان افراد کی مدد کے لیے تیار کیا گیا ہے جن کے پاس بڑا ڈے ٹریڈنگ اکاؤنٹ بنانے کے لیے زیادہ سرمایہ نہیں ہوتا، جو ٹریڈنگ کے تجربے سے محروم ہوتے ہیں، اور جن کے پاس ٹریڈنگ کے محدود ٹولز اور وسائل ہوتے ہیں۔',
                                'id' => 'WeMasterTrade dirancang untuk mendukung orang-orang yang tidak memiliki modal besar untuk membuat akun day trading besar, kurang pengalaman trading, dan memiliki alat serta sumber daya trading yang terbatas',
                                'pt_BR' => 'O WeMasterTrade foi projetado para apoiar pessoas que não possuem muito capital para criar uma grande conta de day trading, têm pouca experiência em trading e contam com ferramentas e recursos de trading limitados',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'WeMasterTrade is designed to support people who do not have big money to create a large day trading account, lack trading experience, and have limited trading tools and resources.';
                        ?>
                    </p>
                    <div class="btn__watch">
                        <p class="lightbox-item" data-youtube-id="VF6Oqy7i0PA"><a><span>
                            <?php
								$locale = get_locale();
								if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
									$locale = 'es_MX';
								}
								$texts = [
									'th' => 'ดูวิดีโอ',
									'zh_CN' => '观看视频',
									'tr_TR' => 'Videoyu izle',
									'fr_FR' => 'Regarder la vidéo',
									'es_PE' => 'Ver video',
                                                    'es_ES' => 'Ver video',
                                                    'es_ES' => 'Ver video',
                                                    'es_ES' => 'Ver video',
                                                    'es_ES' => 'Ver video',
                                                    'es_ES' => 'Ver video',
                                                    'es_ES' => 'Ver video',
									'es_ES' => 'Ver video',
									'ru_RU' => 'Смотреть видео',
									'ja' => '動画を見る',
									'ko_KR' => '영상 보기',
									'km' => 'មើលវីដេអូ',
									'bn_BD' => 'ভিডিও দেখুন',
									'hk' => '觀看影片',
									'ir' => 'مشاهده ویدیو',
                                    'ur' => 'یہ اس طرح کام کرتا ہے:',
									'id' => 'Tonton video',
									'pt_BR' => 'Assistir vídeo',
								];
								$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Watch video';
							?>
                        </span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="hiw__step">
                <div class="item">
                    <p class="icon"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/hiw_step_dc.png" width="168" height="194" alt="Step">
                    </p>
                    <div class="title">
                        <p class="title__sub">
                            <?php
								$locale = get_locale();
								if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
									$locale = 'es_MX';
								}
								$texts = [
									'th' => 'ขั้นตอนที่ 1',
									'zh_CN' => '步骤 1',
									'tr_TR' => 'Adım 1',
									'fr_FR' => 'Étape 1',
									'es_PE' => 'Paso 1',
									'es_ES' => 'Paso 1',
									'ru_RU' => 'Шаг 1',
									'ja' => 'ステップ 1',
									'ko_KR' => '1단계',
									'km' => 'ជំហាន 1',
									'bn_BD' => 'ধাপ ১',
									'hk' => '步驟 1',
									'ir' => 'مرحله 1',
                                    'ur' => 'مرحلہ 1',
									'id' => 'Langkah 1',
									'pt_BR' => 'Passo 1',
									'es_PE' => 'PASO 1',
								];
								$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Step 1';
							?>
                        </p>
                    </div>
                    <div class="cnt">
                        <?php
                            $texts = [
                                'zh_CN' => '<h4>填写探索表单</h4><ul><li>查看即时套餐对比，选择最符合您交易目标的方案：<a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>对比</strong></a></li></ul>',
                                'tr_TR' => '<h4>Keşif formunu doldurun</h4><ul><li>İşlem hedeflerinize en uygun seçeneği belirlemek için Anlık paket karşılaştırmasını inceleyin: <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>Karşılaştırma</strong></a></li></ul>',
                                'fr_FR' => '<h4>Remplissez le formulaire de découverte</h4><ul><li>Consultez la comparaison des forfaits Instant pour choisir l’option qui correspond le mieux à vos objectifs de trading : <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>Comparer</strong></a></li></ul>',
                                'es_ES' => '<h4>Complete el formulario de descubrimiento</h4><ul><li>Consulte la comparación de paquetes Instant para elegir la opción que mejor se adapte a sus objetivos de trading: <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>Comparación</strong></a></li></ul>',
                                'th'    => '<h4>กรอกแบบฟอร์มสำรวจ</h4><ul><li>ตรวจสอบการเปรียบเทียบแพ็กเกจ Instant เพื่อเลือกตัวเลือกที่เหมาะกับเป้าหมายการเทรดของคุณมากที่สุด: <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>เปรียบเทียบ</strong></a></li></ul>',
                                'ru_RU' => '<h4>Заполните форму</h4><ul><li>Ознакомьтесь с сравнением пакетов Instant, чтобы выбрать вариант, который лучше всего соответствует вашим торговым целям: <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>Сравнение</strong></a></li></ul>',
                                'ja'    => '<h4>ディスカバリーフォームに入力してください</h4><ul><li>取引目標に最適なプランを選ぶために、Instantパッケージの比較をご確認ください：<a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>比較</strong></a></li></ul>',
                                'ko_KR' => '<h4>디스커버리 폼을 작성하세요</h4><ul><li>거래 목표에 가장 적합한 옵션을 선택하려면 Instant 패키지 비교를 확인하세요: <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>비교하기</strong></a></li></ul>',
                                'km'    => '<h4>បំពេញទម្រង់ស្វែងរក</h4><ul><li>ពិនិត្យការប្រៀបធៀបកញ្ចប់ Instant ដើម្បីជ្រើសរើសជម្រើសដែលសមស្របបំផុតសម្រាប់គោលដៅជួញដូររបស់អ្នក: <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>ប្រៀបធៀប</strong></a></li></ul>',
                                'bn_BD' => '<h4>ডিসকভারি ফর্ম পূরণ করুন</h4><ul><li>আপনার ট্রেডিং লক্ষ্যের সাথে সবচেয়ে উপযুক্ত অপশনটি বেছে নিতে Instant প্যাকেজ তুলনা দেখুন: <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>তুলনা</strong></a></li></ul>',
                                'ur'    => '<h4>ڈسکوری فارم پُر کریں</h4><ul><li>اپنے ٹریڈنگ مقاصد کے لیے بہترین آپشن منتخب کرنے کے لیے Instant پیکج کا موازنہ دیکھیں: <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>موازنہ</strong></a></li></ul>',
                                'hk'    => '<h4>填寫探索表單</h4><ul><li>查看即時套餐比較，選擇最適合您交易目標的方案：<a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>比較</strong></a></li></ul>',
                                'ir'    => '<h4>فرم بررسی را تکمیل کنید</h4><ul><li>برای انتخاب بهترین گزینه متناسب با اهداف معاملاتی خود، مقایسه پکیج‌های Instant را بررسی کنید: <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>مقایسه</strong></a></li></ul>',
                                'pt_BR' => '<h4>Preencha o formulário de descoberta</h4><ul><li>Confira a comparação dos pacotes Instant para escolher a opção que melhor se adapta aos seus objetivos de trading: <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>Comparar</strong></a></li></ul>',
                            ];
                            $locale = cc_block_locale($texts);
                            echo $texts[$locale] ?? '<h4>Fill the discovery form</h4><ul><li>Check the Instant package comparison to choose the option that best fits your trading goals: <a href="' . pll_home_url() . 'package-comparison/" target="_blank"><strong>Comparison</strong></a></li></ul>';
                        ?>
                    </div>
                </div>
                <div class="item">
                    <p class="icon"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/hiw_step_dc.png" width="168" height="194" alt="Step">
                    </p>
                    <div class="title">
                        <p class="title__sub">
                            <?php
								$locale = get_locale();
								if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
									$locale = 'es_MX';
								}
								$texts = [
									'th' => 'ขั้นตอนที่ 2',
									'zh_CN' => '步骤 2',
									'tr_TR' => 'Adım 2',
									'fr_FR' => 'Étape 2',
									'es_PE' => 'Paso 2',
									'es_ES' => 'Paso 2',
									'ru_RU' => 'Шаг 2',
									'ja' => 'ステップ 2',
									'ko_KR' => '2단계',
									'km' => 'ជំហាន 2',
									'bn_BD' => 'ধাপ ২',
									'hk' => '步驟 2',
									'ir' => 'مرحله 2',
                                    'ur' => 'مرحلہ 2',
									'id' => 'Langkah 2',
									'pt_BR' => 'Passo 2',
								];
								$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Step 2';
							?>
                        </p>
                    </div>
                    <div class="cnt">
                        <?php
                            $locale = get_locale();
                            if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                $locale = 'es_MX';
                            }
                            $texts = [
                                'th' => '<h4>เลือกแพ็กเกจ</h4>
                                                <ul>
                                                    <li>โปรดเลือกเงื่อนไขที่เหมาะสมที่สุดสำหรับคุณ ซึ่งรวมถึง:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>จำนวนเงินคงเหลือ</li>
                                                            <li>กำลังซื้อ (เลเวอเรจ)</li>
                                                            <li>การขาดทุนรายวัน/หยุดการเทรด</li>
                                                            <li>การขาดทุนสูงสุด</li>
                                                        </ul>
                                                    </li>
                                                    <li>ซื้อแพ็กเกจและลงนามในสัญญาอิเล็กทรอนิกส์เพื่อเปิดใช้งานบัญชีเทรดเสมือนจริง</li>
                                                </ul>',
                                'zh_CN' => '<h4>选择套餐</h4>
                                                <ul>
                                                    <li>请选择最适合您的条件，包括：
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>余额金额</li>
                                                            <li>购买力（杠杆）</li>
                                                            <li>每日亏损/暂停</li>
                                                            <li>最大亏损</li>
                                                        </ul>
                                                    </li>
                                                    <li>购买后签署电子合同，以激活虚拟交易账户。</li>
                                                </ul>',
                                'tr_TR' => '<h4>Paketleri seçin</h4>
                                                <ul>
                                                    <li>Lütfen sizin için en uygun koşulları seçin, bunlar şunları içerir:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>Bakiye tutarı</li>
                                                            <li>Alım gücü (Kaldıraç)</li>
                                                            <li>Günlük kayıp/durdurma</li>
                                                            <li>Maksimum kayıp</li>
                                                        </ul>
                                                    </li>
                                                    <li>Satın alın ve sanal işlem hesabını etkinleştirmek için e-sözleşmeyi imzalayın.</li>
                                                </ul>',
                                'fr_FR' => '<h4>Sélectionnez les forfaits</h4>
                                                <ul>
                                                    <li>Veuillez sélectionner les conditions les plus adaptées pour vous, notamment :
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>Montant du solde</li>
                                                            <li>Pouvoir d’achat (Effet de levier)</li>
                                                            <li>Perte quotidienne/pause</li>
                                                            <li>Perte maximale</li>
                                                        </ul>
                                                    </li>
                                                    <li>Achetez-le et signez le contrat électronique pour activer le compte de trading virtuel.</li>
                                                </ul>',
                                'es_PE' => '<h3 class="h4">Selecciona tu paquete</h3>
                                                <ul>
                                                    <li>Elige las condiciones más adecuadas para ti, incluyendo:
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>Balance de cuenta</li>
                                                            <li>Poder de compra (Leverage)</li>
                                                            <li>Límite de pérdida diaria</li>
                                                            <li>Límite de pérdida máxima</li>
                                                        </ul>
                                                    </li>
                                                    <li>Realiza el pago y firma el e-contrato para activar tu cuenta de trading virtual.</li>
                                                    <li>Ir a paquetes.</li>
                                                </ul>',
                                'es_ES' => '<h4>Seleccione los paquetes</h4>
                                                <ul>
                                                    <li>Seleccione las condiciones más adecuadas para usted, incluyendo:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>Monto del saldo</li>
                                                            <li>Poder de compra (Apalancamiento)</li>
                                                            <li>Pérdida diaria/pausa</li>
                                                            <li>Pérdida máxima</li>
                                                        </ul>
                                                    </li>
                                                    <li>Cómprelo y firme el contrato electrónico para activar la cuenta de trading virtual.</li>
                                                </ul>',
                                'es_MX' => '<h4>Selecciona los paquetes</h4>
                                                <ul>
                                                    <li>Por favor selecciona las condiciones más adecuadas para ti, incluyendo:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>Monto del balance</li>
                                                            <li>Poder de compra (Apalancamiento)</li>
                                                            <li>Pérdida diaria/pausa</li>
                                                            <li>Pérdida máxima</li>
                                                        </ul>
                                                    </li>
                                                    <li>Cómpralo y firma el contrato electrónico para activar la cuenta de trading virtual.</li>
                                                </ul>',
                                'ru_RU' => '<h4>Выберите пакеты</h4>
                                                <ul>
                                                    <li>Пожалуйста, выберите наиболее подходящие для вас условия, включая:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>Сумма баланса</li>
                                                            <li>Покупательная способность (Кредитное плечо)</li>
                                                            <li>Дневной убыток/пауза</li>
                                                            <li>Максимальный убыток</li>
                                                        </ul>
                                                    </li>
                                                    <li>Приобретите пакет и подпишите электронный договор, чтобы активировать виртуальный торговый счет.</li>
                                                </ul>',
                                'ja' => '<h4>パッケージを選択してください</h4>
                                                <ul>
                                                    <li>以下を含む、あなたに最も適した条件を選択してください:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>残高金額</li>
                                                            <li>購買力（レバレッジ）</li>
                                                            <li>日次損失/一時停止</li>
                                                            <li>最大損失</li>
                                                        </ul>
                                                    </li>
                                                    <li>購入し、電子契約に署名して仮想取引口座を有効化してください。</li>
                                                </ul>',
                                'ko_KR' => '<h4>패키지를 선택하세요</h4>
                                                <ul>
                                                    <li>다음을 포함하여 본인에게 가장 적합한 조건을 선택해 주세요:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>잔액 금액</li>
                                                            <li>매수 가능 금액(레버리지)</li>
                                                            <li>일일 손실/중지</li>
                                                            <li>최대 손실</li>
                                                        </ul>
                                                    </li>
                                                    <li>구매 후 전자계약서에 서명하여 가상 거래 계정을 활성화하세요.</li>
                                                </ul>',
                                'km' => '<h4>ជ្រើសរើសកញ្ចប់</h4>
                                                <ul>
                                                    <li>សូមជ្រើសរើសលក្ខខណ្ឌដែលសមស្របបំផុតសម្រាប់អ្នក រួមមាន:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>ចំនួនសមតុល្យ</li>
                                                            <li>អំណាចទិញ (Leverage)</li>
                                                            <li>ការខាតបង់ប្រចាំថ្ងៃ/ផ្អាក</li>
                                                            <li>ការខាតបង់អតិបរមា</li>
                                                        </ul>
                                                    </li>
                                                    <li>ទិញវា និងចុះហត្ថលេខាលើកិច្ចសន្យាអេឡិចត្រូនិក ដើម្បីធ្វើឱ្យគណនីជួញដូរនិម្មិតសកម្ម។</li>
                                                </ul>',
                                'bn_BD' => '<h4>প্যাকেজ নির্বাচন করুন</h4>
                                                <ul>
                                                    <li>অনুগ্রহ করে আপনার জন্য সবচেয়ে উপযুক্ত শর্তগুলো নির্বাচন করুন, যার মধ্যে রয়েছে:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>ব্যালেন্সের পরিমাণ</li>
                                                            <li>ক্রয়ক্ষমতা (লিভারেজ)</li>
                                                            <li>দৈনিক ক্ষতি/বিরতি</li>
                                                            <li>সর্বোচ্চ ক্ষতি</li>
                                                        </ul>
                                                    </li>
                                                    <li>এটি ক্রয় করুন এবং ভার্চুয়াল ট্রেডিং অ্যাকাউন্ট সক্রিয় করতে ই-কন্ট্রাক্টে স্বাক্ষর করুন।</li>
                                                </ul>',
                                'hk' => '<h4>選擇方案</h4>
                                                <ul>
                                                    <li>請選擇最適合您的條件，包括：
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>餘額金額</li>
                                                            <li>購買力（槓桿）</li>
                                                            <li>每日虧損/暫停</li>
                                                            <li>最大虧損</li>
                                                        </ul>
                                                    </li>
                                                    <li>購買後並簽署電子合約，以啟用虛擬交易帳戶。</li>
                                                </ul>',
                                'ir' => '<h4>بسته‌ها را انتخاب کنید</h4>
                                                <ul>
                                                    <li>لطفاً مناسب‌ترین شرایط را برای خود انتخاب کنید، شامل:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>مقدار موجودی</li>
                                                            <li>قدرت خرید (اهرم)</li>
                                                            <li>زیان روزانه/توقف</li>
                                                            <li>حداکثر زیان</li>
                                                        </ul>
                                                    </li>
                                                    <li>آن را خریداری کرده و قرارداد الکترونیکی را امضا کنید تا حساب معاملاتی مجازی فعال شود.</li>
                                                </ul>',
                                'ur' => '<h4>پیکیجز منتخب کریں</h4><ul><li>براہِ کرم اپنے لیے سب سے موزوں<br class="pc">شرائط منتخب کریں، جن میں شامل ہیں:<br><ul class="ul__sub" style="margin-left:0"><li>بیلنس کی رقم</li><li>خریداری کی طاقت (لیوریج)</li><li>روزانہ نقصان / توقف</li><li>زیادہ سے زیادہ نقصان</li></ul></li><li>اسے خریدیں اور ورچوئل ٹریڈنگ اکاؤنٹ کو فعال کرنے کے لیے ای-کنٹریکٹ پر دستخط کریں۔</li></ul>',
                                'id' => '<h4>Pilih paket</h4>
                                                <ul>
                                                    <li>Silakan pilih kondisi yang paling sesuai untuk Anda, termasuk:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>Jumlah saldo</li>
                                                            <li>Daya beli (Leverage)</li>
                                                            <li>Kerugian harian/jeda</li>
                                                            <li>Kerugian maksimum</li>
                                                        </ul>
                                                    </li>
                                                    <li>Beli dan tanda tangani e-contract untuk mengaktifkan akun trading virtual.</li>
                                                </ul>',
                                'pt_BR' => '<h4>Selecione os pacotes</h4>
                                                <ul>
                                                    <li>Por favor, selecione as condições mais adequadas para você, incluindo:
                                                        <br class="pc">
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>Valor do saldo</li>
                                                            <li>Poder de compra (Alavancagem)</li>
                                                            <li>Perda diária/pausa</li>
                                                            <li>Perda máxima</li>
                                                        </ul>
                                                    </li>
                                                    <li>Compre e assine o contrato eletrônico para ativar a conta de trading virtual.</li>
                                                </ul>',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h4>Select the packages</h4>
                                                <ul>
                                                    <li>Please select the most suitable
                                                        <br class="pc">conditions for you, including:
                                                        <br>
                                                        <ul class="ul__sub" style="margin-left:0">
                                                            <li>Balance amount</li>
                                                            <li>Buying power (Leverage)</li>
                                                            <li>Daily loss/pause</li>
                                                            <li>Maximum loss</li>
                                                        </ul>
                                                    </li>
                                                    <li>Purchase it and sign the e-contract to activate the virtual trading account.</li>
                                                </ul>';
                        ?>
                    </div>
                </div>
                <div class="item">
                    <p class="icon"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/hiw_step_dc.png" width="168" height="194" alt="Step">
                    </p>
                    <div class="title">
                        <p class="title__sub">
                            <?php
								$locale = get_locale();
								if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
									$locale = 'es_MX';
								}
								$texts = [
									'th' => 'ขั้นตอนที่ 3',
									'zh_CN' => '步骤 3',
									'tr_TR' => 'Adım 3',
									'fr_FR' => 'Étape 3',
									'es_PE' => 'Paso 3',
									'es_ES' => 'Paso 3',
									'ru_RU' => 'Шаг 3',
									'ja' => 'ステップ 3',
									'ko_KR' => '3단계',
									'km' => 'ជំហាន 3',
									'bn_BD' => 'ধাপ ৩',
									'hk' => '步驟 3',
									'ir' => 'مرحله 3',
                                    'ur' => 'مرحلہ 3',
									'id' => 'Langkah 3',
									'pt_BR' => 'Passo 3',
								];
								$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Step 3';
							?>
                        </p>
                    </div>
                    <div class="cnt">
                        <?php
                            $locale = get_locale();
                            if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                $locale = 'es_MX';
                            }
                            $texts = [
                                'th' => '<h4>การเทรดและการถอนเงิน</h4>
                                                <ul>
                                                    <li>เมื่อคุณเริ่มเทรด โปรดตรวจสอบให้แน่ใจว่าคุณปฏิบัติตามกฎการเทรดของเรา (การขาดทุนรายวัน / การขาดทุนสูงสุด) ตามแพ็กเกจที่กำหนด และต้องเป็นไปตามเงื่อนไขกำไร เช่น บรรลุเป้าหมายกำไรตั้งแต่ 6% ถึง 10% ขึ้นอยู่กับแพ็กเกจ กรุณาอ่าน <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a>
                                                    </li>
                                                </ul>',
                                'zh_CN' => '<h4>交易与提现</h4>
                                                <ul>
                                                    <li>开始交易时，请确保遵守所选套餐规定的交易规则（每日亏损 / 最大亏损）。并满足盈利条件，例如根据套餐不同，实现 6% 至 10% 的盈利目标。请阅读我们的 <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a>
                                                    </li>
                                                </ul>',
                                'tr_TR' => '<h4>İşlem ve Para Çekme</h4>
                                                <ul>
                                                    <li>İşleme başladığınızda, lütfen seçtiğiniz paketin işlem kurallarına (günlük kayıp / maksimum kayıp) uyduğunuzdan emin olun. Ayrıca kâr şartlarını karşılamalısınız; örneğin pakete bağlı olarak %6 ile %10 arasında bir kâr hedefi elde etmek. Daha fazla bilgi için <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a> sayfamızı okuyun.
                                                    </li>
                                                </ul>',
                                'fr_FR' => '<h4>Trading et retrait</h4>
                                                <ul>
                                                    <li>Lorsque vous commencez à trader, veuillez vous assurer de respecter nos règles de trading (perte quotidienne / perte maximale) du forfait sélectionné. Vous devez également atteindre les conditions de profit, comme un objectif de profit allant de 6 % à 10 % selon le forfait. Veuillez consulter notre <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a>.
                                                    </li>
                                                </ul>',
                                'es_PE' => '<h3 class="h4">Opera y solicita retiros</h3>
                                                <ul>
                                                    <li>Comienza a operar respetando las reglas del paquete seleccionado (límite de pérdida diaria y pérdida máxima).</li>
                                                    <li>Cumple las condiciones establecidas, como el objetivo de beneficio que puede variar entre 6% y 10% según el plan.</li>
                                                    <li>Revisa nuestro <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a> aquí.
                                                    </li>
                                                </ul>',
                                'es_ES' => '<h4>Trading y retiro</h4>
                                                <ul>
                                                    <li>Cuando comience a operar, asegúrese de seguir nuestras reglas de trading (pérdida diaria / pérdida máxima) del paquete especificado. También debe cumplir con las condiciones de beneficio, como alcanzar un objetivo de ganancia del 6 % al 10 % según el paquete. Lea nuestro <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a>.
                                                    </li>
                                                </ul>',
                                'es_MX' => '<h4>Trading y retiro</h4>
                                                <ul>
                                                    <li>Cuando empiece a operar, asegúrese de seguir nuestras reglas de trading (pérdida diaria / pérdida máxima) del paquete seleccionado. También debe cumplir con las condiciones de ganancia, como alcanzar un objetivo de beneficio del 6 % al 10 % dependiendo del paquete. Consulte nuestro <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a>.
                                                    </li>
                                                </ul>',
                                'ru_RU' => '<h4>Торговля и вывод средств</h4>
                                                <ul>
                                                    <li>Начиная торговлю, убедитесь, что вы соблюдаете наши правила торговли (дневной убыток / максимальный убыток) выбранного пакета. Также необходимо выполнить условия прибыли, например достичь цели прибыли от 6% до 10% в зависимости от пакета. Ознакомьтесь с нашим <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a>.
                                                    </li>
                                                </ul>',
                                'ja' => '<h4>取引と出金</h4>
                                                <ul>
                                                    <li>取引を開始する際は、選択したパッケージの取引ルール（1日の損失 / 最大損失）を必ず遵守してください。また、パッケージに応じて 6%～10% の利益目標を達成するなどの利益条件を満たす必要があります。詳細は <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a> をご確認ください。
                                                    </li>
                                                </ul>',
                                'ko_KR' => '<h4>거래 및 출금</h4>
                                                <ul>
                                                    <li>거래를 시작할 때 선택한 패키지의 거래 규칙(일일 손실 / 최대 손실)을 반드시 준수해야 합니다. 또한 패키지에 따라 6%~10%의 수익 목표 달성과 같은 수익 조건을 충족해야 합니다. 자세한 내용은 <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a>를 참고하세요.
                                                    </li>
                                                </ul>',
                                'km' => '<h4>ការជួញដូរ និងការដកប្រាក់</h4>
                                                <ul>
                                                    <li>នៅពេលអ្នកចាប់ផ្តើមជួញដូរ សូមប្រាកដថាអ្នកគោរពតាមច្បាប់ជួញដូររបស់យើង (ការខាតបង់ប្រចាំថ្ងៃ / ការខាតបង់អតិបរមា) តាមកញ្ចប់ដែលបានជ្រើសរើស។ ហើយត្រូវបំពេញលក្ខខណ្ឌប្រាក់ចំណេញ ដូចជាការសម្រេចគោលដៅប្រាក់ចំណេញចន្លោះពី 6% ដល់ 10% អាស្រ័យលើកញ្ចប់។ សូមអាន <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a> របស់យើង។
                                                    </li>
                                                </ul>',
                                'bn_BD' => '<h4>ট্রেডিং এবং উত্তোলন</h4>
                                                <ul>
                                                    <li>আপনি যখন ট্রেডিং শুরু করবেন, দয়া করে নিশ্চিত করুন যে আপনি নির্বাচিত প্যাকেজের ট্রেডিং নিয়ম (দৈনিক ক্ষতি / সর্বোচ্চ ক্ষতি) অনুসরণ করছেন। এছাড়াও লাভের শর্ত পূরণ করতে হবে, যেমন প্যাকেজ অনুযায়ী 6% থেকে 10% লাভের লক্ষ্য অর্জন করা। আমাদের <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a> পড়ুন।
                                                    </li>
                                                </ul>',
                                'hk' => '<h4>交易與提款</h4>
                                                <ul>
                                                    <li>當您開始交易時，請確保遵守所選套餐的交易規則（每日虧損 / 最大虧損）。並需達到盈利條件，例如根據套餐不同，達成 6% 至 10% 的盈利目標。請閱讀我們的 <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a>。
                                                    </li>
                                                </ul>',
                                'ir' => '<h4>معامله و برداشت</h4>
                                                <ul>
                                                    <li>وقتی معامله را شروع می‌کنید، لطفاً مطمئن شوید که از قوانین معاملاتی ما (زیان روزانه / حداکثر زیان) طبق بسته انتخابی پیروی می‌کنید. همچنین باید شرایط سود را برآورده کنید، مانند دستیابی به هدف سود بین ۶٪ تا ۱۰٪ بسته به نوع بسته. لطفاً <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a> ما را مطالعه کنید.
                                                    </li>
                                                </ul>',
                                'ur' => '<h4>ٹریڈنگ اور رقم نکلوانا</h4><ul><li>آپ ٹریڈنگ شروع کرتے ہیں، براہِ کرم یقینی بنائیں کہ آپ منتخب پیکیج کے مطابق ہماری ٹریڈنگ قواعد (روزانہ نقصان / زیادہ سے زیادہ نقصان) کی پابندی کریں۔ منافع کی شرائط پوری کریں، جیسے کہ پیکیج کے مطابق 6٪ سے 10٪ تک منافع حاصل کرنا۔ ہماری <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a> پڑھیں۔</li></ul>',
                                'id' => '<h4>Trading dan Penarikan</h4>
                                                <ul>
                                                    <li>Saat Anda mulai trading, pastikan Anda mengikuti aturan trading kami (kerugian harian / kerugian maksimum) sesuai paket yang dipilih. Anda juga harus memenuhi kondisi profit, seperti mencapai target keuntungan antara 6% hingga 10% tergantung paket. Silakan baca <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a>.
                                                    </li>
                                                </ul>',
                                'pt_BR' => '<h4>Trading e Saque</h4>
                                                <ul>
                                                    <li>Ao começar a operar, certifique-se de seguir nossas regras de trading (perda diária / perda máxima) do pacote selecionado. Também é necessário cumprir as condições de lucro, como atingir uma meta de lucro entre 6% e 10%, dependendo do pacote. Leia nosso <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a>.
                                                    </li>
                                                </ul>',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h4>Trading and Withdrawal</h4>
                                                <ul>
                                                    <li>You start trading, please make sure you follow our trading rules (daily loss / max loss) of the specified package. Meet profit conditions, such as achieving a profit target ranging from 6% to 10% depending on the package deal. Read our <a href="https://faq.wemastertrade.com/" target="_blank">FAQ</a>
                                                    </li>
                                                </ul>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End How it work -->
    <!-- Package Instant -->
    <section id="instant-funding" class="trading">
        <div class="container">
            <div class="title center">
                <p class="title__sub">
                    <?php
						$locale = get_locale();
						if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
							$locale = 'es_MX';
						}
						$texts = [
							'th' => 'แพ็กเกจ',
							'zh_CN' => '套餐',
							'tr_TR' => 'Paket',
							'fr_FR' => 'Forfait',
							'es_PE' => 'Paquete',
							'es_ES' => 'Paquete',
							'ru_RU' => 'Пакет',
							'ja' => 'パッケージ',
							'ko_KR' => '패키지',
							'km' => 'កញ្ចប់',
							'bn_BD' => 'প্যাকেজ',
							'hk' => '套餐',
							'ir' => 'پکیج',
							'id' => 'Paket',
							'pt_BR' => 'Pacote',
						];
						$locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Package';
					?>
                </p>
                <?php
                    $locale = get_locale();
                    if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                        $locale = 'es_MX';
                    }
                    $texts = [
                        'th' => '<h3>เลือกแพ็กเกจ <span>เงินทุนสำหรับการเทรด</span></h3>',
                        'zh_CN' => '<h3>选择您的 <span>交易资金套餐</span></h3>',
                        'tr_TR' => '<h3><span>İşlem Sermayesi</span> Paketinizi Seçin</h3>',
                        'fr_FR' => '<h3>Choisissez votre <span>forfait de capital de trading</span></h3>',
                        'es_PE' => '<h1 class="h3">Elige tu <span>paquete de capital de trading</span></h1>',
                        'es_ES' => '<h3>Elige tu <span>paquete de capital de trading</span></h3>',
                        'es_MX' => '<h3>Elige tu <span>paquete de capital de trading</span></h3>',
                        'ru_RU' => '<h3>Выберите <span>пакет торгового капитала</span></h3>',
                        'ja' => '<h3>あなたの<span>トレーディング資金パッケージ</span>を選択</h3>',
                        'ko_KR' => '<h3><span>트레이딩 자본</span> 패키지를 선택하세요</h3>',
                        'km' => '<h3>ជ្រើសរើស <span>កញ្ចប់មូលធនសម្រាប់ជួញដូរ</span></h3>',
                        'bn_BD' => '<h3>আপনার <span>ট্রেডিং ক্যাপিটাল প্যাকেজ</span> নির্বাচন করুন</h3>',
                        'hk' => '<h3>選擇您的<span>交易資金方案</span></h3>',
                        'ir' => '<h3>بسته <span>سرمایه معاملاتی</span> خود را انتخاب کنید</h3>',
                        'ur' => '<h3>اپنا ٹریڈنگ <span>کیپیٹل پیکیج</span> منتخب کریں</h3>',
                        'id' => '<h3>Pilih <span>Paket Modal Trading</span> Anda</h3>',
                        'pt_BR' => '<h3>Escolha seu <span>pacote de capital de trading</span></h3>',
                    ];
                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h3>Choose Your Trading <span>Capital Package</span></h3>';
                ?>
            </div>
            
            <div class="trading__content">
                <div class="trading__capital">
                    <h4>
                        <?php
                            $locale = get_locale();
                            if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                $locale = 'es_MX';
                            }
                            $texts = [
                                'th' => 'แพ็กเกจเงินทุน',
                                'zh_CN' => '资金套餐',
                                'tr_TR' => 'Sermaye Paketi',
                                'fr_FR' => 'Forfait de capital',
                                'es_PE' => 'Paquete de capital',
                                'es_ES' => 'Paquete de capital',
                                'es_MX' => 'Paquete de capital',
                                'ru_RU' => 'Пакет капитала',
                                'ja' => '資金パッケージ',
                                'ko_KR' => '자본 패키지',
                                'km' => 'កញ្ចប់មូលធន',
                                'bn_BD' => 'ক্যাপিটাল প্যাকেজ',
                                'hk' => '資金方案',
                                'ir' => 'بسته سرمایه',
                                'ur' => 'کیپیٹل پیکیج',
                                'id' => 'Paket Modal',
                                'pt_BR' => 'Pacote de capital',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Capital Package';
                        ?>
                    </h4>
                    <div class="trading__capital--tabs">
                        <p class="item active" data-tab="51010" data-tab-group="trading_capital">51010</p>
                        <p class="item" data-tab="510 Zero" data-tab-group="trading_capital">510Zero</p>
                        <p class="item" data-tab="Customize" data-tab-group="trading_capital">Customize</p>
                        <a href="<?php echo pll_home_url(); ?>package-comparison/" class="item">
                            <?php
                                $locale = get_locale();
                                if (function_exists('cc_locale_raw') && cc_locale_raw() === 'es_MX') {
                                    $locale = 'es_MX';
                                }
                                $texts = [
                                    'th' => 'เปรียบเทียบ',
                                    'zh_CN' => '比较',
                                    'tr_TR' => 'Karşılaştırma',
                                    'fr_FR' => 'Comparaison',
                                    'es_PE' => 'Comparación',
                                    'es_ES' => 'Comparación',
                                    'es_MX' => 'Comparación',
                                    'ru_RU' => 'Сравнение',
                                    'ja' => '比較',
                                    'ko_KR' => '비교',
                                    'km' => 'ប្រៀបធៀប',
                                    'bn_BD' => 'তুলনা',
                                    'hk' => '比較',
                                    'ur' => 'موازنہ',
                                    'ir' => 'مقایسه',
                                    'id' => 'Perbandingan',
                                    'pt_BR' => 'Comparação',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Comparison';
                            ?>
                        </a>
                    </div>
                </div>
                <?php 
                    $labels = [
                        'scale_up' => [
                            'en' => 'Scale Up Plan',
                            'ja' => 'スケールアッププラン',
                            'ko_KR' => '확장 계획',
                            'km' => 'ផែនការពង្រីក',
                            'bn_BD' => 'সম্প্রসারণ পরিকল্পনা',
                            'hk' => '升級計劃',
                            'pt_BR' => 'Plano de Crescimento',
                            'es_PE' => 'Plan de Escalamiento',
                            'ur' => 'اسکیل اپ پلان',
                        ],
                        'try_now' => [
                            'en' => 'Try Now',
                            'ja' => '今すぐお試しください',
                            'ko_KR' => '지금 바로 체험해보세요.',
                            'km' => 'សាកល្បងឥឡូវនេះ',
                            'bn_BD' => 'এখনই চেষ্টা করুন',
                            'hk' => '立即體驗',
                            'pt_BR' => 'Comece Agora',
                            'es_PE' => 'Probar Ahora',
                            'ur' => 'ابھی آزمائیں',
                        ],
                        'one_time_fee' => [
                            'en' => 'One-Time Fee',
                            'ja' => '今すぐお試しください',
                            'ar' => 'رسوم لمرة واحدة',
                            'ko_KR' => '일회성 요금',
                            'km' => 'ថ្លៃសេវាបង់តែម្តង៖',
                            'bn_BD' => 'এককালীন ফি',
                            'hk' => '一次性費用',
                            'pt_BR' => 'Taxa Única',
                            'ur' => 'ایک بار کی فیس',
                        ],
                        'swap_fee' => [
                            'en' => 'Swap Fee',
                            'bn_BD' => 'ফ্রি অ্যাকাউন্ট পরিবর্তন',
                            'hk' => '掉期費用',
                            'ur' => 'سواپ فیس',
                        ],
                        'free_swap' => [
                            'en' => 'Free-Swap',
                            'hk' => '免隔夜利息',
                            'es_PE' => 'Libre de Swap',
                            'ur' => 'سواپ فری',
                        ],
                        'buying_power' => [
                            'en' => 'Buying Power',
                            'km' => 'អំណាចទិញ',
                            'ja' => '購買力',
                            'ar' => 'القوة الشرائية',
                            'ko_KR' => '매수 가능 금액',
                            'bn_BD' => 'ক্রয় ক্ষমতা',
                            'hk' => '購買力',
                            'pt_BR' => 'Poder de Compra',
                            'es_PE' => 'Poder de Compra',
                            'ur' => 'خریداری کی طاقت',
                        ],
                        'daily_loss' => [
                            'en' => 'Daily Loss',
                            'km' => 'ការខាតបង់ប្រចាំថ្ងៃ',
                            'ar' => 'الخسارة اليومية',
                            'ko_KR' => '일일 손실 한도',
                            'bn_BD' => 'দৈনিক ক্ষতি',
                            'hk' => '每日虧損上限',
                            'pt_BR' => 'Perda Diária',
                            'es_PE' => 'Pérdida Diaria Máxima',
                            'ur' => 'روزانہ نقصان',
                        ],
                        'max_loss' => [
                            'en' => 'Max Loss',
                            'km' => 'ការខាតបង់អតិបរមា',
                            'ja' => '最大損失限度額',
                            'ar' => 'أقصى خسارة',
                            'ko_KR' => '최대 손실 한도',
                            'bn_BD' => 'সর্বোচ্চ ক্ষতি',
                            'hk' => '最大虧損',
                            'pt_BR' => 'Perda Máxima',
                            'es_PE' => 'Pérdida Máxima Total',
                            'ur' => 'زیادہ سے زیادہ نقصان',
                        ],
                        'profit_target_to_withdraw' => [
                            'en' => 'Profit Target To Withdraw',
                            'km' => 'គោលដៅប្រាក់ចំណេញសម្រាប់ការដកប្រាក់',
                            'ja' => '出金に必要な利益目標額',
                            'ar' => 'هدف الربح للسحب',
                            'ko_KR' => '출금을 위한 목표 수익',
                            'bn_BD' => 'উত্তোলনের জন্য মুনাফার লক্ষ্য',
                            'hk' => '盈利目標可提現',
                            'pt_BR' => 'Meta de Lucro para Saque',
                            'es_PE' => 'Objetivo de Ganancia para Retiro',
                            'ur' => 'منافع کا ہدف برائے نکاسی',
                        ],
                        'faq' => [
                            'en' => 'FAQs',
                            'km' => 'សំណួរដែលសួរញឹកញាប់',
                            'ja' => 'よくあるご質問',
                            'ar' => 'الأسئلة الشائعة',
                            'ko_KR' => '자주 묻는 질문',
                            'bn_BD' => 'সাধারণ জিজ্ঞাসা',
                            'hk' => '常見問題解答',
                            'pt_BR' => 'Perguntas Frequentes',
                            'es_PE' => 'Preguntas Frecuentes',
                            'ur' => 'اکثر پوچھے جانے والے سوالات',
                        ],
                        'free_trial' => [
                            'en' => 'Free Trial',
                            'km' => 'ការសាកល្បងឥតគិតថ្លៃ',
                            'ja' => '無料トライアル',
                            'ar' => 'تجربة مجانية',
                            'ko_KR' => '무료 체험',
                            'bn_BD' => 'বিনামূল্যে ট্রায়াল',
                            'hk' => '免費體驗',
                            'pt_BR' => 'Teste Gratuito',
                            'es_PE' => 'Prueba Gratuita',
                            'ur' => 'مفت آزمائش',
                        ],
                        'we_fund_u' => [
                            'en' => 'we fund you',
                            'km' => 'យើងផ្តល់ហិរញ្ញប្បទានដល់អ្នក',
                            'ar' => 'نقوم بتمويلك',
                            'ko_KR' => '저희가 자금을 지원해드립니다',
                            'bn_BD' => 'আমরা আপনাকে ফান্ড দিই',
                            'hk' => '我們為你提供資金',
                            'pt_BR' => 'Financiamos você com',
                            'es_PE' => 'Prueba Gratuita',
                            'ur' => 'ہم آپ کو فنڈ فراہم کرتے ہیں',
                        ],
                    ];
                    function get_label_by_locale($key, $labels) {
                        $locale = get_locale();
                        return $labels[$key][$locale] ?? $labels[$key]['en'];
                    }
                ?>
                <div class="trading__market">
                    <div class="trading__market--size">
                        <p class="label">
                            <?php
                                $texts = [
                                    'th' => 'ขนาดบัญชี',
                                    'zh_CN' => '账户规模',
                                    'tr_TR' => 'Hesap Büyüklüğü',
                                    'fr_FR' => 'Taille du compte',
                                    'es_PE' => 'Tamaño de la cuenta',
                                    'es_ES' => 'Tamaño de la cuenta',
                                    'ru_RU' => 'Размер счета',
                                    'ja' => '口座サイズ',
                                    'ko_KR' => '계좌 규모',
                                    'km' => 'ទំហំគណនី',
                                    'bn_BD' => 'অ্যাকাউন্টের আকার',
                                    'hk' => '帳戶規模',
                                    'ir' => 'اندازه حساب',
                                    'ur' => 'اکاؤنٹ کا سائز',
                                    'id' => 'Ukuran Akun',
                                    'pt_BR' => 'Tamanho da Conta',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Account Size';
                            ?>
                        </p>
                        <div class="trading__market--price active" data-tab-content="51010" data-tab-group="trading_capital">
                            <p class="active" data-tab="5k" data-tab-group="trading_market">$5,000</p>
                            <p data-tab="10k" data-tab-group="trading_market">$10,000</p>
                            <p data-tab="25k" data-tab-group="trading_market">$25,000</p>
                            <p data-tab="50k" data-tab-group="trading_market">$50,000</p>
                            <p data-tab="100k" data-tab-group="trading_market">$100,000</p>
                            <p data-tab="200k" data-tab-group="trading_market">$200,000</p>
                        </div>

                        <div class="trading__market--price" data-tab-content="51010-NoPC" data-tab-group="trading_capital">
                            <p class="active" data-tab="10k" data-tab-group="trading_market">$10,000</p>
                            <p data-tab="25k" data-tab-group="trading_market">$25,000</p>
                            <p data-tab="50k" data-tab-group="trading_market">$50,000</p>
                        </div>

                        <div class="trading__market--price" data-tab-content="510 Zero" data-tab-group="trading_capital">
                            <p class="active" data-tab="5k" data-tab-group="trading_market">$5,000</p>
                            <p data-tab="10k" data-tab-group="trading_market">$10,000</p>
                            <p data-tab="25k" data-tab-group="trading_market">$25,000</p>
                            <p data-tab="50k" data-tab-group="trading_market">$50,000</p>
                            <p data-tab="100k" data-tab-group="trading_market">$100,000</p>
                            <p data-tab="200k" data-tab-group="trading_market">$200,000</p>
                        </div>
                        <div class="trading__market--price" data-tab-content="Customize" data-tab-group="trading_capital">
                            <p class="active" data-tab="10k" data-tab-group="trading_market">$10,000</p>
                            <p data-tab="25k" data-tab-group="trading_market">$25,000</p>
                            <p data-tab="50k" data-tab-group="trading_market">$50,000</p>
                            <p data-tab="100k" data-tab-group="trading_market">$100,000</p>
                            <p data-tab="200k" data-tab-group="trading_market">$200,000</p>
                            <p data-tab="400k" data-tab-group="trading_market">$400,000</p>
                        </div>
                    </div>
                    <p class="trading__market--badge"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/ic_badge.png" width="22" height="25" alt="Account">51010 Account $10K</p>
                    <div class="trading__market--content active" data-tab-content="51010" data-tab-group="trading_capital">
                        <div class="item active" data-tab-content="5k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$5,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$55</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$500,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$250 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$500 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>10%</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="10k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$10,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$95</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$1,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$500 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$1,000 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>10%</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="25k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$25,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$245</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$2,500,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$1,250 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$2,500 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>10%</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="50k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$50,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$360</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$5,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$2,500 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$5,000 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>10%</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="100k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">100,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$690</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$10,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$5,000 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$10,000 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>10%</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="200k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$200,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$1,340</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$20,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$10,000 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$20,000 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>10%</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="trading__market--content" data-tab-content="510 Zero" data-tab-group="trading_capital">
                        <div class="item active" data-tab-content="5k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$5,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$65</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$500,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$250 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$500 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>N/A</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="10k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$10,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$105</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$1,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$500 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$1,000 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>N/A</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="25k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$25,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$275</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$2,500,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$1,250 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$2,500 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>N/A</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="50k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$50,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$410</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$5,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$2,500 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$5,000 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>N/A</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="100k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">100,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$800</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$10,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$5,000 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$10,000 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>N/A</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="200k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$200,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$1,560</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$20,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$10,000 (5%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$20,000 (10%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>N/A</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="trading__market--content" data-tab-content="Customize" data-tab-group="trading_capital">
                        <div class="item active" data-tab-content="10k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$10,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$35</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$1,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$200 (2%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$400 (4%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>6%</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="25k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$25,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$88</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$2,500,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$500 (2%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$1,000(4%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>6%</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="50k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$50,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$175</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$5,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$1,000 (2%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$2,000 (4%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>6%</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="100k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">100,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$345</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$10,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$2,000 (2%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$4,000 (4%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>6%</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="200k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$200,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$690</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$20,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$4,000 (2%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$8,000 (4%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>6%</dd>
                            </dl>
                        </div>
                        <div class="item" data-tab-content="400k" data-tab-group="trading_market">
                            <dl class="total">
                                <dt><?php echo get_label_by_locale('we_fund_u', $labels); ?><span class="clr">$400,000</span></dt>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('one_time_fee', $labels); ?></dt>
                                <dd><span class="red">$1,380</span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('swap_fee', $labels); ?></dt>
                                <dd><?php echo get_label_by_locale('free_swap', $labels); ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('buying_power', $labels); ?></dt>
                                <dd>$40,000,000</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('daily_loss', $labels); ?></dt>
                                <dd>$8,000 (2%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('max_loss', $labels); ?></dt>
                                <dd>$16,000 (4%)</dd>
                            </dl>
                            <dl>
                                <dt><?php echo get_label_by_locale('profit_target_to_withdraw', $labels); ?></dt>
                                <dd>6%</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="trading__market--btn">
                        <div class="btn">
                            <p><a href="https://my.wemastertrade.com/en/register/" target="_blank"><span><?php echo get_label_by_locale('try_now', $labels); ?></span></a></p>
                            <p><a href="<?php echo pll_home_url(); ?>scale-up-plan/" class="btn_w"><span><?php echo get_label_by_locale('scale_up', $labels); ?></span></a></p>
                        </div>
                        <div class="link">
                            <p><a href="https://faq.wemastertrade.com/" target="_blank"><?php echo get_label_by_locale('faq', $labels); ?></a></p>
                            <p><a href="https://my.wemastertrade.com/" target="_blank"><?php echo get_label_by_locale('free_trial', $labels); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Package Instant -->
    <?php 
        require $partial_path . 'uk-unique.php';
        // require $partial_path . 'uk-master.php';
        require $partial_path . 'uk-traders.php';
		require $partial_path . 'uk-subscribe.php';
		require $partial_path . 'uk-payouts.php';
    ?>
<?php get_footer(); ?>