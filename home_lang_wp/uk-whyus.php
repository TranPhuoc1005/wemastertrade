<!-- Why Us -->
<section class="whyus">
    <div class="container">
        <div class="title">
            <p class="title__sub">
                <?php
                    $locale = get_locale();
                    $texts = [
                        'th' => 'ทำไมต้องเลือกเรา',
                        'zh_CN' => '为什么选择我们',
                        'tr_TR' => 'Neden Biz',
                        'fr_FR' => 'Pourquoi nous',
                        'es_PE' => 'Por qué nosotros',
                        'es_ES' => 'Por qué nosotros',
                        'ru_RU' => 'Почему мы',
                        'ja' => 'なぜ私たちなのか',
                        'ko_KR' => '왜 우리인가',
                        'km' => 'ហេតុអ្វីជ្រើសរើសយើង',
                        'bn_BD' => 'কেন আমাদের',
                        'ph' => 'Bakit Kami',
                        'hk' => '為什麼選擇我們',
                        'ir' => 'چرا ما',
                        'id' => 'Mengapa Kami',
                        'pt_BR' => 'Por que nós',
                        'uz_UZ' => 'Nega aynan biz',
                        'ur' => 'ہمیں کیوں منتخب کریں',
                    ];
                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Why Us';
                ?>
            </p>
            <?php
                
                $texts = [
                    'th' => '<h3><span>ทำไมต้องใช้เงินทุน WMT </span><br class="pc">แทนที่จะเป็นเงินของคุณเอง</h3>',
                    'zh_CN' => '<h3><span>为何使用 WMT 资本 </span><br class="pc">而不是你自己的钱</h3>',
                    'tr_TR' => '<h3><span>Neden WMT Capital\'i Kullanmalı? </span><br class="pc">Kendi Paranız Yerine</h3>',
                    'fr_FR' => '<h3><span>Pourquoi utiliser WMT Capital </span><br class="pc">Au lieu de votre propre argent</h3>',
                    'es_MX' => '<h3><span>¿Por qué elegir WeMasterTrade? </span><br class="pc">Plataforma de trading con capital para operar, sin arriesgar tus ahorros</h3>',
                    'es_PE' => '<h2 class="h3"><span>¿Por qué elegir WeMasterTrade para tu Prop Trading en Perú? </span><br class="pc">Plataforma de trading con capital para operar sin arriesgar tu capital</h3>',
                    'es_ES' => '<h3><span>Por qué utilizar WMT Capital </span><br class="pc">En lugar de tu propio dinero</h3>',
                    'ru_RU' => '<h3><span>Почему стоит использовать </span><br class="pc">вместо собственных денег</h3>',
                    'ja' => '<h2 class="h3">日本のプロップトレーディングに<br class="pc"><span>WeMasterTradeを選ぶ理由</span></h2><p>自己資金を使わずにプロップファームの資金で取引できるプラットフォーム</p>',
                    'ko_KR' => '<h3><span>왜 WMT 자금을 써야 할까요? </span><br class="pc">직접 투자보다 더 안전하고 똑똑한 선택</h3>',
                    'km' => '<h3><span>ហេតុអ្វីត្រូវប្រើដើមទុន WMT </span><br class="pc">ជំនួសឱ្យលុយផ្ទាល់ខ្លួនរបស់អ្នក</h3>',
                    'bn_BD' => '<h3><span>নিজস্ব ট্রেডিং অ্যাকাউন্টের পরিবর্তে কেন WMT </span><br class="pc">ক্যাপিটাল বাংলাদেশী ট্রেডারদের পছন্দ</h3>',
                    'hk' => '<h3><span>為何選擇 WMT資金</span><br class="pc">而非自有資金</h3>',
                    'ir' => '<h3><span>را به جای پول خودتان از WMT Capital </span><br class="pc">استفاده نمکنید؟</h3>',
                    'id' => '<h3><span>Mengapa Menggunakan Modal WMT, </span><br class="pc">Bukan Modal Sendiri?</h3>',
                    'pt_BR' => '<h3><span>Por que Usar o Capital da WMT </span><br class="pc">em Vez do Seu Próprio Dinheiro</h3>',
                    'uz_UZ' => '<h3><span>Nima uchun o‘z pulingizdan ko‘ra </span><br class="pc">WMT kapitalidan foydalanish kerak?</h3>',
                    'ur' => '<h3><span>کیوں WMT Capital</span><br class="pc"> استعمال کریں بجائے اپنے پیسے کے؟</h3>',
                ];
                $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h3><span>Why Use WMT Capital </span><br class="pc">Instead of Your Own Money</h3>';
            ?>			
        </div>
        <div class="whyus__content">
            <div class="whyus__list">
                <div class="whyus__item">
                    <p class="icon"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/whyus_ic1.png" width="90" height="91" alt="Save"></p>
                    <div class="cnt">
                        <h3 class="h4">							
                            <?php
                                
                                $texts = [
                                    'th' => 'ประหยัด',
                                    'zh_CN' => '节省',
                                    'tr_TR' => 'Kaydetmek',
                                    'fr_FR' => 'Sauvegarder',
                                    'es_MX' => 'Acceso inmediato',
                                    'es_PE' => 'Acceso inmediato',
                                    'es_ES' => 'Ahorrar',
                                    'ru_RU' => 'Экономия',
                                    'ja' => '即時資金提供',
                                    'ko_KR' => '절약하세요',
                                    'km' => 'សន្សំពេលវេលា',
                                    'bn_BD' => 'জমান',
                                    'ph' => 'Cost Savings',
                                    'in' => 'Time and Capital',
                                    'hk' => '節省時間',
                                    'ir' => 'خیره کنید',
                                    'id' => 'Hemat Waktu dan Biaya',
                                    'pt_BR' => 'Economia',
                                    'uz_UZ' => 'Jamg‘arma',
                                    'ur' => 'بچت ',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Save';
                            ?>
                        </h3>
                        <div class="desc">
                            <p>
                                <?php
                                    $locale = get_locale();
                                    $texts = [
                                        'th' => 'หากต้องใช้เวลาอย่างน้อย 12 เดือนในการเก็บเงิน $10,000 เพื่อเริ่มเทรด ทำไมไม่เข้าร่วมกับ WMT ที่เราสามารถจัดสรรเงินทุนให้คุณได้ทันทีตั้งแต่ $10,000 จนถึง $200,000',
                                        
                                        'zh_CN' => '如果您至少需要12个月才能存到1万美元用于交易，为什么不加入WMT，我们可以立即为您提供从10,000美元到200,000美元的资金',
                                        
                                        'tr_TR' => 'Bir işlem hesabı için en az 10.000$ biriktirmenin 12 ay sürdüğünü düşünürsek, neden WMT’ye katılmıyorsunuz? Size anında 10.000$’dan 200.000$’a kadar sermaye sağlıyoruz',
                                        
                                        'fr_FR' => 'S’il vous faut au moins 12 mois pour économiser 10 000 $, pourquoi ne pas rejoindre WMT où nous pouvons vous fournir instantanément des fonds de 10 000 $ jusqu’à 200 000 $',
                                        
                                        'es_ES' => 'Si te toma al menos 12 meses ahorrar $10,000 para operar, ¿por qué no unirte a WMT donde te financiamos al instante desde $10,000 hasta $200,000',
                                        
                                        'ru_RU' => 'Если вам требуется не менее 12 месяцев, чтобы накопить $10,000 для торговли, почему бы не присоединиться к WMT, где мы можем предоставить вам финансирование мгновенно от $10,000 до $200,000',
                                        
                                        'ja' => '日本で外国為替やデリバティブ取引のために$10,000を貯めるには1年以上かかる場合があります。WeMasterTradeなら$10,000から最大$200,000まで即時にプロップトレーディング資金を提供します。日本最速のファンデッドアカウント取得を実現します。',
                                        
                                        'ko_KR' => '트레이딩 자금 $10,000을 모으는 데 최소 12개월이 걸린다면, 왜 WMT에 참여하지 않으시나요? 우리는 $10,000부터 최대 $200,000까지 즉시 자금을 지원합니다',
                                        
                                        'km' => 'បើអ្នកត្រូវការយ៉ាងហោចណាស់ 12 ខែដើម្បីសន្សំបាន $10,000 សម្រាប់ការជួញដូរ ហេតុអ្វីមិនចូលរួមជាមួយ WMT ដែលអាចផ្តល់មូលនិធិឱ្យអ្នកភ្លាមៗចាប់ពី $10,000 ដល់ $200,000',
                                        
                                        'bn_BD' => 'যদি ট্রেডিং শুরু করতে $10,000 সঞ্চয় করতে আপনার অন্তত 12 মাস লাগে, তাহলে কেন WMT-তে যোগ দেবেন না, যেখানে আমরা আপনাকে $10,000 থেকে $200,000 পর্যন্ত তাৎক্ষণিকভাবে ফান্ডিং দিই',
                                        
                                        'hk' => '如果您需要至少12個月才能存到1萬美元開始交易，為何不加入WMT？我們可即時為您提供從10,000美元到200,000美元的資金',
                                        
                                        'id' => 'Jika Anda membutuhkan setidaknya 12 bulan untuk menabung $10.000 untuk trading, mengapa tidak bergabung dengan WMT yang dapat memberikan Anda pendanaan instan dari $10.000 hingga $200.000',
                                        
                                        'ir' => 'اگر حداقل 12 ماه زمان لازم است تا 10,000 دلار برای معامله پس‌انداز کنید، چرا به WMT نمی‌پیوندید که می‌تواند فوراً از 10,000 تا 200,000 دلار به شما سرمایه ارائه دهد',
                                        
                                        'pt_BR' => 'Se você precisa de pelo menos 12 meses para economizar $10.000 para operar, por que não se juntar à WMT, onde oferecemos financiamento instantâneo de $10.000 até $200.000',

                                        'ur' => 'اگر آپ کے لیے کم از کم 12 ماہ لگیں گے کہ $10,000 جمع کریں تاکہ day trading account کھول سکیں، تو پھر WMT کیوں نہ join کریں؟ ہم آپ کو فوراً $10,000 سے لے کر $200,000 تک کا فنڈ فراہم کرتے ہیں۔',
                                    ];
                                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'If it takes at least 12 months to save $10,000 for a trading account, why not join WMT where we fund you instantly from $10,000 up to $200,000?';
                                ?>							
                            </p>
                        </div>
                    </div>
                </div>
                <div class="whyus__item border__glassed">
                    <p class="icon"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/whyus_ic2.png" width="90" height="91" alt="Capital"></p>
                    <div class="cnt">
                        <h3 class="h4">
                            <?php
                                
                                $texts = [
                                    'th' => 'เงินทุน',
                                    'zh_CN' => '资金',
                                    'tr_TR' => 'Başkent',
                                    'fr_FR' => 'Capitale',
                                    'es_MX' => 'Mayor poder de compra',
                                    'es_PE' => 'Riesgo controlado',
                                    'ru_RU' => 'Капитал',
                                    'ja' => '大きな購買力',
                                    'ko_KR' => '자본',
                                    'km' => 'ដើមទុន',
                                    'bn_BD' => 'পুঁজি',
                                    'ph' => 'Enhanced Capital Access',
                                    'in' => 'Enhanced Trading Capital',
                                    'hk' => '增加資本',
                                    'ir' => 'رمایه',
                                    'id' => 'Modal Besar', 
                                    'uz_UZ' => 'Kapital', 
                                    'ur' => 'کیپٹل', 
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Capital';
                            ?>
                        </h3>
                        <div class="desc">
                            <p>
                                <?php
                                    
                                    $texts = [
                                        'th' => 'เราขจัดความกังวลนี้โดยให้คุณสามารถกำหนดขนาดบัญชีเทรดได้ตามต้องการ เพื่อเพิ่มผลตอบแทนที่ดียิ่งขึ้น ด้วยผู้ให้บริการสภาพคล่องของเรา เราสามารถมอบกำลังซื้อให้คุณตั้งแต่ $1 ล้าน ถึง $100 ล้านดอลลาร์สหรัฐ',
                                        'zh_CN' => '我们通过允许您自定义交易账户规模来消除这一顾虑，从而获得更好的回报。得益于我们的流动性提供商，我们可以为您提供从100万美元到1亿美元的购买力。',
                                        'tr_TR' => 'Daha iyi getiriler elde etmeniz için işlem hesabı büyüklüğünü özelleştirmenize izin vererek bu endişeyi ortadan kaldırıyoruz. Likidite sağlayıcılarımız sayesinde size 1 milyon USD ile 100 milyon USD arasında alım gücü sunabiliyoruz.',
                                        'fr_FR' => "Nous supprimons ce problème en vous permettant de personnaliser la taille du compte de trading pour de meilleurs rendements. Grâce à nos fournisseurs de liquidités, nous pouvons vous offrir un pouvoir d'achat allant de 1 million de dollars à 100 millions de dollars.",
                                        'es_MX' => 'Gracias a nuestros proveedores de liquidez, puedes acceder a cuentas con poder adquisitivo desde 1 millón hasta 100 millones de USD.',
                                        'es_PE' => 'Operas bajo reglas de riesgo definidas.<br> WeMasterTrade asume el capital virtual, permitiéndote operar con mayor tranquilidad.',
                                        'es_ES' => 'Eliminamos esta preocupación permitiéndole tener un tamaño de cuenta comercial personalizado para obtener mejores rendimientos. Gracias a nuestros proveedores de liquidez, podemos brindarle un poder adquisitivo desde $1 millón de dólares hasta $100 millones de dólares.',
                                        'ru_RU' => 'Мы устраняем эту проблему, позволяя вам настраивать размер торгового счета для лучшей прибыли. Благодаря нашим поставщикам ликвидности мы можем предоставить вам покупательную способность от 1 миллиона до 100 миллионов долларов США.',
                                        'ja' => '当社の流動性プロバイダーにより、$100万から$1億の購買力にアクセスできます。より良いリターンを目指すプロップトレーダーに最適な環境を提供します。',
                                        'ko_KR' => '더 높은 수익을 위해 거래 계좌 규모를 맞춤 설정할 수 있도록 하여 이러한 우려를 해소합니다. 당사의 유동성 공급자를 통해 100만 달러부터 1억 달러까지의 매수력을 제공할 수 있습니다.',
                                        'km' => 'យើងខ្ញុំលុបបំបាត់កង្វល់នេះដោយអនុញ្ញាតឱ្យអ្នកមានគណនីជួញដូរតាមតម្រូវការដើម្បីមានប្រាក់ចំណេញកាន់តែប្រសើរ។ អាស្រ័យអ្នកផ្តល់សាច់ប្រាក់ងាយស្រួលរបស់យើងខ្ញុំ យើងខ្ញុំអាចបង្កើនកម្លាំងទិញពី 1 លានដុល្លារទៅ 100 លានដុល្លារ។',
                                        'bn_BD' => 'এই চিন্তা দূর করতে আমরা দিই পরিবর্তনযোগ্য একাউন্ট সাইজ, যেখানে আপনি পান আরো বেশী লাভের সুযোগ। আমাদের  লিকুইডিটি প্রদানকারীদের কারণে আমরা দিয়ে থাকি $১ মিলিয়ন থেকে $১০০ মিলিয়ন ডলারের লিভারেজ ক্ষমতা।',
                                        'ph' => 'We eliminate the common barrier of insufficient capital by empowering you with a robust, customizable trading account size. This is designed for superior profit generation for Philippine traders. Leveraging our established relationships with prime liquidity providers, we can extend your buying power significantly, from $1 million USD to $100 million USD.',
                                        'hk' => '我們透過客製化交易帳戶規模消除您的顧慮，協助實現更優收益。依托流動性提供者支持，我們可為您提供100萬至1億美元美金的購買力槓桿。',
                                        'ir' => 'ما این نگرانی را با فراهم کردن امکان شخصی‌سازی اندازه حساب معاملاتی برای بازدهی بهتر، برطرف می‌کنیم. به لطف ارائه‌دهندگان نقدینگی ما، می‌توانیم با قدرت خرید از ۱ میلیون دلار آمریکا تا ۱۰۰ میلیون دلار آمریکا، به شما کمک کنیم.',
                                        'id' => 'Kami menghilangkan keterbatasan modal dengan menyediakan akun trading yang dapat disesuaikan untuk hasil yang lebih optimal. Berkat dukungan penyedia likuiditas kami, Anda dapat memiliki daya beli mulai dari $1 juta USD hingga $100 juta USD.',
                                        'pt_BR' => 'Eliminamos essa preocupação ao permitir que você tenha uma conta de negociação personalizada para obter melhores retornos. Graças aos nossos provedores de liquidez, podemos oferecer alavancagem com poder de compra de US$ 1 milhão até US$ 100 milhões.',
                                        'en_AU' => 'We provide customised simulated account sizes designed to reflect professional proprietary trading conditions. This supports virtual stock trading and stock market virtual trading without risking personal savings.',
                                        'uz_UZ' => 'Yaxshiroq daromad olishingiz uchun savdo hisobi hajmini moslashtirish imkonini berish orqali biz ushbu xavotirni bartaraf etamiz. Likvidlik yetkazib beruvchilarimiz yordamida biz sizga $1 milliondan $100 million AQSh dollarigacha bo‘lgan xarid qobiliyatini (leverej) taqdim eta olamiz.', 
                                        'ur' => ' ہم اس فکر کو ختم کرتے ہیں اور آپ کو customized trading account size دیتے ہیں تاکہ بہتر returns حاصل ہوں۔ ہمارے liquidity providers کی بدولت، ہم آپ کو $1 million USD سے $100 million USD تک buying power فراہم کر سکتے ہیں۔', 
                                    ];
                                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'We remove this concern by allowing you to have a customization trading account size for a better returns. Thanks to our liquidity providers, we can leverage you with buying power from $1 million USD to $100 million USD.';
                                    ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="whyus__item">
                    <p class="icon"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/whyus_ic3.png" width="90" height="91" alt="Risk of Loss"></p>
                    <div class="cnt">
                        <h3 class="h4">
                            <?php
                                
                                $texts = [
                                    'th' => 'ความเสี่ยงจากการขาดทุน',
                                    'zh_CN' => '损失风险',
                                    'tr_TR' => 'Kaybetme riski',
                                    'fr_FR' => 'Risque de perte',
                                    'es_MX' => 'Riesgo controlado',
                                    'es_PE' => 'Mayor poder de compra',
                                    'es_ES' => 'Riesgo de pérdida',
                                    'ru_RU' => 'Риск убытков',
                                    'ja' => 'リスク管理の安心感',
                                    'ko_KR' => '손실 위험',
                                    'km' => 'ហានិភ័យនៃការបាត់បង់',
                                    'bn_BD' => 'লোকসান ঝুঁকি',
                                    'ph' => 'Mitigated Risk',
                                    'hk' => '降低損失風險',
                                    'ir' => 'خطر از دست دادن<',
                                    'id' => 'Risiko Kerugian Ditanggung',
                                    'pt_BR' => 'Risco de Perda',
                                    'in' => 'Protected Risk Management',
                                    'uz_UZ' => 'Yo‘qotish xatari',
                                    'ur' => 'نقصان کا خطرہ',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Risk of Loss';
                            ?>
                        </h3>
                        <div class="desc">
                            <p>
                                <?php
                                    
                                    $texts = [
                                        'th' => 'เทรดเดอร์หลายคนใช้เวลานานในการเก็บเงินจำนวนมาก การเทรดด้วยเงินทุนของตัวเองอาจนำไปสู่การขาดทุนอย่างหนักและไม่สามารถกู้คืนได้ แต่กับ WeMasterTrade เราคุ้มครองการขาดทุนของคุณ ทำให้คุณสามารถเทรดได้อย่างสบายใจ',
                                        'zh_CN' => '许多交易者长期存下大量资金，用自有资金进行交易可能会导致巨额损失且无法挽回。 通过WeMasterTrade，您的潜在损失将由我们承担，因此您在交易时可以安心无忧。',
                                        'tr_TR' => 'Birçok yatırımcı uzun vadede çok para biriktirir, kendi fonlarıyla işlem yapmak potansiyel olarak büyük kayıplara ve toparlanamamaya yol açabilir. WeMasterTrade ile olası zararlarınız tarafımızdan karşılanır, böylece işlem yaparken içiniz rahat olur.',
                                        'fr_FR' => "De nombreux traders économisent beaucoup d'argent sur une longue période, le trading avec leurs fonds propres peut potentiellement entraîner d'énormes pertes et une non-récupération. Avec WeMasterTrade, vos pertes potentielles sont couvertes par nous afin que vous puissiez avoir l'esprit tranquille pendant vos transactions.",
                                        'es_MX' => 'En WeMasterTrade cubrimos tus pérdidas potenciales para que puedas operar con mayor tranquilidad.',
                                        'es_PE' => 'Gracias a nuestros proveedores de liquidez, puedes acceder a cuentas con mayor poder adquisitivo, ampliando tu capacidad operativa.',
                                        'es_ES' => 'Muchos comerciantes ahorran mucho dinero durante un largo período, operar con fondos propios puede generar enormes pérdidas y no recuperarse. Con WeMasterTrade, cubrimos sus pérdidas potenciales para que pueda tener tranquilidad mientras opera.',
                                        'ru_RU' => 'Торговля собственными средствами может привести к значительным невозвратным убыткам. С WeMasterTrade многие трейдеры экономят значительные суммы в течение длительного периода. Мы покрываем ваши потенциальные убытки, поэтому вы можете быть спокойны во время торговли.',
                                        'ja' => '多くの日本のトレーダーは長年かけて自己資金を蓄えます。WeMasterTradeのプロップファームモデルでは、当社が潜在的な損失をカバーするため、自己資金を失う心配なく取引戦略に集中できます。',
                                        'ko_KR' => '많은 트레이더들은 오랜 기간 동안 자신의 자금을 모읍니다. 개인 자금으로 거래할 경우 큰 손실이 발생하고 회복이 어려울 수 있습니다. WeMasterTrade에서는 잠재적인 손실을 당사가 보전하여 안심하고 거래할 수 있도록 합니다.',
                                        'km' => 'ពាណិជ្ជករជាច្រើនសន្សំប្រាក់បានច្រើនក្នុងរយៈពេលវែង ការជួញដូរជាមួយនឹងប្រាក់ផ្ទាល់ខ្លួនរបស់អ្នកអាចនាំទៅរកការខាតបង់ដ៏ធំ និងមិនអាចយកមកវិញបាន។ ជាមួយនឹង WeMasterTrade យើងនឹងគ្របដណ្តប់ការខាតបង់ដែលអាចកើតមានរបស់អ្នក ដូច្នេះអ្នកអាចធ្វើពាណិជ្ជកម្មដោយស្ងប់ចិត្ត',
                                        'bn_BD' => 'অসংখ্য ট্রেডারদের পর্যাপ্ত অর্থ জমাতে লেগে যাচ্ছে দীর্ঘ সময়। এছাড়া নিজস্ব পুঁজিতে বিনিয়োগ ডেকে আনতে পারে বিশাল এবং অপূরণীয় ক্ষতি। WeMasterTrade এ আমরা আপনার সম্ভাব্য ঝুঁকি বহন করি। যাতে আপনার ট্রেডিং হয় নিশ্চিন্ত।',
                                        'ph' => 'Many dedicated Philippine trading enthusiasts inadvertently deplete their personal savings over time. Engaging in trading with your own money inherently carries substantial risk. This can potentially lead to significant and irrecoverable losses. With WeMasterTrade, your exposure is managed; any potential trading losses are borne by us, allowing you to trade with ultimate peace of mind.',
                                        'hk' => '許多交易者需要長時間累積自己的資金，以自有資金交易可能會導致巨大且難以挽回的損失。在 WeMasterTrade，您的潛在損失將由我們承擔，讓您可以安心交易。',
                                        'ir' => 'سیاری از معامله‌گران در درازمدت پول زیادی پس‌انداز می‌کنند، معامله با سرمایه شخصی می‌تواند به طور بالقوه منجر به ضرر هنگفت و عدم بازیابی شود. با WeMasterTrade، ضررهای احتمالی شما توسط ما پوشش داده می‌شود، بنابراین می‌توانید هنگام معامله آرامش خاطر داشته باشید.',
                                        'id' => 'Banyak trader menghabiskan waktu bertahun-tahun untuk menabung, namun trading dengan dana sendiri berpotensi mengakibatkan kerugian besar yang sulit dipulihkan. Dengan WeMasterTrade, potensi kerugian Anda ditanggung oleh kami, sehingga Anda dapat trading dengan tenang.',
                                        'en_AU' => 'Trading with personal money can increase financial pressure and emotional risk. WeMasterTrade uses virtual trading environments with defined limits, allowing traders to operate using virtual capital in a controlled setting.',
                                        'pt_BR' => 'Muitos traders economizam grandes quantias ao longo de anos, mas negociar com capital próprio pode resultar em perdas enormes e, muitas vezes, irrecuperáveis. Com a WeMasterTrade, suas potenciais perdas são cobertas por nós, proporcionando tranquilidade para que você opere com confiança.',
                                        'in' => "Many Indian traders save for years only to face devastating losses in stock market trading. With WeMasterTrade's prop firm trading model, your potential losses are covered by us. Focus on your intraday trading strategies and forex trading platform skills without the fear of losing your life savings. This is what makes us one of the best prop firms for Indian traders.",
                                        'uz_UZ' => 'Ko‘pgina treyderlar uzoq vaqt davomida katta miqdorda pul jamg‘aradilar, biroq o‘z mablag‘lari bilan savdo qilish katta yo‘qotishlarga va qayta tiklanmas holatlarga olib kelishi mumkin. WeMasterTrade bilan sizning ehtimoliy yo‘qotishlaringiz biz tomonimizdan qoplanadi, shuning uchun savdo paytida xotirjam bo‘lishingiz mumkin.',
                                        'ur' => ' بہت سے traders لمبے عرصے میں اپنا پیسہ جمع کرتے ہیں، اور اپنے fund سے trade کرنے پر بڑے نقصان کا خطرہ ہوتا ہے جو recover نہیں ہو سکتا۔ WeMasterTrade کے ساتھ، آپ کے ممکنہ نقصان کی کوریج ہم کرتے ہیں، تاکہ آپ ذہنی سکون کے ساتھ trade کر سکیں۔',
                                    ];
                                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'A lot of traders save a lot of money in a long period, trading with own fund can potentially lead to huge loss and un-recover. With WeMasterTrade, your potential losses are covered by us so you can have peace in mind while trading.';
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="whyus__item">
                    <p class="icon"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/whyus_ic4.png" width="90" height="91" alt="Account Setup"></p>
                    <div class="cnt">
                        <h3 class="h4">
                            <?php
                                
                                $texts = [
                                    'th' => 'การตั้งค่าบัญชี',
                                    'zh_CN' => '账户设置',
                                    'tr_TR' => 'Hesap Kurulumu',
                                    'fr_FR' => 'Configuration du compte',
                                    'es_PE' => 'Fácil inicio',
                                    'es_ES' => 'Configuracion de cuenta',
                                    'ru_RU' => 'Настройка счета',
                                    'ja' => '簡単スタート',
                                    'ko_KR' => '계좌 설정',
                                    'km' => 'ការដំឡើងគណនី',
                                    'bn_BD' => 'একাউন্ট গঠন',
                                    'ph' => 'Seamless Account Setup',
                                    'hk' => '帳戶設定',
                                    'ir' => 'نحوه عملکرد بسته چالش',
                                    'id' => 'Pengaturan Akun Muda',
                                    'pt_BR' => 'Configuração da conta',
                                    'in' => 'Account Setup',
                                    'uz_UZ' => 'Hisobni sozlash',
                                    'ur' => 'اکاؤنٹ سیٹ اپ',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Account Setup';
                            ?>
                        </h3>
                        <div class="desc">
                            <p>
                                <?php
                                    $texts = [
                                        'th' => 'เราจัดการเทคโนโลยีและการตั้งค่าบัญชีทั้งหมดให้กับคุณ สิ่งที่คุณต้องทำคือชำระค่าธรรมเนียมการตั้งค่า เพียงคลิกเดียวสำหรับสัญญาออนไลน์ จากนั้นเริ่มการซื้อขายได้ทันที',
                                        'zh_CN' => '我们为您处理所有技术和帐户设置。 您只需支付一笔设置费，一键在线签订合同，然后立即开始交易。',
                                        'tr_TR' => 'Tüm teknoloji ve hesap kurulumunu sizin için biz hallediyoruz. Tek yapmanız gereken bir kurulum ücreti ödemek, sözleşmeyi çevrimiçi tek tıklamayla onaylamak ve hemen işlem yapmaya başlamaktır.',
                                        'fr_FR' => "Nous gérons toute la technologie et la configuration du compte pour vous. Tout ce dont vous avez besoin est de payer des frais d'installation, d'un seul clic pour conclure un contrat en ligne, puis de commencer immédiatement à négocier.",
                                        'es_MX' => 'Solo pagas una tarifa de instalación, completas tu registro en línea y comienzas a operar de inmediato. Nosotros nos encargamos de toda la tecnología y configuración.',
                                        'es_PE' => 'Pagas una tarifa de instalación, completas tu registro online y empiezas a operar de inmediato.<br> Nosotros gestionamos toda la tecnología y configuración.',
                                        'es_ES' => 'Nos encargamos de toda la tecnología y la configuración de la cuenta por usted. Todo lo que necesita es pagar una tarifa de instalación, un clic para contratar en línea y luego comenzar a operar de inmediato.',
                                        'ru_RU' => 'Мы берем на себя все технические аспекты и настройку счета. Все, что вам нужно сделать - это заплатить регистрационный сбор, заключить онлайн-контракт в один клик, и вы сразу можете начать торговать.',
                                        'ja' => '複雑な書類手続きや長い審査は不要です。セットアップ料金を支払い、オンライン契約に同意するだけで、すぐにプロップトレーディングを開始できます。',
                                        'ko_KR' => '모든 기술과 계정 설정은 저희가 처리합니다. 설정 수수료를 지불하고 온라인 계약에 한 번 클릭으로 동의하면 바로 거래를 시작할 수 있습니다.',
                                        'km' => 'យើងខ្ញុំដោះស្រាយរាល់បច្ចេកវិទ្យា និងការរៀបចំគណនីសម្រាប់អ្នក។ អ្វីដែលអ្នកត្រូវធ្វើគឺបង់ថ្លៃរៀបចំ ដោយចុចមួយដងដើម្បីទទួលបានកិច្ចសន្យារបស់អ្នកតាមអនឡាញ ហើយបន្ទាប់មកចាប់ផ្តើមការជួញដូរភ្លាមៗ។',
                                        'bn_BD' => 'একাউন্ট গঠন এবং ট্রেডিং প্রযুক্তির পুরোটাই আমরা সামলাই আপনার হয়ে। শুধুমাত্র একটি সেট আপ ফি পরিশোধ এবং এক ক্লিকে চুক্তি সই করেই আপনি কাজ শুরু করে দিতে পারেন।',
                                        'ph' => "Forget the technical headaches and complex setup procedures. We manage all the necessary technology and account configuration for you. Your journey begins with a minimal setup payment, a quick online agreement, and then you're ready to commence live trading immediately.",
                                        'hk' => '我們全面負責帳戶設置，您支付配置設定費、一鍵簽署電子簽名即可立即開始交易。',
                                        'in' => 'Forget complicated documentation and lengthy onboarding with traditional stock broker platforms. We handle all technology and account setup. Pay a one-time setup fee, sign the online contract, and start trading immediately - just like a demo trading account, but with real profit potential.',
                                        'ir' => 'ا تمام فناوری و راه‌اندازی حساب را برای شما مدیریت می‌کنیم. تنها کاری که باید انجام دهید، پرداخت هزینه راه‌اندازی، یک کلیک برای قرارداد آنلاین و سپس شروع معامله بلافاصله است',
                                        'id' => 'Kami menangani seluruh aspek teknologi dan pengaturan akun untuk Anda. Yang Anda perlukan hanyalah membayar biaya setup, menandatangani kontrak secara online, dan langsung mulai trading.',
                                        'pt_BR' => 'Nós cuidamos de toda a parte tecnológica e da configuração da sua conta. Tudo o que você precisa fazer é pagar uma taxa de ativação, assinar o contrato online com um clique e começar a negociar imediatamente.',
                                        'en_AU' => 'We handle the technology and account setup process. After registration and a one-time setup fee, traders can begin trading under clear rules within a structured prop trading firm framework.',
                                        'uz_UZ' => 'Biz barcha texnologik jarayonlarni va hisobni sozlashni o‘z zimmamizga olamiz. Sizdan faqat sozlash to‘lovini amalga oshirish, onlayn shartnomani bir marta bosish orqali tasdiqlash va darhol savdoni boshlash talab etiladi.',
                                        'ur' => ' ہم تمام technology اور account setup آپ کے لیے handle کرتے ہیں۔ بس setup fee ادا کریں، online contract پر ایک click کریں، اور فوراً trade شروع کریں۔',
                                    ];
                                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'We handle all the technology and account setup for you. All you need is to pay a set up fee, one click for online contract and then start trade right away.';
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="whyus__img"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/whyus_imgn1.png" width="932" height="731" alt="Why Use WMT Capital Instead of Your Own Money"></p>
        </div>
    </div>
</section>
<!-- End Why Us -->