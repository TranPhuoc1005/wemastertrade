<?php

/**
 * Template Name: UK Payout
 * Template Post Type: page
 */
get_header();
?>
<style>
  #youtube-playlist-loadmore {
    justify-content: center;
  }
  #youtube-playlist-loader{
    display: none !important;
    position: relative !important;
    width: 48px;
    height: 48px;
    margin: 30px auto 0;
  }
  #youtube-playlist-loader.is-loading{
      display: block !important;
  }
</style>
<div class="payout__page mainvisual mainvisual__custombg">
    <div class="mainvisual__img"><img src="/wp-content/themes/flatsome/uk-template/images/mainvs_img_payout.png" width="1612" height="1123" alt="Contact Us"></div>
    <div class="container">
        <div class="mainvisual__content">
            <h1 class="h2"><span><?php
                $texts = [
                    'th' => 'การจ่ายเงิน',
                    'zh_CN' => '提款',
                    'tr_TR' => 'Ödeme',
                    'fr_FR' => 'Paiement',
                    'es_PE' => 'Cuenta Fondeada con Pagos Rápidos',
                    'es_ES' => 'Pago',
                    'ru_RU' => 'Выплата',
                    'ja' => 'ペイアウト',
                    'ko_KR' => '출금',
                    'km' => 'ការទូទាត់',
                    'bn_BD' => 'পেআউট',
                    'hk' => '提款',
                    'ir' => 'پرداخت',
                    'ur' => 'ادائیگی',
                    'id' => 'Pembayaran',
                    'pt_BR' => 'Pagamento',
                ];
                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Payout';
            ?></span></h1>
            <div class="mainvisual__desc">
                <p>
                    <?php
                        $texts = [
                            'zh_CN' => '我们<strong>快速处理结算</strong>，通过<strong>线下活动</strong>与交易者建立联系，并打造<strong>支持性的社区</strong>。这些都是我们业务的重要组成部分。',
                            'tr_TR' => '<strong>Ödemeleri hızlı şekilde gerçekleştiririz</strong>, traderlarımızla <strong>offline etkinliklerde</strong> buluşur ve <strong>destekleyici bir topluluk</strong> oluştururuz. Bunların hepsi işimizin temel parçalarıdır.',
                            'fr_FR' => 'Nous <strong>traitons les paiements rapidement</strong>, rencontrons nos traders lors <strong>d’événements hors ligne</strong> et construisons une <strong>communauté solidaire</strong>. Ce sont des éléments clés de notre activité.',
                            'es_ES' => '<strong>Procesamos pagos rápidamente</strong>, nos conectamos con nuestros traders en <strong>eventos presenciales</strong> y construimos una <strong>comunidad de apoyo</strong>. Todos estos son elementos clave de nuestro negocio.',
                            'th'    => 'เรา<strong>ดำเนินการจ่ายเงินอย่างรวดเร็ว</strong> เชื่อมต่อกับเทรดเดอร์ผ่าน<strong>กิจกรรมออฟไลน์</strong> และสร้าง<strong>ชุมชนที่สนับสนุนกัน</strong> ซึ่งทั้งหมดนี้เป็นส่วนสำคัญของธุรกิจของเรา',
                            'ru_RU' => 'Мы <strong>быстро обрабатываем выплаты</strong>, взаимодействуем с трейдерами на <strong>офлайн-мероприятиях</strong> и формируем <strong>поддерживающее сообщество</strong>. Всё это — ключевые элементы нашего бизнеса.',
                            'ja'    => '私たちは<strong>迅速に支払いを処理し</strong>、<strong>オフラインイベント</strong>でトレーダーとつながり、<strong>支え合うコミュニティ</strong>を構築しています。これらはすべて私たちの事業の重要な要素です。',
                            'ko_KR' => '당사는 <strong>신속하게 지급을 처리하고</strong>, <strong>오프라인 이벤트</strong>를 통해 트레이더와 소통하며, <strong>서로를 지원하는 커뮤니티</strong>를 구축합니다. 이는 모두 우리의 핵심 요소입니다.',
                            'km'    => 'យើង<strong>ដំណើរការការទូទាត់យ៉ាងរហ័ស</strong> ភ្ជាប់ជាមួយអ្នកជួញដូរតាមរយៈ<strong>ព្រឹត្តិការណ៍ក្រៅអនឡាញ</strong> និងកសាង<strong>សហគមន៍ដែលគាំទ្រគ្នា</strong> ដែលទាំងអស់នេះជាផ្នែកសំខាន់នៃអាជីវកម្មរបស់យើង។',
                            'bn_BD' => 'আমরা <strong>দ্রুত পেমেন্ট প্রক্রিয়া করি</strong>, <strong>অফলাইন ইভেন্টে</strong> ট্রেডারদের সাথে যুক্ত হই এবং একটি <strong>সহায়ক কমিউনিটি</strong> তৈরি করি। এগুলো আমাদের ব্যবসার গুরুত্বপূর্ণ অংশ।',
                            'ur'    => 'ہم <strong>ادائیگیاں تیزی سے پراسیس کرتے ہیں</strong>، <strong>آف لائن ایونٹس</strong> میں ٹریڈرز سے جڑتے ہیں اور ایک <strong>سپورٹو کمیونٹی</strong> بناتے ہیں۔ یہ سب ہمارے کاروبار کے اہم حصے ہیں۔',
                            'hk'    => '我們<strong>快速處理付款</strong>，透過<strong>線下活動</strong>與交易者建立聯繫，並打造<strong>支持性的社群</strong>。這些都是我們業務的重要組成部分。',
                            'ir'    => 'ما <strong>پرداخت‌ها را سریع انجام می‌دهیم</strong>، از طریق <strong>رویدادهای حضوری</strong> با معامله‌گران ارتباط برقرار می‌کنیم و یک <strong>جامعه حمایتی</strong> می‌سازیم. این‌ها بخش‌های کلیدی کسب‌وکار ما هستند.',
                            'pt_BR' => 'Nós <strong>processamos pagamentos rapidamente</strong>, nos conectamos com traders em <strong>eventos offline</strong> e construímos uma <strong>comunidade de apoio</strong>. Esses são elementos essenciais do nosso negócio.',
                        ];
                        $locale = cc_block_locale($texts);
                        echo $texts[$locale] ?? 'We <strong>process payouts quickly</strong>, connect with our traders on <strong>offline events</strong>, and build a <strong>supportive community</strong>. These are all key parts of our business.';
                    ?>
                </p>
            </div>
            <div class="btn not_icon">
                <p><a href="#meet"><span>
                    <?php
                        $texts = [
                            'zh_CN' => '交易者访谈',
                            'tr_TR' => 'Trader Röportajları',
                            'fr_FR' => 'Interviews de Traders',
                            'es_ES' => 'Entrevistas a Traders',
                            'th'    => 'สัมภาษณ์เทรดเดอร์',
                            'ru_RU' => 'Интервью с трейдерами',
                            'ja'    => 'トレーダーインタビュー',
                            'ko_KR' => '트레이더 인터뷰',
                            'km'    => 'សម្ភាសន៍អ្នកជួញដូរ',
                            'bn_BD' => 'ট্রেডার সাক্ষাৎকার',
                            'ur'    => 'ٹریڈر انٹرویوز',
                            'hk'    => '交易者訪談',
                            'ir'    => 'مصاحبه با معامله‌گران',
                            'pt_BR' => 'Entrevistas com Traders',
                        ];
                        $locale = cc_block_locale($texts);
                        echo $texts[$locale] ?? 'Trader Interviews';
                    ?>
                </span></a></p>
                <p><a href="#payouts__chart" class="btn_w"><span>
                    <?php
                        $texts = [
                            'th' => 'การจ่ายเงินรายวัน',
                            'zh_CN' => '每日付款',
                            'tr_TR' => 'Günlük ödeme',
                            'fr_FR' => 'Paiement quotidien',
                            'es_PE' => 'Empieza y Recibe Pagos Reales',
                            'es_ES' => 'Pago diario',
                            'ru_RU' => 'Ежедневная выплата',
                            'ja' => '日次ペイアウト',
                            'ko_KR' => '일일 지급',
                            'km' => 'ការទូទាត់ប្រចាំថ្ងៃ',
                            'bn_BD' => 'দৈনিক পেআউট',
                            'hk' => '每日付款',
                            'ir' => 'پرداخت روزانه',
                            'ur' => 'روزانہ ادائیگی',
                            'id' => 'Pembayaran harian',
                            'pt_BR' => 'Pagamento diário',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Daily payout';
                    ?>
                </span></a></p>
            </div>
        </div>
    </div>
</div>
<div id="content">
     <!-- Meet -->
    <section id="meet" class="meet">
        <div class="container">
            <div class="title center">
                <?php
                    $texts = [
                        'th' => '<p class="title__sub">เทรดเดอร์ WMT</p><h3>พบกับ <span>เทรดเดอร์ WMT ที่ประสบความสำเร็จ</span></h3><p class="txt">ค้นพบกลยุทธ์และมุมมองเชิงลึกที่อยู่เบื้องหลังความสำเร็จของเทรดเดอร์ของเรา<br>ตลอดเส้นทางการเทรดอันน่าทึ่งกับ WeMasterTrade</p>',

                        'zh_CN' => '<p class="title__sub">WMT 交易员</p><h3>认识 <span>成功的 WMT 交易员</span></h3><p class="txt">探索推动我们交易员成功的隐藏策略与见解，<br>了解他们在 WeMasterTrade 的非凡交易旅程。</p>',

                        'tr_TR' => '<p class="title__sub">WMT Traderları</p><h3>Tanışın <span>Başarılı WMT Traderlarıyla</span></h3><p class="txt">Traderlarımızın başarısını sağlayan gizli stratejileri ve içgörüleri keşfedin,<br>WeMasterTrade ile çıktıkları olağanüstü trading yolculuğunda.</p>',

                        'fr_FR' => '<p class="title__sub">Traders WMT</p><h3>Rencontrez <span>les traders WMT à succès</span></h3><p class="txt">Découvrez les stratégies et les perspectives cachées qui ont alimenté le succès de nos traders<br>au cours de leur remarquable parcours de trading avec WeMasterTrade.</p>',

                        'es_PE' => '<p class="title__sub">Traders WMT</p><h2 class="h3">Historias de Traders con <span>Cuenta Fondeada</span></h2><p class="txt">Descubre cómo nuestros traders financiados superaron el challenge, obtuvieron su cuenta fondeada y hoy generan payouts reales con una prop firm confiable. Aprende las estrategias y la disciplina que les permitió empezar a cobrar ganancias consistentes.</p>',

                        'es_ES' => '<p class="title__sub">Traders WMT</p><h3>Conoce a <span>los traders exitosos de WMT</span></h3><p class="txt">Descubre las estrategias ocultas y los conocimientos que han impulsado el éxito de nuestros traders<br>en su notable trayectoria de trading con WeMasterTrade.</p>',

                        'ru_RU' => '<p class="title__sub">Трейдеры WMT</p><h3>Познакомьтесь с <span>успешными трейдерами WMT</span></h3><p class="txt">Узнайте скрытые стратегии и инсайты, которые привели наших трейдеров к успеху<br>в их впечатляющем торговом пути с WeMasterTrade.</p>',

                        'ja' => '<p class="title__sub">WMTトレーダー</p><h3>紹介します <span>成功したWMTトレーダー</span></h3><p class="txt">WeMasterTradeでの素晴らしいトレードの旅路の中で、<br>トレーダーたちの成功を支えた戦略や洞察を発見してください。</p>',

                        'ko_KR' => '<p class="title__sub">WMT 트레이더</p><h3>만나보세요 <span>성공적인 WMT 트레이더</span></h3><p class="txt">WeMasterTrade와 함께한 놀라운 트레이딩 여정 속에서<br>우리 트레이더들의 성공을 이끈 전략과 인사이트를 발견해 보세요.</p>',

                        'km' => '<p class="title__sub">ពាណិជ្ជករ WMT</p><h3>ជួបជាមួយ <span>ពាណិជ្ជករ WMT ដែលជោគជ័យ</span></h3><p class="txt">ស្វែងរកយុទ្ធសាស្ត្រ និងការយល់ដឹងសម្ងាត់ដែលបានជំរុញភាពជោគជ័យរបស់ពាណិជ្ជកររបស់យើង<br>ក្នុងដំណើរជួញដូរដ៏អស្ចារ្យជាមួយ WeMasterTrade។</p>',

                        'bn_BD' => '<p class="title__sub">WMT ট্রেডার</p><h3>পরিচিত হোন <span>সফল WMT ট্রেডারদের সাথে</span></h3><p class="txt">আমাদের ট্রেডারদের সাফল্যের পেছনের গোপন কৌশল ও অন্তর্দৃষ্টি আবিষ্কার করুন<br>তাদের WeMasterTrade এর অসাধারণ ট্রেডিং যাত্রায়।</p>',

                        'hk' => '<p class="title__sub">WMT 交易員</p><h3>認識 <span>成功的 WMT 交易員</span></h3><p class="txt">探索推動我們交易員成功的隱藏策略與見解，<br>了解他們在 WeMasterTrade 的卓越交易旅程。</p>',

                        'ir' => '<p class="title__sub">تریدرهای WMT</p><h3>آشنا شوید با <span>تریدرهای موفق WMT</span></h3><p class="txt">استراتژی‌ها و بینش‌های پنهانی که موفقیت تریدرهای ما را رقم زده‌اند کشف کنید<br>در مسیر معاملاتی چشمگیر آن‌ها با WeMasterTrade.</p>',

                        'id' => '<p class="title__sub">Trader WMT</p><h3>Temui <span>Trader WMT yang Sukses</span></h3><p class="txt">Temukan strategi tersembunyi dan wawasan yang mendorong kesuksesan trader kami<br>dalam perjalanan trading mereka bersama WeMasterTrade.</p>',

                        'ur' => '<p class="title__sub">WMT ٹریڈرز</p><h3><span>کامیاب WMT ٹریڈرز</span> سے ملیں</h3><p class="txt">ان خفیہ حکمتِ عملیوں اور بصیرتوں کو دریافت کریں جنہوں نے ہمارے ٹریڈرز کی WeMasterTrade کے ساتھ شاندار ٹریڈنگ سفر میں کامیابی کو ممکن بنایا۔</p>',

                        'pt_BR' => '<p class="title__sub">Traders WMT</p><h3>Conheça <span>Traders WMT de Sucesso</span></h3><p class="txt">Descubra as estratégias e insights ocultos que impulsionaram o sucesso de nossos traders<br>em sua notável jornada de trading com a WeMasterTrade.</p>',
                    ];

                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<p class="title__sub">WMT Traders</p><h3>Meet <span>Successful WMT Traders</span></h3><p class="txt">Discover the hidden strategies and insights that have fueled our traders\' success on their<br>remarkable trading journey with WeMasterTrade.</p>';
                ?>
                <div class="btn not_icon center">
                    <p class="tab active" data-tab="global" data-tab-group="meet-group">
                        <a><span>Global</span></a>
                    </p>
                    <p class="tab" data-tab="local" data-tab-group="meet-group">
                        <a><span id="local-tab-name">Local</span></a>
                    </p>
                </div>
            </div>
            <div class="meet__content--tab active" data-tab-content="global" data-tab-group="meet-group">
                <div id="global-container" class="meet__content">
                    <p class="loader" id="youtube-loader"></p>
                </div>
                <div id="loadmore-global" class="btn center loadmore-global">
                    <!--youtube-playlist-loadmore-->
                    <p class="loader" style="display:none !important;;"></p>
                    <p class="btn__viewmore"><span>Load more</span></p>
                </div>
            </div>
            
            <div class="meet__content--tab" data-tab-content="local" data-tab-group="meet-group">
                <div id="local-container" class="meet__content">
                    <p class="loader" id="youtube-loader-local"></p>
                </div>
                <div id="loadmore-local" class="btn center loadmore-local">
                    <p class="loader" style="display:none !important;"></p>
                    <p class="btn__viewmore"><span>Load more</span></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Meet -->
    
    
    <section class="payouts">
        <div class="container">
            <div class="payouts__content">
                <div class="title">
                    <?php
                        $texts = [
                            'th' => '<p class="title__sub">การจ่ายเงินรายวัน</p><h3>WeMasterTrade<br><span>การจ่ายเงินรายวัน</span></h3>',
                            'zh_CN' => '<p class="title__sub">每日付款</p><h3>WeMasterTrade<br><span>每日付款</span></h3>',
                            'tr_TR' => '<p class="title__sub">Günlük ödeme</p><h3>WeMasterTrade<br><span>Günlük ödeme</span></h3>',
                            'fr_FR' => '<p class="title__sub">Paiement quotidien</p><h3>WeMasterTrade<br><span>Paiement quotidien</span></h3>',
                            'es_PE' => '<p class="title__sub">Pago diario</p><h3><span>Pago Diario</span> en Nuestra Prop Firm WeMasterTrade</h3>',
                            'es_ES' => '<p class="title__sub">Pago diario</p><h3>WeMasterTrade<br><span>Pago diario</span></h3>',
                            'ru_RU' => '<p class="title__sub">Ежедневная выплата</p><h3>WeMasterTrade<br><span>Ежедневная выплата</span></h3>',
                            'ja' => '<p class="title__sub">日次ペイアウト</p><h3>WeMasterTrade<br><span>日次ペイアウト</span></h3>',
                            'ko_KR' => '<p class="title__sub">일일 지급</p><h3>WeMasterTrade<br><span>일일 지급</span></h3>',
                            'km' => '<p class="title__sub">ការទូទាត់ប្រចាំថ្ងៃ</p><h3>WeMasterTrade<br><span>ការទូទាត់ប្រចាំថ្ងៃ</span></h3>',
                            'bn_BD' => '<p class="title__sub">দৈনিক পেআউট</p><h3>WeMasterTrade<br><span>দৈনিক পেআউট</span></h3>',
                            'hk' => '<p class="title__sub">每日付款</p><h3>WeMasterTrade<br><span>每日付款</span></h3>',
                            'ir' => '<p class="title__sub">پرداخت روزانه</p><h3>WeMasterTrade<br><span>پرداخت روزانه</span></h3>',
                            'id' => '<p class="title__sub">Pembayaran harian</p><h3>WeMasterTrade<br><span>Pembayaran harian</span></h3>',
                            'ur' => '<p class="title__sub">روزانہ ادائیگی</p><h3>WeMasterTrade<br><span>روزانہ ادائیگی</span></h3>',
                            'pt_BR' => '<p class="title__sub">Pagamento diário</p><h3>WeMasterTrade<br><span>Pagamento diário</span></h3>',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<p class="title__sub">Daily Payout</p><h3>WeMasterTrade<br><span>Daily Payout</span></h3>';
                    ?>
                </div>
                <div class="desc">
                    <p class="txt"><?php
                        $texts = [
                            'th' => 'เพลิดเพลินกับการรับเงินอย่างง่ายดายเป็นรางวัลจากการเทรดจำลองของคุณ<br>เพราะคุณไม่ควรต้องรอเงินของคุณ',
                            'zh_CN' => '作为您模拟交易的奖励，享受轻松便捷的付款体验。<br>因为您不应该等待您的资金。',
                            'tr_TR' => 'Simüle edilmiş işlemlerinizin ödülü olarak sorunsuz ödemelerin keyfini çıkarın.<br>Çünkü paranız için beklememelisiniz.',
                            'fr_FR' => 'Profitez de paiements simples et sans tracas en récompense de votre trading simulé.<br>Parce que vous ne devriez pas attendre votre argent.',
                            'es_PE' => 'Recibe tu payout sin demoras con una prop firm que paga en 24–48 horas. Disfruta de retiros rápidos, procesos transparentes y recompensas reales por tu cuenta fondeada, sin complicaciones innecesarias.',
                            'es_ES' => 'Disfruta de pagos sin complicaciones como recompensa por tu trading simulado.<br>Porque no deberías tener que esperar por tu dinero.',
                            'ru_RU' => 'Наслаждайтесь быстрыми и удобными выплатами в качестве вознаграждения за вашу симулированную торговлю.<br>Потому что вам не следует ждать свои деньги.',
                            'ja' => 'シミュレート取引の報酬として、スムーズなペイアウトをお楽しみください。<br>あなたのお金を待つ必要はありません。',
                            'ko_KR' => '모의 트레이딩의 보상으로 번거로움 없는 지급을 경험하세요.<br>당신의 돈을 기다릴 필요는 없습니다.',
                            'km' => 'រីករាយជាមួយការទូទាត់ដោយងាយស្រួលជារង្វាន់សម្រាប់ការជួញដូរបែបសាកល្បងរបស់អ្នក។<br>ព្រោះអ្នកមិនគួរត្រូវរង់ចាំប្រាក់របស់អ្នកឡើយ។',
                            'bn_BD' => 'আপনার সিমুলেটেড ট্রেডিংয়ের পুরস্কার হিসেবে ঝামেলামুক্ত পেআউট উপভোগ করুন।<br>কারণ আপনার টাকার জন্য অপেক্ষা করা উচিত নয়।',
                            'hk' => '作為模擬交易的獎勵，享受輕鬆快捷的付款體驗。<br>因為你不應該等待你的資金。',
                            'ur' => 'اپنی سمولیشن ٹریڈنگ کے انعام کے طور پر بغیر کسی پریشانی کے ادائیگیوں کا لطف اٹھائیں۔<br>کیونکہ آپ کو اپنے پیسے کے لیے انتظار نہیں کرنا چاہیے۔',
                            'ir' => 'از پرداخت‌های بدون دردسر به‌عنوان پاداش معاملات شبیه‌سازی‌شده خود لذت ببرید.<br>زیرا نباید برای پول خود منتظر بمانید.',
                            'id' => 'Nikmati pembayaran tanpa hambatan sebagai hadiah dari trading simulasi Anda.<br>Karena Anda tidak seharusnya menunggu uang Anda.',
                            'pt_BR' => 'Desfrute de pagamentos sem complicações como recompensa pelo seu trading simulado.<br>Porque você não deveria esperar pelo seu dinheiro.',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Enjoy hassle-free payouts as a reward for your simulated trading.<br>Because you shouldn’t wait for your money.';
                    ?></p>
                    <?php
                        $texts = [
                            'th' => '<div class="info"><p><span>24 ชั่วโมง</span>เวลาเฉลี่ยในการจ่ายเงิน</p><p><span>1 วัน</span>การจ่ายเงินรายวัน</p><p><span>24/5</span>ฝ่ายสนับสนุนลูกค้า</p></div>',
                            'zh_CN' => '<div class="info"><p><span>24 小时</span>平均付款时间</p><p><span>1 天</span>每日付款</p><p><span>24/5</span>客户支持</p></div>',
                            'tr_TR' => '<div class="info"><p><span>24 Saat</span>Ortalama ödeme süresi</p><p><span>1 Gün</span>Günlük ödeme</p><p><span>24/5</span>Müşteri desteği</p></div>',
                            'fr_FR' => '<div class="info"><p><span>24 heures</span>Délai moyen de paiement</p><p><span>1 jour</span>Paiement quotidien</p><p><span>24/5</span>Support client</p></div>',
                            'es_PE' => '<div class="info"><p><span>24 horas</span>Tiempo promedio de pago</p><p><span>1 día</span>Pago diario</p><p><span>24/5</span>Atención al cliente</p></div>',
                            'es_ES' => '<div class="info"><p><span>24 horas</span>Tiempo promedio de pago</p><p><span>1 día</span>Pago diario</p><p><span>24/5</span>Atención al cliente</p></div>',
                            'ru_RU' => '<div class="info"><p><span>24 часов</span>Среднее время выплаты</p><p><span>1 день</span>Ежедневная выплата</p><p><span>24/5</span>Поддержка клиентов</p></div>',
                            'ja' => '<div class="info"><p><span>24時間</span>平均支払い時間</p><p><span>1日</span>日次ペイアウト</p><p><span>24/5</span>カスタマーサポート</p></div>',
                            'ko_KR' => '<div class="info"><p><span>24시간</span>평균 지급 시간</p><p><span>1일</span>일일 지급</p><p><span>24/5</span>고객 지원</p></div>',
                            'km' => '<div class="info"><p><span>24 ម៉ោង</span>ពេលវេលាទូទាត់មធ្យម</p><p><span>1 ថ្ងៃ</span>ការទូទាត់ប្រចាំថ្ងៃ</p><p><span>24/5</span>ការគាំទ្រអតិថិជន</p></div>',
                            'bn_BD' => '<div class="info"><p><span>24 ঘণ্টা</span>গড় পেআউট সময়</p><p><span>1 দিন</span>দৈনিক পেআউট</p><p><span>24/5</span>কাস্টমার সাপোর্ট</p></div>',
                            'hk' => '<div class="info"><p><span>24 小時</span>平均付款時間</p><p><span>1 天</span>每日付款</p><p><span>24/5</span>客戶支援</p></div>',
                            'ir' => '<div class="info"><p><span>24 ساعت</span>میانگین زمان پرداخت</p><p><span>1 روز</span>پرداخت روزانه</p><p><span>24/5</span>پشتیبانی مشتریان</p></div>',
                            'ur' => '<div class="info"><p><span>24h</span>اوسط ادائیگی کا وقت</p><p><span>1d</span>روزانہ ادائیگی</p><p><span>24/5</span>کسٹمر سپورٹ</p></div>',
                            'id' => '<div class="info"><p><span>24 Jam</span>Rata-rata waktu pembayaran</p><p><span>1 Hari</span>Pembayaran harian</p><p><span>24/5</span>Dukungan pelanggan</p></div>',
                            'pt_BR' => '<div class="info"><p><span>24 horas</span>Tempo médio de pagamento</p><p><span>1 dia</span>Pagamento diário</p><p><span>24/05</span>Suporte ao cliente</p></div>',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<div class="info"><p><span>24h</span>Avg Payout Time</p><p><span>1d</span>Daily Payout</p><p><span>24/5</span>Customer Support</p></div>';
                    ?>
                </div>
            </div>
            <div id="payouts__chart" class="payouts__chart">
                <div class="item">
                    <h4>Step-by-Step Guide</h4>
                    <div class="desc"><p><?php
                        $texts = [
                            'th' => 'ค้นพบว่าเทคโนโลยีบล็อกเชนช่วยรับรองความถูกต้องของการจ่ายเงินได้อย่างไร และคุณสามารถตรวจสอบการถอนเงินทุกครั้งได้อย่างอิสระด้วยความมั่นใจ',
                            'zh_CN' => '了解区块链如何确保付款的完整性，以及您如何能够独立验证每一次提现，安心无忧。',
                            'tr_TR' => 'Blockchain teknolojisinin ödeme bütünlüğünü nasıl sağladığını ve her para çekme işlemini nasıl bağımsız olarak güvenle doğrulayabileceğinizi keşfedin.',
                            'fr_FR' => 'Découvrez comment la blockchain garantit l’intégrité des paiements et comment vous pouvez vérifier chaque retrait de manière indépendante en toute confiance.',
                            'es_PE' => 'Descubre cómo la tecnología blockchain garantiza la integridad de los pagos y cómo puedes verificar cada retiro de forma independiente con total confianza.',
                            'es_ES' => 'Descubre cómo la tecnología blockchain garantiza la integridad de los pagos y cómo puedes verificar cada retiro de forma independiente con total confianza.',
                            'ru_RU' => 'Узнайте, как блокчейн обеспечивает целостность выплат и как вы можете самостоятельно проверять каждое снятие средств с полной уверенностью.',
                            'ja' => 'ブロックチェーンがペイアウトの透明性と信頼性をどのように確保するのか、そしてすべての出金を自分で確認できる仕組みをご覧ください。',
                            'ko_KR' => '블록체인이 지급의 무결성을 어떻게 보장하는지, 그리고 모든 출금을 스스로 검증할 수 있는 방법을 알아보세요.',
                            'km' => 'ស្វែងយល់ពីរបៀបដែលប្លុកឆេនធានាភាពត្រឹមត្រូវនៃការទូទាត់ និងរបៀបដែលអ្នកអាចផ្ទៀងផ្ទាត់ការដកប្រាក់រាល់លើកដោយខ្លួនឯងដោយមានទំនុកចិត្ត។',
                            'bn_BD' => 'জানুন কীভাবে ব্লকচেইন পেআউটের অখণ্ডতা নিশ্চিত করে এবং কীভাবে আপনি আত্মবিশ্বাসের সাথে প্রতিটি উত্তোলন স্বাধীনভাবে যাচাই করতে পারেন।',
                            'hk' => '了解區塊鏈如何確保付款的完整性，以及您如何能夠獨立驗證每一次提款，安心可靠。',
                            'ir' => 'کشف کنید چگونه بلاکچین یکپارچگی پرداخت‌ها را تضمین می‌کند و چگونه می‌توانید هر برداشت را به‌صورت مستقل و با اطمینان تأیید کنید.',
                            'ur' => 'جانیے کہ بلاک چین کس طرح ادائیگی کی سالمیت کو یقینی بناتا ہے اور آپ ہر رقم نکالنے کی آزادانہ طور پر اعتماد کے ساتھ تصدیق کیسے کر سکتے ہیں۔',
                            'id' => 'Temukan bagaimana blockchain memastikan integritas pembayaran dan bagaimana Anda dapat memverifikasi setiap penarikan secara mandiri dengan penuh keyakinan.',
                            'pt_BR' => 'Descubra como o blockchain garante a integridade dos pagamentos e como você pode verificar cada saque de forma independente com total confiança.',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Discover how blockchain ensures payout integrity and how you can independently verify every withdrawal with confidence.';
                    ?></p></div>
                    <div class="video">
                        <p class="certificates__video lightbox-item" data-youtube-id="DU9er9bdItU"><img src="/wp-content/themes/flatsome/uk-template/images/payouts_chart_img3n.png" width="583" height="821" alt="Step-by-Step Guide"></p>
                    </div>
                </div>
                <div class="item">
                    <h4>
                        <?php
                            $texts = [
                                'th' => 'ยอดการจ่ายทั้งหมด',
                                'zh_CN' => '总付款',
                                'tr_TR' => 'Toplam Ödemeler',
                                'fr_FR' => 'Paiements totaux',
                                'es_PE' => 'Pagos totales',
                                'es_ES' => 'Pagos totales',
                                'ru_RU' => 'Общие выплаты',
                                'ja' => '総ペイアウト',
                                'ko_KR' => '총 지급액',
                                'km' => 'ការទូទាត់សរុប',
                                'bn_BD' => 'মোট পেআউট',
                                'hk' => '總付款',
                                'ir' => 'مجموع پرداخت‌ها',
                                'id' => 'Total Pembayaran',
                                'ur' => 'کل ادائیگیاں',
                                'pt_BR' => 'Pagamentos totais',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Total Payouts';
                        ?>
                    </h4>
                    <div class="payouts__chart--tabs">
                        <p class="tab active" data-filter="all">
                            <?php
                                $texts = [
                                    'th' => 'ทั้งหมด',
                                    'zh_CN' => '全部',
                                    'tr_TR' => 'Tümü',
                                    'fr_FR' => 'Tous',
                                    'es_ES' => 'Todos',
                                    'ru_RU' => 'Все',
                                    'ja' => 'すべて',
                                    'ko_KR' => '전체',
                                    'km' => 'ទាំងអស់',
                                    'bn_BD' => 'সব',
                                    'hk' => '全部',
                                    'ir' => 'همه',
                                    'id' => 'Semua',
                                    'ur' => 'سب',
                                    'pt_BR' => 'Todos',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'All';
                            ?>
                        </p>
                        <p class="tab" data-filter="7d">
                            <?php
                                $texts = [
                                    'th' => '7 วันที่ผ่านมา',
                                    'zh_CN' => '过去7天',
                                    'tr_TR' => 'Son 7 gün',
                                    'fr_FR' => '7 derniers jours',
                                    'es_ES' => 'Últimos 7 días',
                                    'ru_RU' => 'Последние 7 дней',
                                    'ja' => '過去7日間',
                                    'ko_KR' => '최근 7일',
                                    'km' => '7 ថ្ងៃចុងក្រោយ',
                                    'bn_BD' => 'গত ৭ দিন',
                                    'hk' => '過去7天',
                                    'ir' => '7 روز گذشته',
                                    'id' => '7 hari terakhir',
                                    'ur' => 'گزشتہ 7 دن',
                                    'pt_BR' => 'Últimos 7 dias',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Last 7 days';
                            ?>
                        </p>
                        <p class="tab" data-filter="30d">
                            <?php
                                $texts = [
                                    'th' => '30 วันที่ผ่านมา',
                                    'zh_CN' => '过去30天',
                                    'tr_TR' => 'Son 30 gün',
                                    'fr_FR' => '30 derniers jours',
                                    'es_ES' => 'Últimos 30 días',
                                    'ru_RU' => 'Последние 30 дней',
                                    'ja' => '過去30日間',
                                    'ko_KR' => '최근 30일',
                                    'km' => '30 ថ្ងៃចុងក្រោយ',
                                    'bn_BD' => 'গত ৩০ দিন',
                                    'hk' => '過去30天',
                                    'ir' => '30 روز گذشته',
                                    'id' => '30 hari terakhir',
                                    'ur' => 'گزشتہ 30 دن',
                                    'pt_BR' => 'Últimos 30 dias',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Last 30 days';
                            ?>
                        </p>
                        <p class="tab" data-filter="12m">
                            <?php
                                $texts = [
                                    'th' => '365 วันที่ผ่านมา',
                                    'zh_CN' => '过去365天',
                                    'tr_TR' => 'Son 365 gün',
                                    'fr_FR' => '365 derniers jours',
                                    'es_ES' => 'Últimos 365 días',
                                    'ru_RU' => 'Последние 365 дней',
                                    'ja' => '過去365日間',
                                    'ko_KR' => '최근 365일',
                                    'km' => '365 ថ្ងៃចុងក្រោយ',
                                    'bn_BD' => 'গত ৩৬৫ দিন',
                                    'hk' => '過去365天',
                                    'ir' => '365 روز گذشته',
                                    'id' => '365 hari terakhir',
                                    'ur' => 'گزشتہ 365 دن',
                                    'pt_BR' => 'Últimos 365 dias',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Last 365 days';
                            ?>
                        </p>
                    </div>
                    
                    <!-- Tab 1 -->
                    <div class="payouts__chart--js active">
                        <p class="loader" id="chartLoader"></p>
                        <div class="chart-content" id="chartContent" style="display:none;">
                            <div class="chart">
                                <canvas id="myChart" height="400"></canvas>
                                <p class="chart__total">
                                    <span class="txt">
                                        <?php
                                            $texts = [
                                                'th' => 'ยอดการจ่ายทั้งหมด',
                                                'zh_CN' => '总付款',
                                                'tr_TR' => 'Toplam Ödemeler',
                                                'fr_FR' => 'Paiements totaux',
                                                'es_ES' => 'Pagos totales',
                                                'ru_RU' => 'Общие выплаты',
                                                'ja' => '総ペイアウト',
                                                'ko_KR' => '총 지급액',
                                                'km' => 'ការទូទាត់សរុប',
                                                'bn_BD' => 'মোট পেআউট',
                                                'hk' => '總付款',
                                                'ir' => 'مجموع پرداخت‌ها',
                                                'id' => 'Total Pembayaran',
                                                'ur' => 'کل ادائیگی',
                                                'pt_BR' => 'Pagamentos totais',
                                            ];
                                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Total payout';
                                        ?>
                                    </span>
                                    <span id="totalPayout">$0</span>
                                </p>
                            </div>
                            <div class="payouts__chart--table">
                                <div class="table__scroll">
                                    <table>
                                        <thead>
                                            <tr>
                                                <?php
                                                    $texts = [
                                                        'th' => '<th>ภูมิภาค</th><th>จำนวนเงิน</th><th>สัดส่วน</th><th>จำนวน</th>',
                                                        'zh_CN' => '<th>地区</th><th>金额</th><th>占比</th><th>数量</th>',
                                                        'tr_TR' => '<th>Bölge</th><th>Tutar</th><th>Pay</th><th>Adet</th>',
                                                        'fr_FR' => '<th>Région</th><th>Montant</th><th>Part</th><th>Nombre</th>',
                                                        'es_ES' => '<th>Región</th><th>Cantidad</th><th>Participación</th><th>Cantidad</th>',
                                                        'ru_RU' => '<th>Регион</th><th>Сумма</th><th>Доля</th><th>Количество</th>',
                                                        'ja' => '<th>地域</th><th>金額</th><th>割合</th><th>件数</th>',
                                                        'ko_KR' => '<th>지역</th><th>금액</th><th>비율</th><th>건수</th>',
                                                        'km' => '<th>តំបន់</th><th>ចំនួនប្រាក់</th><th>ភាគរយ</th><th>ចំនួន</th>',
                                                        'bn_BD' => '<th>অঞ্চল</th><th>পরিমাণ</th><th>শেয়ার</th><th>সংখ্যা</th>',
                                                        'hk' => '<th>地區</th><th>金額</th><th>佔比</th><th>數量</th>',
                                                        'ir' => '<th>منطقه</th><th>مقدار</th><th>سهم</th><th>تعداد</th>',
                                                        'id' => '<th>Wilayah</th><th>Jumlah</th><th>Porsi</th><th>Jumlah</th>',
                                                        'ur' => '<th>علاقہ</th><th>رقم</th><th>حصہ</th><th>تعداد</th>',
                                                        'pt_BR' => '<th>Região</th><th>Valor</th><th>Participação</th><th>Quantidade</th>',
                                                    ];
                                                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<th>Region</th><th>Amount</th><th>Share</th><th>Count</th>';
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody id="payoutTableBody"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="payout-table-section" class="payouts">
                <div class="containerr">
                    <div class="wmt-table table__frame payouts__daily">
                        <div class="head">
                            <h4>
                                <?php
                                    $texts = [
                                        'th' => 'การจ่ายเงินรายวันสูงสุด',
                                        'zh_CN' => '每日最高付款',
                                        'tr_TR' => 'Günlük En Yüksek Ödeme',
                                        'fr_FR' => 'Meilleur paiement quotidien',
                                        'es_ES' => 'Mayor pago diario',
                                        'ru_RU' => 'Топ ежедневных выплат',
                                        'ja' => '日次トップペイアウト',
                                        'ko_KR' => '일일 최고 지급',
                                        'km' => 'ការទូទាត់ប្រចាំថ្ងៃខ្ពស់បំផុត',
                                        'bn_BD' => 'সর্বোচ্চ দৈনিক পেআউট',
                                        'hk' => '每日最高付款',
                                        'ir' => 'بیشترین پرداخت روزانه',
                                        'id' => 'Pembayaran Harian Tertinggi',
                                        'ur' => 'ٹاپ ڈیلی ادائیگی',
                                        'pt_BR' => 'Maior pagamento diário',
                                    ];
                                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Top Daily Payout';
                                ?>
                            </h4>
                            <div class="inputs custom_inputs">
                                <div class="search"><input type="text" placeholder="<?php
                                    $texts = [
                                        'th' => 'ค้นหา...',
                                        'zh_CN' => '搜索...',
                                        'tr_TR' => 'Ara...',
                                        'fr_FR' => 'Rechercher...',
                                        'es_ES' => 'Buscar...',
                                        'ru_RU' => 'Поиск...',
                                        'ja' => '検索...',
                                        'ko_KR' => '검색...',
                                        'km' => 'ស្វែងរក...',
                                        'bn_BD' => 'অনুসন্ধান...',
                                        'hk' => '搜尋...',
                                        'ir' => 'جستجو...',
                                        'ur' => 'تلاش کریں (نام)...',
                                        'id' => 'Cari...',
                                        'pt_BR' => 'Pesquisar...',
                                    ];
                                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Search (Name)...';
                                ?>"></div>
                            </div>
                        </div>
                        <div class="table__content">
                            <div class="table__scroll">
                                <table>
                                    <thead>
                                        <tr>
                                            <?php
                                                $texts = [
                                                    'th' => '<th>ลำดับ</th>
                                                            <th>ชื่อ</th>
                                                            <th>การจ่ายเงิน</th>
                                                            <th>ขนาดบัญชี</th>
                                                            <th>ประเทศ</th>
                                                            <th>เวลา</th>
                                                            <th>แฮชธุรกรรม</th>
                                                            <th>ใบรับรอง</th>',

                                                    'zh_CN' => '<th>序号</th>
                                                                <th>姓名</th>
                                                                <th>付款</th>
                                                                <th>账户规模</th>
                                                                <th>国家</th>
                                                                <th>时间</th>
                                                                <th>交易哈希</th>
                                                                <th>认证</th>',

                                                    'tr_TR' => '<th>No</th>
                                                                <th>İsim</th>
                                                                <th>Ödeme</th>
                                                                <th>Hesap Büyüklüğü</th>
                                                                <th>Ülke</th>
                                                                <th>Zaman</th>
                                                                <th>İşlem Hash</th>
                                                                <th>Sertifika</th>',

                                                    'fr_FR' => '<th>N°</th>
                                                                <th>Nom</th>
                                                                <th>Paiement</th>
                                                                <th>Taille du compte</th>
                                                                <th>Pays</th>
                                                                <th>Horodatage</th>
                                                                <th>Hash de transaction</th>
                                                                <th>Certification</th>',

                                                    'es_PE' => '<th>N°</th>
                                                                <th>Nombre</th>
                                                                <th>Pago</th>
                                                                <th>Tamaño de cuenta</th>
                                                                <th>País</th>
                                                                <th>Fecha/Hora</th>
                                                                <th>Hash de transacción</th>
                                                                <th>Certificación</th>',

                                                    'es_ES' => '<th>N°</th>
                                                                <th>Nombre</th>
                                                                <th>Pago</th>
                                                                <th>Tamaño de cuenta</th>
                                                                <th>País</th>
                                                                <th>Fecha/Hora</th>
                                                                <th>Hash de transacción</th>
                                                                <th>Certificación</th>',

                                                    'ru_RU' => '<th>№</th>
                                                                <th>Имя</th>
                                                                <th>Выплата</th>
                                                                <th>Размер счета</th>
                                                                <th>Страна</th>
                                                                <th>Время</th>
                                                                <th>Хеш транзакции</th>
                                                                <th>Сертификация</th>',

                                                    'ja' => '<th>No</th>
                                                            <th>名前</th>
                                                            <th>ペイアウト</th>
                                                            <th>口座サイズ</th>
                                                            <th>国</th>
                                                            <th>時間</th>
                                                            <th>トランザクションハッシュ</th>
                                                            <th>認証</th>',

                                                    'ko_KR' => '<th>No</th>
                                                                <th>이름</th>
                                                                <th>지급</th>
                                                                <th>계좌 규모</th>
                                                                <th>국가</th>
                                                                <th>시간</th>
                                                                <th>트랜잭션 해시</th>
                                                                <th>인증</th>',

                                                    'km' => '<th>ល.រ</th>
                                                            <th>ឈ្មោះ</th>
                                                            <th>ការទូទាត់</th>
                                                            <th>ទំហំគណនី</th>
                                                            <th>ប្រទេស</th>
                                                            <th>ពេលវេលា</th>
                                                            <th>Hash ប្រតិបត្តិការ</th>
                                                            <th>វិញ្ញាបនបត្រ</th>',

                                                    'bn_BD' => '<th>নং</th>
                                                                <th>নাম</th>
                                                                <th>পেআউট</th>
                                                                <th>অ্যাকাউন্ট সাইজ</th>
                                                                <th>দেশ</th>
                                                                <th>সময়</th>
                                                                <th>ট্রানজ্যাকশন হ্যাশ</th>
                                                                <th>সার্টিফিকেশন</th>',

                                                    'hk' => '<th>序號</th>
                                                            <th>姓名</th>
                                                            <th>付款</th>
                                                            <th>帳戶規模</th>
                                                            <th>國家</th>
                                                            <th>時間</th>
                                                            <th>交易哈希</th>
                                                            <th>認證</th>',

                                                    'ir' => '<th>ردیف</th>
                                                            <th>نام</th>
                                                            <th>پرداخت</th>
                                                            <th>اندازه حساب</th>
                                                            <th>کشور</th>
                                                            <th>زمان</th>
                                                            <th>هش تراکنش</th>
                                                            <th>گواهی</th>',

                                                    'id' => '<th>No</th>
                                                            <th>Nama</th>
                                                            <th>Pembayaran</th>
                                                            <th>Ukuran Akun</th>
                                                            <th>Negara</th>
                                                            <th>Waktu</th>
                                                            <th>Hash Transaksi</th>
                                                            <th>Sertifikasi</th>',

                                                    'ur' => '<th>نمبر</th><th>نام</th><th>ادائیگی</th><th>اکاؤنٹ سائز</th><th>ملک</th><th>ٹائم اسٹیمپ</th><th>ٹرانزیکشن ہیش</th><th>سرٹیفکیشن</th>',

                                                    'pt_BR' => '<th>Nº</th>
                                                                <th>Nome</th>
                                                                <th>Pagamento</th>
                                                                <th>Tamanho da conta</th>
                                                                <th>País</th>
                                                                <th>Data/Hora</th>
                                                                <th>Hash da transação</th>
                                                                <th>Certificação</th>',
                                                ];
                                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<th>N.O</th><th>Name</th><th>Payout</th><th>Account Size</th><th>Country</th><th>Timestamp</th><th>Transaction Hash</th><th>Certification</th>';
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                            <div class="blog__pagination">
                                <p class="txt">
                                    <?php
                                        $texts = [
                                            'th' => 'แสดง 1 ถึง 10 จากทั้งหมด 1909 รายการ',
                                            'zh_CN' => '显示第 1 到 10 条，共 1909 条',
                                            'tr_TR' => '1909 kaydın 1 ila 10 arası gösteriliyor',
                                            'fr_FR' => 'Affichage de 1 à 10 sur 1909 entrées',
                                            'es_PE' => 'Mostrando del 1 al 10 de 1909 registros',
                                            'es_ES' => 'Mostrando del 1 al 10 de 1909 registros',
                                            'ru_RU' => 'Показаны записи с 1 по 10 из 1909',
                                            'ja' => '1909件中 1 から 10 を表示',
                                            'ko_KR' => '총 1909개 중 1부터 10까지 표시',
                                            'km' => 'បង្ហាញពី 1 ដល់ 10 ក្នុងចំណោម 1909 ធាតុ',
                                            'bn_BD' => '১৯০৯ এন্ট্রির মধ্যে ১ থেকে ১০ দেখানো হচ্ছে',
                                            'hk' => '顯示第 1 至 10 條，共 1909 條',
                                            'ir' => 'نمایش 1 تا 10 از مجموع 1909 مورد',
                                            'ur' => '1 سے 10 تک 1909 اندراجات دکھائے جا رہے ہیں',
                                            'id' => 'Menampilkan 1 hingga 10 dari 1909 entri',
                                            'pt_BR' => 'Mostrando de 1 a 10 de 1909 registros',
                                        ];
                                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Showing 1 to 10 of 1909 entries';
                                    ?>
                                </p>
                                <ul class="pagination"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
<script>
    document.addEventListener("DOMContentLoaded", async function () {
        let chart;
        let chartCache = {};
        let currentRange = "all";
        const ranges = ["all","7d","30d","12m"];
        // init chart
        chart = new Chart(document.getElementById("myChart"), {
            type: "doughnut",
            data: {
                labels: [],
                datasets: [{
                    data: [],
                    backgroundColor:[
                        '#F6CC23',
                        '#FF935E',
                        '#ED5128',
                        '#654FC5',
                        '#3984FD',
                        '#257471',
                        '#63B96E'
                    ],
                    borderRadius:10,
                    spacing:1
                }]
            },
            options:{
                cutout:"70%",
                plugins:{
                    legend:{ display:false },
                    tooltip:{
                        callbacks:{
                            label:function(context){
                
                                const range = currentRange;
                                const data = chartCache[range].items[context.dataIndex];
                
                                const amount = Number(data.payoutAmount).toLocaleString('en-US', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });
                                return [
                                    `Region: ${data.continentName}`,
                                    `Amount: $${amount}`,
                                    `Share: ${data.payoutPercentage}%`,
                                    `Count: ${data.payoutCount}`
                                ];
                            }
                        }
                    }
                }
            }
        });
        // fetch API
        async function fetchRange(range){
            const res = await fetch(`/wp-json/custom/v1/continent-payout?filterRange=${range}`);
            const result = await res.json();
            chartCache[range] = {
                items: result.data.items,
                total: result.data.totalPayoutAmount
            };
        }
        // load all API
        await Promise.all(ranges.map(fetchRange));
        document.getElementById("chartLoader").style.display = "none";
        document.getElementById("chartContent").style.display = "block";
    
        // render chart
        function renderChart(range){
            const data = chartCache[range].items;
            const labels = data.map(i => i.continentName);
            const values = data.map(i => i.payoutPercentage);
            chart.data.labels = labels;
            chart.data.datasets[0].data = values;
            chart.update();
        }
        
        // render table
        function renderTable(range){
            const data = chartCache[range].items;
            const tbody = document.getElementById("payoutTableBody");
            tbody.innerHTML = "";
            data.forEach((item,index)=>{
                const row = `
                <tr>
                    <td>
                        <p class="region">
                            <span class="clr${index+1}"></span>
                            ${item.continentName}
                        </p>
                    </td>
                    <td>
                        <p>$${Number(item.payoutAmount).toLocaleString()}</p>
                    </td>
                    <td>
                        <p>${item.payoutPercentage}%</p>
                    </td>
                    <td>
                        <p>${item.payoutCount}</p>
                    </td>
                </tr>
                `;
                tbody.insertAdjacentHTML("beforeend", row);
            });
        }
        
        // total payout
        function updateTotal(range){
            const total = chartCache[range].total;
            document.getElementById("totalPayout").innerText = "$" + Number(total).toLocaleString();
        }
        
        // render dashboard
        function renderDashboard(range){
            renderChart(range);
            renderTable(range);
            updateTotal(range);
        }
        
        // default load
        renderDashboard("all");

        jQuery("[data-filter]").on("click", function(){
            const range = jQuery(this).data("filter");
            if(!range || !chartCache[range]) return;
            currentRange = range;
            jQuery("[data-filter].active").removeClass("active");
            jQuery(this).addClass("active");
            renderDashboard(range);
        
        });
        
    });
</script>

<script>
document.addEventListener("DOMContentLoaded", async () => {

    const firstLoad = 12;
    const step = 8;

    const lang = document.documentElement.lang.slice(0,2).toLowerCase();
    console.log("LANG:", lang);

    /* PLAYLIST REGION */

    const playlists = {
        ja: { name: "Japan", id: "PLASM7soIohx36ygEYk7nnwyCbysjh05kY" },
        bn: { name: "Bangladesh", id: "PLASM7soIohx05fwuFmJ_BinEgnTq1DdvY" },
        in: { name: "India", id: "PLASM7soIohx073JwgZzfGKpeP7jOVG2__" },
        id: { name: "Indonesia", id: "PLASM7soIohx18y0fiUfTneI_FzACUjd_-" },
        th: { name: "Thailand", id: "PLASM7soIohx3Ws6rlKIQxf4K7U1D9n3fc" },
        ms: { name: "Malaysia", id: "PLASM7soIohx1ciRRoPGI18rd7olszjdsI" },
        uz: { name: "Uzbekistan", id: "PLASM7soIohx3k2dfsSKadUPCyedR3Vj-u" },
        es: { name: "LATAM", id: "PLASM7soIohx2LEmwQSwb6IsnCPzBSJyHk" },
        pt: { name: "LATAM", id: "PLASM7soIohx2LEmwQSwb6IsnCPzBSJyHk" }
    };

    /* FUNCTION LOAD PLAYLIST */

    async function initPlaylist(containerId, loaderId, loadmoreId, playlistID, showLogo = false){

        const container = document.getElementById(containerId);
        const loader = document.getElementById(loaderId);
        const loadMoreBtn = document.getElementById(loadmoreId);

        if(!container || !loader || !loadMoreBtn) return;

        const btnLoader = loadMoreBtn.querySelector(".loader");
        const btnText = loadMoreBtn.querySelector(".btn__viewmore");

        let currentIndex = 0;
        let videos = [];

        const res = await fetch(
            `/wp-json/custom/v1/youtube-playlist${playlistID ? `?playlist=${playlistID}` : ""}`
        );

        videos = await res.json();

        loader.style.setProperty("display","none","important");

        function render(count){

            const slice = videos.slice(currentIndex, currentIndex + count);

            slice.forEach(video => {

                const html = `
                <div class="item lightbox-item" data-youtube-id="${video.videoId}">
                    
                    <div class="meet__video">
                        <img loading="lazy" src="${video.thumbnail}" alt="${video.title}">
                    </div>

                    <div class="meet__title">

                        ${showLogo ? `
                        <img src="/wp-content/themes/flatsome/uk-template/images/meet_wmt_logo.png">
                        ` : ""}

                        <h4>${video.title}</h4>

                    </div>

                </div>
                `;

                container.insertAdjacentHTML("beforeend", html);

            });

            currentIndex += count;

            if(currentIndex >= videos.length){
                loadMoreBtn.style.setProperty("display","none","important");
            }
        }

        render(firstLoad);

        loadMoreBtn.addEventListener("click", () => {

            btnText.style.setProperty("display","none","important");
            btnLoader.style.display = "block";

            setTimeout(()=>{

                render(step);

                btnLoader.style.setProperty("display","none","important");

                if(currentIndex < videos.length){
                    btnText.style.display = "flex";
                }

            },200);

        });

    }

    /* GLOBAL PLAYLIST */

    initPlaylist(
        "global-container",
        "youtube-loader",
        "loadmore-global",
        "",
        true
    );

    /* LOCAL PLAYLIST */

    const playlistLocal = playlists[lang];

    const tabWrapper = document.querySelector(".btn.not_icon.center");
    const localTab = document.querySelector('[data-tab="local"]');
    const localTabName = localTab ? localTab.querySelector("span") : null;
    const localSection = document.querySelector('[data-tab-content="local"]');

    if(!playlistLocal){

        /* không có playlist → ẩn tab luôn */

        if(tabWrapper) tabWrapper.style.display = "none";
        if(localSection) localSection.style.display = "none";

    } else {

        /* đổi tên tab */

        if(localTabName){
            localTabName.textContent = playlistLocal.name;
        }

        /* load playlist local */

        initPlaylist(
            "local-container",
            "youtube-loader-local",
            "loadmore-local",
            playlistLocal.id,
            false
        );

    }

});
</script>