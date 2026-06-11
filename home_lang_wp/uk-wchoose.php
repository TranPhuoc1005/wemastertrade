<!-- Why choose -->
<section class="wchoose">
    <div class="container">
        <div class="title">
            <p class="title__sub">
                <?php
                    
                    $texts = [
                        'th' => 'ทำไมต้องเลือก?',
                        'zh_CN' => '为什么选择？',
                        'tr_TR' => 'Neden seçmelisiniz?',
                        'fr_FR' => 'Pourquoi choisir ?',
                        'es_PE' => '¿Por qué elegir?',
                        'es_ES' => '¿Por qué elegir?',
                        'ru_RU' => 'Почему выбрать?',
                        'ja' => 'なぜ選ぶ？',
                        'ko_KR' => '왜 선택해야 할까요?',
                        'km' => 'ហេតុអ្វីជ្រើសរើស?',
                        'bn_BD' => 'কেন নির্বাচন করবেন?',
                        'hk' => '為什麼選擇？',
                        'ir' => 'چرا انتخاب کنیم؟',
                        'ur' => 'کیوں منتخب کریں؟',
                        'id' => 'Mengapa memilih?',
                        'pt_BR' => 'Por que escolher?',
                    ];
                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Why choose?';
                ?>
            </p>
            <?php
                
                $texts = [
                    'th' => '<h3>ทำไมต้องเลือก<br><span>แพ็กเกจ Challenge</span></h3>',
                    'zh_CN' => '<h3>为什么选择<br><span>Challenge 套餐</span></h3>',
                    'tr_TR' => '<h3>Neden seçmelisiniz<br><span>Challenge Paketi</span></h3>',
                    'fr_FR' => '<h3>Pourquoi choisir<br><span>le Challenge Package</span></h3>',
                    'es_PE' => '<h3>¿Por qué elegir<br><span>el Challenge Package</span></h3>',
                    'es_ES' => '<h3>¿Por qué elegir<br><span>el Challenge Package</span></h3>',
                    'ru_RU' => '<h3>Почему стоит выбрать<br><span>Challenge Package</span></h3>',
                    'ja' => '<h2>なぜ日本のプロップトレーダーは<br><span>Challenge Packageを選ぶのか</span></h2><h3>なぜ選ぶのか<span>Challenge パッケージ</span></h3>',
                    'ko_KR' => '<h3>왜 선택해야 할까요<br><span>Challenge 패키지</span></h3>',
                    'km' => '<h3>ហេតុអ្វីជ្រើសរើស<br><span>Challenge Package</span></h3>',
                    'bn_BD' => '<h3>কেন নির্বাচন করবেন<br><span>Challenge Package</span></h3>',
                    'hk' => '<h3>為什麼選擇<br><span>Challenge 套餐</span></h3>',
                    'ir' => '<h3>چرا انتخاب کنیم<br><span>پکیج Challenge</span></h3>',
                    'id' => '<h3>Mengapa memilih<br><span>Paket Challenge</span></h3>',
                    'pt_BR' => '<h3>Por que escolher<br><span>o Pacote Challenge</span></h3>',
                    'ur' => '<h3>چیلنج پیکج کیوں منتخب<br><span>کریں؟</span></h3>',
                ];
                $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h3>Why choose<br><span>The Challenge Package</span></h3>';
            ?>
        </div>
        <div class="wchoose__content">
            <div class="item active">
                <p class="item__no">
                    <?php
                        
                        $texts = [
                            'th' => 'อันดับ 1',
                            'zh_CN' => '第1',
                            'tr_TR' => '1.',
                            'fr_FR' => '1er',
                            'es_PE' => '1.º',
                            'es_ES' => '1.º',
                            'ru_RU' => '1-й',
                            'ja' => '第1',
                            'ko_KR' => '1위',
                            'km' => 'ទី១',
                            'bn_BD' => '১ম',
                            'hk' => '第1',
                            'ir' => 'اول',
                            'id' => '1.',
                            'pt_BR' => '1º',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? '1st';
                    ?>
                </p>
                <div class="cnt">
                    <?php
                        
                        $texts = [
                            'th' => '<h4>ถือข้ามคืน / ข้ามสุดสัปดาห์</h4>
                                            <div class="desc">
                                                <p>สามารถถือออเดอร์ข้ามคืนและข้ามสุดสัปดาห์ได้โดยไม่มีข้อจำกัด พร้อมค่าธรรมเนียมสวอปต่ำ เหมาะสำหรับทุกกลยุทธ์การเทรด หรือคุณสามารถชำระค่าธรรมเนียมเพิ่มเติมเล็กน้อยเพื่อเพลิดเพลินกับการเทรดแบบไม่มีสวอปโดยสมบูรณ์</p>
                                            </div>',
                            'zh_CN' => '<h4>隔夜 / 周末持仓</h4>
                                            <div class="desc">
                                                <p>您可以在没有任何限制的情况下隔夜及周末持仓，并享受低掉期费用，适用于所有交易策略。此外，您还可以支付少量额外费用以享受完全免掉期交易。</p>
                                            </div>',
                            'tr_TR' => '<h4>Hafta Sonu / Gecelik</h4>
                                            <div class="desc">
                                                <p>İşlemlerinizi gece boyunca ve hafta sonu boyunca hiçbir kısıtlama olmadan açık tutabilir, tüm trading stratejileri için uygun düşük swap ücretlerinden yararlanabilirsiniz. Alternatif olarak küçük bir ek ücret ödeyerek tamamen swapsız trading yapabilirsiniz.</p>
                                            </div>',
                            'fr_FR' => '<h4>Week-end / Overnight</h4>
                                            <div class="desc">
                                                <p>Conservez vos positions overnight et pendant le week-end sans aucune restriction, tout en profitant de faibles frais de swap adaptés à toutes les stratégies de trading. Vous pouvez également payer un petit supplément pour bénéficier d’un trading totalement sans swap.</p>
                                            </div>',
                            'es_PE' => '<h3 class="h4">Operativa sin restricciones</h3>
                                            <div class="desc">
                                                <p>Mantén operaciones abiertas overnight y durante el fin de semana sin restricciones, con bajos fees de swap ideales para distintas estrategias. <br>Opcionalmente, puedes pagar un pequeño Fee adicional para operar completamente swap-free.</p>
                                            </div>',
                            'es_ES' => '<h4>Fin de semana / Overnight</h4>
                                            <div class="desc">
                                                <p>Mantén operaciones abiertas durante la noche y el fin de semana sin restricciones, disfrutando de bajas comisiones swap ideales para todas las estrategias de trading. Alternativamente, puedes pagar una pequeña tarifa adicional para disfrutar de trading completamente sin swap.</p>
                                            </div>',
                            'ru_RU' => '<h4>На ночь / На выходные</h4>
                                            <div class="desc">
                                                <p>Держите сделки открытыми на ночь и на выходные без ограничений, наслаждаясь низкими своп-комиссиями, подходящими для любых торговых стратегий. При желании вы можете заплатить небольшую дополнительную комиссию для полностью безсвоповой торговли.</p>
                                            </div>',
                            'ja' => '<h4>週末・オーバーナイト保有OK</h4>
                                            <div class="desc">
                                                <p>取引をオーバーナイトおよび週末を跨いで制限なく保有できます。あらゆるプロップトレーディング戦略に対応した低スワップ手数料を提供。オプションで追加料金を支払い、完全スワップフリー取引も可能です。</p>
                                            </div>',
                            'ko_KR' => '<h4>주말 / 오버나이트</h4>
                                            <div class="desc">
                                                <p>거래를 밤새 또는 주말 동안 제한 없이 보유할 수 있으며, 모든 트레이딩 전략에 적합한 낮은 스왑 수수료를 제공합니다. 또한 소액의 추가 비용을 지불하면 완전한 스왑 프리 거래도 이용할 수 있습니다.</p>
                                            </div>',
                            'km' => '<h4>កាន់អូរឌឺរ យប់ / ចុងសប្តាហ៍</h4>
                                            <div class="desc">
                                                <p>អ្នកអាចកាន់ការជួញដូររយៈពេលយប់ និងចុងសប្តាហ៍ដោយគ្មានការកំណត់ ហើយរីករាយជាមួយថ្លៃស្វាប់ទាប សមស្របសម្រាប់គ្រប់យុទ្ធសាស្ត្រជួញដូរ។ ជាជម្រើស អ្នកអាចបង់ថ្លៃបន្ថែមតិចតួចដើម្បីប្រើការជួញដូរដោយគ្មានស្វាប់ទាំងស្រុង។</p>
                                            </div>',
                            'bn_BD' => '<h4>উইকেন্ড / ওভারনাইট</h4>
                                            <div class="desc">
                                                <p>আপনি কোনো সীমাবদ্ধতা ছাড়াই রাতারাতি এবং সপ্তাহান্তে ট্রেড ধরে রাখতে পারেন এবং সব ধরনের ট্রেডিং কৌশলের জন্য উপযুক্ত কম swap ফি উপভোগ করতে পারেন। এছাড়াও আপনি সামান্য অতিরিক্ত ফি প্রদান করে সম্পূর্ণ swap-free ট্রেডিং উপভোগ করতে পারেন।</p>
                                            </div>',
                            'hk' => '<h4>隔夜 / 週末持倉</h4>
                                            <div class="desc">
                                                <p>您可以在沒有任何限制的情況下隔夜及週末持倉，並享受低掉期費用，適合所有交易策略。此外，您亦可支付少量額外費用以享受完全免掉期交易。</p>
                                            </div>',
                            'ir' => '<h4>شبانه / آخر هفته</h4>
                                            <div class="desc">
                                                <p>می‌توانید معاملات خود را بدون هیچ محدودیتی در طول شب و آخر هفته نگه دارید و از کارمزد سواپ پایین مناسب برای تمامی استراتژی‌های معاملاتی بهره‌مند شوید. همچنین می‌توانید با پرداخت هزینه‌ای اندک از معاملات کاملاً بدون سواپ استفاده کنید.</p>
                                            </div>',
                            'id' => '<h4>Weekend / Overnight</h4>
                                            <div class="desc">
                                                <p>Tahan posisi trading Anda semalaman dan selama akhir pekan tanpa batasan, sambil menikmati biaya swap rendah yang cocok untuk semua strategi trading. Sebagai alternatif, Anda dapat membayar sedikit biaya tambahan untuk menikmati trading yang sepenuhnya bebas swap.</p>
                                            </div>',
                            'pt_BR' => '<h4>Fim de semana / Overnight</h4>
                                            <div class="desc">
                                                <p>Mantenha operações abertas durante a noite e ao longo do fim de semana sem restrições, aproveitando baixas taxas de swap ideais para todas as estratégias de trading. Alternativamente, você pode pagar uma pequena taxa adicional para aproveitar trading totalmente sem swap.</p>
                                            </div>',
                            'ur' => '<h4>ویک اینڈ / اوور نائٹ ٹریڈنگ</h4>
                                            <div class="desc">
                                                <p>ٹریڈز کو رات بھر اور ویک اینڈ کے دوران بغیر کسی پابندی کے ہولڈ کریں، کم سواپ فیس کے ساتھ جو ہر قسم کی ٹریڈنگ اسٹریٹیجی کے لیے موزوں ہے۔ متبادل طور پر، آپ معمولی اضافی فیس ادا کر کے مکمل طور پر سواپ فری ٹریڈنگ بھی حاصل کر سکتے ہیں۔</p>
                                            </div>',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h4>Weekend / Overnight</h4>
                                            <div class="desc">
                                                <p>Hold trades overnight and over the weekend with no restrictions, enjoying low swap fees ideal for all trading strategies. Alternatively, you can pay a small additional fee to enjoy completely swap-free trading.</p>
                                            </div>';
                    ?>
                </div>
            </div>
            <div class="item">
                <p class="item__no">
                    <?php
                        
                        $texts = [
                            'th' => 'อันดับ 2',
                            'zh_CN' => '第2',
                            'tr_TR' => '2.',
                            'fr_FR' => '2e',
                            'es_PE' => '2.º',
                            'es_ES' => '2.º',
                            'ru_RU' => '2-й',
                            'ja' => '第2',
                            'ko_KR' => '2위',
                            'km' => 'ទី២',
                            'bn_BD' => '২য়',
                            'hk' => '第2',
                            'ir' => 'دوم',
                            'id' => '2.',
                            'pt_BR' => '2º',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? '2nd';
                    ?>
                </p>
                <div class="cnt">
                    <?php
                        
                        $texts = [
                            'th' => '<h4>อนุญาตให้เทรดข่าว</h4>
                                            <div class="desc">
                                                <p>ที่ WMT เราเชื่อในการเสริมพลังให้กับเทรดเดอร์ คุณสามารถเทรดตามข่าวได้อย่างอิสระและดำเนินกลยุทธ์ของคุณได้โดยไม่มีข้อจำกัด</p>
                                            </div>',
                            'zh_CN' => '<h4>允许新闻交易</h4>
                                            <div class="desc">
                                                <p>在 WMT，我们相信赋能交易者。您可以自由地根据新闻进行交易，并在没有任何限制的情况下执行您的策略。</p>
                                            </div>',
                            'tr_TR' => '<h4>Haber Tradingine İzin Verilir</h4>
                                            <div class="desc">
                                                <p>WMT’de traderları güçlendirmeye inanıyoruz. Haberleri özgürce trade edebilir ve stratejinizi hiçbir kısıtlama olmadan uygulayabilirsiniz.</p>
                                            </div>',
                            'fr_FR' => '<h4>Trading sur les actualités autorisé</h4>
                                            <div class="desc">
                                                <p>Chez WMT, nous croyons en l’autonomisation des traders. Tradez les actualités librement et exécutez votre stratégie sans aucune restriction.</p>
                                            </div>',
                            'es_PE' => '<h3 class="h4">News Trading Permitido</h3>
                                            <div class="desc">
                                                <p>En WeMasterTrade impulsamos la libertad operativa. <br>Opera noticias libremente y ejecuta tu estrategia sin restricciones.</p>
                                            </div>',
                            'es_ES' => '<h4>Trading de noticias permitido</h4>
                                            <div class="desc">
                                                <p>En WMT creemos en empoderar a los traders. Opera las noticias libremente y ejecuta tu estrategia sin ninguna restricción.</p>
                                            </div>',
                            'ru_RU' => '<h4>Разрешена торговля на новостях</h4>
                                            <div class="desc">
                                                <p>В WMT мы верим в расширение возможностей трейдеров. Торгуйте на новостях свободно и реализуйте свою стратегию без каких-либо ограничений.</p>
                                            </div>',
                            'ja' => '<h4>ニューストレード可能</h4>
                                            <div class="desc">
                                                <p>WMTではプロップトレーダーの裁量を最大限に尊重します。経済指標発表や重要イベント時のニューストレードも一切制限なく実行できます。</p>
                                            </div>',
                            'ko_KR' => '<h4>뉴스 트레이딩 허용</h4>
                                            <div class="desc">
                                                <p>WMT는 트레이더의 역량을 강화하는 것을 중요하게 생각합니다. 뉴스 트레이딩을 자유롭게 진행하고 어떤 제한 없이 전략을 실행할 수 있습니다.</p>
                                            </div>',
                            'km' => '<h4>អនុញ្ញាតឱ្យជួញដូរព័ត៌មាន</h4>
                                            <div class="desc">
                                                <p>នៅ WMT យើងជឿជាក់ក្នុងការផ្តល់អំណាចដល់អ្នកជួញដូរ។ អ្នកអាចជួញដូរតាមព័ត៌មានបានដោយសេរី និងអនុវត្តយុទ្ធសាស្ត្ររបស់អ្នកដោយគ្មានការកំណត់ណាមួយ។</p>
                                            </div>',
                            'bn_BD' => '<h4>নিউজ ট্রেডিং অনুমোদিত</h4>
                                            <div class="desc">
                                                <p>WMT-তে আমরা ট্রেডারদের ক্ষমতায়নে বিশ্বাস করি। আপনি স্বাধীনভাবে নিউজ ট্রেড করতে পারেন এবং কোনো সীমাবদ্ধতা ছাড়াই আপনার কৌশল কার্যকর করতে পারেন।</p>
                                            </div>',
                            'hk' => '<h4>允許新聞交易</h4>
                                            <div class="desc">
                                                <p>在 WMT，我們相信賦能交易者。您可以自由地進行新聞交易，並在沒有任何限制的情況下執行您的策略。</p>
                                            </div>',
                            'ir' => '<h4>معامله بر اساس اخبار مجاز است</h4>
                                            <div class="desc">
                                                <p>در WMT ما به توانمندسازی معامله‌گران باور داریم. شما می‌توانید آزادانه بر اساس اخبار معامله کنید و استراتژی خود را بدون هیچ محدودیتی اجرا نمایید.</p>
                                            </div>',
                            'id' => '<h4>News Trading Diizinkan</h4>
                                            <div class="desc">
                                                <p>Di WMT, kami percaya dalam memberdayakan trader. Trade berita dengan bebas dan jalankan strategi Anda tanpa batasan apa pun.</p>
                                            </div>',
                            'pt_BR' => '<h4>Trading de notícias permitido</h4>
                                            <div class="desc">
                                                <p>Na WMT, acreditamos em capacitar os traders. Negocie notícias livremente e execute sua estratégia sem qualquer restrição.</p>
                                            </div>',
                            'ur' => '<h4>نیوز ٹریڈنگ کی اجازت</h4>
                                        <div class="desc">
                                            <p>ڈبلیو ایم ٹی میں ہم ٹریڈرز کو بااختیار بنانے پر یقین رکھتے ہیں۔ آپ خبروں کے دوران آزادانه طور پر ٹریڈ کر سکتے ہیں اور اپنی حکمتِ عملی بغیر کسی پابندی کے نافذ کر سکتے ہیں۔</p>
                                        </div>',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h4>News Trading Allowed</h4>
                                            <div class="desc">
                                                <p>At WMT, we believe in empowering traders. Trade the news freely and execute your strategy without any restrictions.</p>
                                            </div>';
                    ?>
                </div>
            </div>
            <div class="item">
                <p class="item__no">
                    <?php
                        
                        $texts = [
                            'th' => 'อันดับ 3',
                            'zh_CN' => '第3',
                            'tr_TR' => '3.',
                            'fr_FR' => '3e',
                            'es_PE' => '3.º',
                            'es_ES' => '3.º',
                            'ru_RU' => '3-й',
                            'ja' => '第3',
                            'ko_KR' => '3위',
                            'km' => 'ទី៣',
                            'bn_BD' => '৩য়',
                            'hk' => '第3',
                            'ir' => 'سوم',
                            'id' => '3.',
                            'pt_BR' => '3º',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? '3rd';
                    ?>
                </p>
                <div class="cnt">
                    <?php
                        
                        $texts = [
                            'th' => '<h4>สัญลักษณ์จำลองที่หลากหลาย</h4>
                                            <div class="desc">
                                                <p>สำรวจพอร์ตสินทรัพย์ที่หลากหลาย</p>
                                            </div>',
                            'zh_CN' => '<h4>丰富的模拟交易品种</h4>
                                            <div class="desc">
                                                <p>探索丰富的资产组合。</p>
                                            </div>',
                            'tr_TR' => '<h4>Geniş Simüle Edilmiş Sembol Yelpazesi</h4>
                                            <div class="desc">
                                                <p>Zengin bir varlık portföyünü keşfedin.</p>
                                            </div>',
                            'fr_FR' => '<h4>Large gamme de symboles simulés</h4>
                                            <div class="desc">
                                                <p>Explorez un riche portefeuille d’actifs.</p>
                                            </div>',
                            'es_PE' => '<h3 class="h4">Amplia Gama de Símbolos Simulados</h3>
                                            <div class="desc">
                                                <p>Accede a un portafolio amplio de activos simulados y diversifica tus oportunidades de trading.</p>
                                            </div>',
                            'es_ES' => '<h4>Amplia gama de símbolos simulados</h4>
                                            <div class="desc">
                                                <p>Explora una rica cartera de activos.</p>
                                            </div>',
                            'ru_RU' => '<h4>Широкий выбор симулированных инструментов</h4>
                                            <div class="desc">
                                                <p>Изучите богатый портфель активов.</p>
                                            </div>',
                            'ja' => '<h4>豊富なシミュレーション銘柄</h4>
                                            <div class="desc">
                                                <p>外国為替（FX）、株価指数、金属、コモディティ、株式など多様な資産クラスをカバーする豊富なポートフォリオを探索しましょう。</p>
                                            </div>',
                            'ko_KR' => '<h4>다양한 시뮬레이션 심볼</h4>
                                            <div class="desc">
                                                <p>풍부한 자산 포트폴리오를 탐색해 보세요.</p>
                                            </div>',
                            'km' => '<h4>ជម្រើសសញ្ញាជួញដូរច្រើន</h4>
                                            <div class="desc">
                                                <p>ស្វែងរកបណ្ដុំទ្រព្យសម្បត្តិដ៏សម្បូរបែប។</p>
                                            </div>',
                            'bn_BD' => '<h4>বিস্তৃত সিমুলেটেড সিম্বল</h4>
                                            <div class="desc">
                                                <p>বিভিন্ন সম্পদের সমৃদ্ধ পোর্টফোলিও অন্বেষণ করুন।</p>
                                            </div>',
                            'hk' => '<h4>多樣化模擬交易品種</h4>
                                            <div class="desc">
                                                <p>探索豐富的資產組合。</p>
                                            </div>',
                            'ir' => '<h4>طیف گسترده‌ای از نمادهای شبیه‌سازی‌شده</h4>
                                            <div class="desc">
                                                <p>یک سبد دارایی متنوع را کاوش کنید.</p>
                                            </div>',
                            'id' => '<h4>Beragam simbol trading simulasi</h4>
                                            <div class="desc">
                                                <p>Jelajahi portofolio aset yang kaya.</p>
                                            </div>',
                            'pt_BR' => '<h4>Ampla variedade de símbolos simulados</h4>
                                            <div class="desc">
                                                <p>Explore um rico portfólio de ativos.</p>
                                            </div>',
                            'ur' => '<h4>سیمیولیٹڈ سمبل کی وسیع رینج</h4>
                                        <div class="desc">
                                            <p>مختلف اثاثوں کے بھرپور پورٹ فولیو کو دریافت کریں۔</p>
                                        </div>',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h4>Wide Range of Simulated Symbols</h4>
                                            <div class="desc">
                                                <p>Explore a rich portfolio of assets.</p>
                                            </div>';
                    ?>
                </div>
            </div>
            <div class="item">
                <p class="item__no">
                    <?php
                        
                        $texts = [
                            'th' => 'อันดับ 4',
                            'zh_CN' => '第4',
                            'tr_TR' => '4.',
                            'fr_FR' => '4e',
                            'es_PE' => '4.º',
                            'es_ES' => '4.º',
                            'ru_RU' => '4-й',
                            'ja' => '第4',
                            'ko_KR' => '4위',
                            'km' => 'ទី៤',
                            'bn_BD' => '৪র্থ',
                            'hk' => '第4',
                            'ir' => 'چهارم',
                            'id' => '4.',
                            'pt_BR' => '4º',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? '4th';
                    ?>
                </p>
                <div class="cnt">
                    <?php
                        $texts = [
                            'zh_CN' => '<h4>挑战阶段 30% 奖励分成</h4><div class="desc"><p>WeMasterTrade 是一个交易评估平台，根据用户在挑战阶段的表现，提供最高 30% 的奖励分成。</p></div>',
                            'tr_TR' => '<h4>Challenge Aşamasında %30 Ödül Payı</h4><div class="desc"><p>WeMasterTrade, Challenge aşamasında elde edilen performansa göre %30\'a kadar ödül paylaşımı sunan bir işlem değerlendirme platformudur.</p></div>',
                            'fr_FR' => '<h4>Partage de Récompense de 30% en Phase de Challenge</h4><div class="desc"><p>WeMasterTrade est une plateforme d’évaluation de trading offrant jusqu’à 30 % de partage de récompense basé sur la performance durant la phase de challenge.</p></div>',
                            'es_ES' => '<h4>30% de Reparto de Recompensas en la Fase de Desafío</h4><div class="desc"><p>WeMasterTrade es una plataforma de evaluación de trading que ofrece hasta un 30% de reparto de recompensas basado en el rendimiento durante la fase de desafío.</p></div>',
                            'th'    => '<h4>แบ่งรางวัล 30% ในช่วง Challenge</h4><div class="desc"><p>WeMasterTrade เป็นแพลตฟอร์มประเมินการเทรดที่มอบการแบ่งรางวัลสูงสุด 30% ตามผลการดำเนินงานในช่วง Challenge</p></div>',
                            'ru_RU' => '<h4>30% Распределение Вознаграждения на Этапе Challenge</h4><div class="desc"><p>WeMasterTrade — это платформа оценки трейдинга, предлагающая до 30% распределения вознаграждения на основе результатов, достигнутых на этапе Challenge.</p></div>',
                            'ja'    => '<h4>チャレンジフェーズから最大30%の報酬シェア</h4><div class="desc"><p>WeMasterTradeは、チャレンジフェーズのパフォーマンスに基づき最大30%の報酬シェアを提供する日本唯一のプロップトレーディングプラットフォームです。評価段階から収益を得始めることができます。</p></div>',
                            'ko_KR' => '<h4>챌린지 단계 최대 30% 리워드 쉐어</h4><div class="desc"><p>WeMasterTrade는 챌린지 단계에서의 성과를 기반으로 최대 30%의 리워드 쉐어를 제공하는 트레이딩 평가 플랫폼입니다.</p></div>',
                            'km'    => '<h4>ចែករំលែករង្វាន់ 30% នៅវគ្គ Challenge</h4><div class="desc"><p>WeMasterTrade គឺជាវេទិកាវាយតម្លៃការជួញដូរ ដែលផ្តល់ការចែករំលែករង្វាន់រហូតដល់ 30% ផ្អែកលើការអនុវត្តក្នុងវគ្គ Challenge។</p></div>',
                            'bn_BD' => '<h4>চ্যালেঞ্জ পর্যায়ে ৩০% রিওয়ার্ড শেয়ার</h4><div class="desc"><p>WeMasterTrade একটি ট্রেডিং মূল্যায়ন প্ল্যাটফর্ম যা চ্যালেঞ্জ পর্যায়ে অর্জিত পারফরম্যান্সের ভিত্তিতে সর্বোচ্চ ৩০% রিওয়ার্ড শেয়ার প্রদান করে।</p></div>',
                            'ur' => '<h4>چیلنج مرحلے میں 30% انعامی حصہ</h4><div class="desc"><p>WeMasterTrade ایک ٹریڈنگ ایویلیوایشن پلیٹ فارم ہے جو چیلنج مرحلے کے دوران کارکردگی کی بنیاد پر 30% تک انعامی حصہ فراہم کرتا ہے۔</p></div>',
                            'hk'    => '<h4>挑戰階段最高30%獎勵分成</h4><div class="desc"><p>WeMasterTrade是一個交易評估平台，根據用戶在挑戰階段的表現，提供最高30%的獎勵分成。</p></div>',
                            'ir'    => '<h4>۳۰٪ سهم پاداش در مرحله چالش</h4><div class="desc"><p>WeMasterTrade یک پلتفرم ارزیابی معاملات است که بر اساس عملکرد در مرحله چالش، تا ۳۰٪ سهم پاداش ارائه می‌دهد.</p></div>',
                            'pt_BR' => '<h4>30% de Participação em Recompensas na Fase de Desafio</h4><div class="desc"><p>WeMasterTrade é uma plataforma de avaliação de trading que oferece até 30% de participação em recompensas com base no desempenho durante a fase de desafio.</p></div>',
                        ];
                        $locale = cc_block_locale($texts);
                        echo $texts[$locale] ?? '<h4>30% Reward Share in Challenge Phase</h4><div class="desc"><p>WeMasterTrade stands out as a trading evaluation platform offering a 30% reward share based on performance achieved during the Challenge Phase.</p></div>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why choose -->