<!-- Payouts -->
<section class="payouts">
    <div class="container">
        <div class="payouts__content">
            <div class="title">
                <p class="title__sub">
                    <?php
                        
                        $texts = [
                            'th' => 'การจ่ายผลตอบแทน',
                            'zh_CN' => '收益支付',
                            'tr_TR' => 'Ödemeler',
                            'fr_FR' => 'Paiements',
                            'es_PE' => 'Pagos',
                        'es_ES' => 'Pagos',
                                'es_ES' => 'Pagos',
                            'es_ES' => 'Pagos',
                            'ru_RU' => 'Выплаты',
                            'ja' => '報酬支払い',
                            'ko_KR' => '지급금',
                            'km' => 'ការទូទាត់ប្រាក់ចំណេញ',
                            'bn_BD' => 'পেআউট',
                            'hk' => '收益支付',
                            'ir' => 'پرداخت‌ها',
                            'id' => 'Pembayaran',
                            'pt_BR' => 'Pagamentos',
                            'ur' => 'ادائیگیاں ',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Payouts';
                    ?>
                </p>
                <?php
                    
                    $texts = [
                        'th' => '<h3>การจ่ายเงินที่รวดเร็วและเชื่อถือได้<br><span>Payouts</span></h3>',
                        'zh_CN' => '<h3>快速且可靠的<br><span>收益支付</span></h3>',
                        'tr_TR' => '<h3>Hızlı ve Güvenilir<br><span>Ödemeler</span></h3>',
                        'fr_FR' => '<h3>Paiements rapides et fiables<br><span>Payouts</span></h3>',
                        'es_PE' => '<h3><span>Pagos</span> Rápidos y <br>Confiables</h3>',
                        'es_ES' => '<h3>Pagos rápidos y confiables<br><span>Payouts</span></h3>',
                        'ru_RU' => '<h3>Быстрые и надежные<br><span>выплаты</span></h3>',
                        'ja' => '<h2 class="h3">日本のプロップトレーダーへの迅速・<span>確実な報酬支払い</span></h2>',
                        'ko_KR' => '<h3>빠르고 신뢰할 수 있는<br><span>지급</span></h3>',
                        'km' => '<h3>ការទូទាត់លឿន និងអាចទុកចិត្តបាន<br><span>Payouts</span></h3>',
                        'bn_BD' => '<h3>দ্রুত ও নির্ভরযোগ্য<br><span>পেআউট</span></h3>',
                        'hk' => '<h3>快速且可靠的<br><span>收益支付</span></h3>',
                        'ir' => '<h3>پرداخت‌های سریع و قابل اعتماد<br><span>Payouts</span></h3>',
                        'id' => '<h3>Pembayaran cepat & terpercaya<br><span>Payouts</span></h3>',
                        'pt_BR' => '<h3>Pagamentos rápidos e confiáveis<br><span>Payouts</span></h3>',
                        'ur' => '<h3>تیز اور قابلِ اعتماد <br><span>ادائیگیاں</span></h3>',
                    ];
                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h3>Fast & Reliable <br><span>Payouts</span></h3>';
                ?>
            </div>
            <div class="desc">
                <p class="txt">
                    <?php
                        
                        $texts = [
                            'th' => 'เพลิดเพลินกับการรับเงินที่สะดวกสบายเป็นรางวัลจากการเทรดแบบจำลองของคุณ เพราะคุณไม่ควรต้องรอเงินของคุณ',
                            'zh_CN' => '享受来自模拟交易奖励的无忧收益支付，因为你不应该等待属于你的资金',
                            'tr_TR' => 'Simüle edilmiş işlemlerinizin ödülü olarak sorunsuz ödemelerin keyfini çıkarın. Çünkü paranız için beklememelisiniz',
                            'fr_FR' => 'Profitez de paiements sans tracas en récompense de votre trading simulé. Parce que vous ne devriez pas attendre votre argent',
                            'es_PE' => 'Disfruta payouts sin complicaciones como recompensa por tu trading simulado. <br>Porque no deberías esperar por tu dinero.',
                            'es_ES' => 'Disfruta de pagos sin complicaciones como recompensa por tu trading simulado. Porque no deberías esperar por tu dinero',
                            'ru_RU' => 'Получайте выплаты без лишних хлопот как награду за вашу симулированную торговлю. Ведь вы не должны ждать свои деньги',
                            'ja' => ' シミュレーション取引の報酬として、スムーズな支払いをお楽しみください。WeMasterTradeは、プロップトレーダーへの支払いを一切遅延させません。',
                            'ko_KR' => '모의 트레이딩의 보상으로 번거로움 없는 지급을 경험하세요. 당신의 돈을 기다릴 필요는 없습니다',
                            'km' => 'រីករាយជាមួយការទូទាត់ដោយគ្មានភាពរំខាន ជារង្វាន់សម្រាប់ការជួញដូរសមូល្យរបស់អ្នក ព្រោះអ្នកមិនគួរត្រូវរង់ចាំប្រាក់របស់អ្នកទេ',
                            'bn_BD' => 'আপনার সিমুলেটেড ট্রেডিংয়ের পুরস্কার হিসেবে ঝামেলাহীন পেআউট উপভোগ করুন। কারণ আপনার টাকার জন্য অপেক্ষা করা উচিত নয়',
                            'hk' => '享受來自模擬交易的無憂收益支付，因為你不應該等待你的資金',
                            'ir' => 'از پرداخت‌های بدون دردسر به‌عنوان پاداش معاملات شبیه‌سازی‌شده خود لذت ببرید، زیرا نباید برای پول خود منتظر بمانید',
                            'id' => 'Nikmati pembayaran tanpa repot sebagai reward dari trading simulasi Anda. Karena Anda tidak seharusnya menunggu uang Anda',
                            'pt_BR' => 'Aproveite pagamentos sem complicações como recompensa pelo seu trading simulado. Porque você não deveria esperar pelo seu dinheiro',
                            'ur' => 'اپنی سمولیٹڈ ٹریڈنگ کے انعام کے طور پر بغیر کسی جھنجھٹ کے ادائیگیاں حاصل کریں۔ کیونکہ آپ کو اپنے پیسے کا انتظار نہیں کرنا چاہیے۔',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Enjoy hassle-free payouts as a reward for your simulated trading. Because you shouldn’t wait for your money';
                    ?>
                </p>
                <div class="info">
                    <?php
                        
                        $texts = [
                            'th' => '<p><span>24h</span>เวลาเฉลี่ยในการจ่ายเงิน</p>
                                            <p><span>1d</span>การจ่ายเงินรายวัน</p>
                                            <p><span>24/5</span>ฝ่ายบริการลูกค้า</p>',
                            'zh_CN' => '<p><span>24h</span>平均支付时间</p>
                                            <p><span>1d</span>每日支付</p>
                                            <p><span>24/5</span>客户支持</p>',
                            'tr_TR' => '<p><span>24h</span>Ortalama Ödeme Süresi</p>
                                            <p><span>1d</span>Günlük Ödeme</p>
                                            <p><span>24/5</span>Müşteri Desteği</p>',
                            'fr_FR' => '<p><span>24h</span>Temps moyen de paiement</p>
                                            <p><span>1d</span>Paiement quotidien</p>
                                            <p><span>24/5</span>Support client</p>',
                            'es_PE' => '<p><span>24h</span>Tiempo promedio de payout</p>
                                            <p><span>1 día</span>Payout diario</p>
                                            <p><span>24/5</span>Soporte al cliente</p>',
                            'es_ES' => '<p><span>24h</span>Tiempo promedio de pago</p>
                                            <p><span>1d</span>Pago diario</p>
                                            <p><span>24/5</span>Soporte al cliente</p>',
                            'ru_RU' => '<p><span>24h</span>Среднее время выплат</p>
                                            <p><span>1d</span>Ежедневные выплаты</p>
                                            <p><span>24/5</span>Поддержка клиентов</p>',
                            'ja' => '<p><span>24h</span>平均支払い時間</p>
                                            <p><span>1d</span>毎日支払い</p>
                                            <p><span>24/5</span>カスタマーサポート</p>',
                            'ko_KR' => '<p><span>24h</span>평균 지급 시간</p>
                                            <p><span>1d</span>일일 지급</p>
                                            <p><span>24/5</span>고객 지원</p>',
                            'km' => '<p><span>24h</span>ពេលវេលាទូទាត់មធ្យម</p>
                                            <p><span>1d</span>ការទូទាត់ប្រចាំថ្ងៃ</p>
                                            <p><span>24/5</span>ជំនួយអតិថិជន</p>',
                            'bn_BD' => '<p><span>24h</span>গড় পেআউট সময়</p>
                                            <p><span>1d</span>দৈনিক পেআউট</p>
                                            <p><span>24/5</span>কাস্টমার সাপোর্ট</p>',
                            'hk' => '<p><span>24h</span>平均支付時間</p>
                                            <p><span>1d</span>每日支付</p>
                                            <p><span>24/5</span>客戶支援</p>',
                            'ir' => '<p><span>24h</span>میانگین زمان پرداخت</p>
                                            <p><span>1d</span>پرداخت روزانه</p>
                                            <p><span>24/5</span>پشتیبانی مشتریان</p>',
                            'ur' => '<p><span>بینک ٹرانسفر</span>آپ کی درخواست کے چند گھنٹوں کے اندر رقم بینک میں منتقل ہو جاتی ہے۔</p>
                                            <p><span>ادائیگیاں</span>ہم USDC اور دیگر اسٹیبل کوائنز کے ذریعے ادائیگی کی سہولت فراہم کرتے ہیں۔</p>
                                            <p><span>ڈیبٹ / کریڈٹ / پری پیڈ کارڈز</span>اپنے منافع کو براہِ راست ہمارے برانڈڈ Visa / MasterCard / American Express / JCB کارڈز کے ساتھ استعمال کریں۔</p>',
                            'id' => '<p><span>24h</span>Rata-rata Waktu Pembayaran</p>
                                            <p><span>1d</span>Pembayaran Harian</p>
                                            <p><span>24/5</span>Dukungan Pelanggan</p>',
                            'pt_BR' => '<p><span>24h</span>Tempo médio de pagamento</p>
                                            <p><span>1d</span>Pagamento diário</p>
                                            <p><span>24/05</span>Suporte ao cliente</p>',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<p><span>24h</span>Avg Payout Time</p>
                                            <p><span>1d</span>Daily Payout</p>
                                            <p><span>24/5</span>Customer Support</p>';
                    ?>
                </div>
            </div>
        </div>
        <div class="payouts__card">
            <div class="item">
                <div class="cnt">
                    <h3 class="h4">
                        <?php
                            
                            $texts = [
                                'th' => 'โอนเงินผ่านธนาคาร',
                                'zh_CN' => '银行转账',
                                'tr_TR' => 'Banka Transferi',
                                'fr_FR' => 'Virement bancaire',
                                'es_PE' => 'Transferencia bancaria',
                                'es_ES' => 'Transferencia bancaria',
                                'ru_RU' => 'Банковский перевод',
                                'ja' => '銀行振込',
                                'ko_KR' => '은행 송금',
                                'km' => 'ផ្ទេរប្រាក់តាមធនាគារ',
                                'bn_BD' => 'ব্যাংক ট্রান্সফার',
                                'hk' => '銀行轉帳',
                                'ir' => 'انتقال بانکی',
                                'id' => 'Transfer Bank',
                                'pt_BR' => 'Transferência bancária',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Bank Transfer';
                        ?>
                    </h3>
                    <div class="desc">
                        <p>
                            <?php
                                
                                $texts = [
                                    'th' => 'เงินเข้าบัญชีธนาคารของคุณภายใน<br>ไม่กี่ชั่วโมงหลังจากคำขอ',
                                    'zh_CN' => '在您提交请求后的<br>数小时内到账',
                                    'tr_TR' => 'Talebinizden<br>saatler içinde banka hesabınıza para',
                                    'fr_FR' => 'L’argent sur votre compte bancaire<br>en quelques heures après votre demande',
                                    'es_PE' => 'Recibe el dinero en tu banco pocas horas después de tu solicitud.',
                                    'es_ES' => 'Dinero en tu banco<br>en pocas horas tras tu solicitud',
                                    'ru_RU' => 'Деньги на вашем банковском счёте<br>в течение нескольких часов после запроса',
                                    'ja' => 'リクエスト後数時間以内に銀行口座へ入金されます。日本の銀行口座への振込に対応。',
                                    'ko_KR' => '요청 후<br>몇 시간 내에 은행 계좌로 입금',
                                    'km' => 'ប្រាក់ចូលគណនីធនាគាររបស់អ្នក<br>ក្នុងរយៈពេលប៉ុន្មានម៉ោងបន្ទាប់ពីសំណើ',
                                    'bn_BD' => 'আপনার অনুরোধের কয়েক<br>ঘন্টার মধ্যেই ব্যাংকে টাকা',
                                    'hk' => '提交申請後<br>數小時內到達銀行帳戶',
                                    'ir' => 'واریز پول به حساب بانکی شما<br>در عرض چند ساعت پس از درخواست',
                                    'id' => 'Dana masuk ke bank Anda<br>dalam beberapa jam setelah permintaan',
                                    'pt_BR' => 'Dinheiro na sua conta bancária<br>em poucas horas após sua solicitação',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Money in the bank within <br>hours of your request';
                            ?>
                        </p>
                    </div>
                </div>
                <p class="ic"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/payouts_ic1.png" width="97" height="95" alt="Bank Transfer">
                </p>
            </div>
            <div class="item">
                <div class="cnt">
                    <h3 class="h4">
                        <?php
                            
                            $texts = [
                                'th' => 'การจ่ายผลตอบแทน',
                                'zh_CN' => '收益支付',
                                'tr_TR' => 'Ödemeler',
                                'fr_FR' => 'Paiements',
                                'es_PE' => 'Payouts en Cripto',
                                'ru_RU' => 'Выплаты',
                                'ja' => '暗号通貨での報酬支払い',
                                'ko_KR' => '지급금',
                                'km' => 'ការទូទាត់ប្រាក់ចំណេញ',
                                'bn_BD' => 'পেআউট',
                                'hk' => '收益支付',
                                'ir' => 'پرداخت‌ها',
                                'id' => 'Pembayaran',
                                'pt_BR' => 'Pagamentos',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Payouts';
                        ?>
                    </h3>
                    <div class="desc">
                        <p>
                            <?php
                                
                                $texts = [
                                    'th' => 'เรารองรับการจ่ายเงินผ่าน USDC และสเตเบิลคอยน์อื่น ๆ',
                                    'zh_CN' => '我们支持通过 USDC 及其他稳定币进行支付',
                                    'tr_TR' => 'USDC ve diğer stablecoinler aracılığıyla ödeme desteği sunuyoruz',
                                    'fr_FR' => 'Nous prenons en charge les paiements via USDC et d’autres stablecoins',
                                    'es_PE' => 'Soportamos pagos vía USDC y otras stablecoins.',
                                    'es_ES' => 'Admitimos pagos a través de USDC y otras stablecoins',
                                    'ru_RU' => 'Мы поддерживаем выплаты через USDC и другие стейблкоины',
                                    'ja' => 'USDC及びその他のステーブルコインによる迅速な支払いに対応しています。',
                                    'ko_KR' => 'USDC 및 기타 스테이블코인을 통한 지급을 지원합니다',
                                    'km' => 'យើងគាំទ្រការទូទាត់តាមរយៈ USDC និង stablecoin ផ្សេងៗ',
                                    'bn_BD' => 'আমরা USDC এবং অন্যান্য স্টেবলকয়েনের মাধ্যমে পেআউট সমর্থন করি',
                                    'hk' => '我們支持透過 USDC 及其他穩定幣進行支付',
                                    'ir' => 'ما از پرداخت‌ها از طریق USDC و سایر استیبل‌کوین‌ها پشتیبانی می‌کنیم',
                                    'id' => 'Kami mendukung pembayaran melalui USDC dan stablecoin lainnya',
                                    'pt_BR' => 'Oferecemos suporte a pagamentos via USDC e outras stablecoins',
                                ];
                                $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'We support payouts via USDC and other stablecoins';
                            ?>
                        </p>
                    </div>
                </div>
                <p class="ic"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/payouts_ic2.png" width="102" height="92" alt="Payouts">
                </p>
            </div>
            <div class="item">
                <div class="cnt">
                    <h3 class="h4">
                        <?php
                            
                            $texts = [
                                'th' => 'บัตรเดบิต/เครดิต/เติมเงิน<br class="pc">Cards',
                                'zh_CN' => '借记卡/信用卡/预付卡<br class="pc">Cards',
                                'tr_TR' => 'Banka Kartı/Kredi Kartı/Ön Ödemeli<br class="pc">Kartlar',
                                'fr_FR' => 'Cartes de débit/crédit/prépayées<br class="pc">Cards',
                                'es_PE' => 'Tarjetas Débito/Crédito/Prepagadas',
                                'es_ES' => 'Tarjetas débito/crédito/prepagadas<br class="pc">Cards',
                                'ru_RU' => 'Дебетовые/кредитные/предоплаченные<br class="pc">карты',
                                'ja' => 'デビット／クレジット／プリペイドカード',
                                'ko_KR' => '직불/신용/선불<br class="pc">카드',
                                'km' => 'កាតឌេប៊ីត/ឥណទាន/បង់មុន<br class="pc">Cards',
                                'bn_BD' => 'ডেবিট/ক্রেডিট/প্রিপেইড<br class="pc">কার্ড',
                                'hk' => '借記卡/信用卡/預付卡<br class="pc">Cards',
                                'ir' => 'کارت‌های دبیت/اعتباری/پیش‌پرداخت<br class="pc">Cards',
                                'id' => 'Kartu Debit/Kredit/Prabayar<br class="pc">Cards',
                                'pt_BR' => 'Cartões Débito/Crédito/Pré-pagos<br class="pc">Cards',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Debit/Credit/Prepaid<br class="pc">Cards';
                        ?>
                    </h3>
                    <div class="desc">
                        <p>
                            <?php
                                $texts = [
                                    'zh_CN' => '可直接通过我们品牌的 Visa / MasterCard / American Express / JCB 等使用您的绩效奖励',
                                    'tr_TR' => 'Performansa dayalı ödüllerinizi Visa / MasterCard / American Express / JCB markalı kartlarımızla doğrudan kullanın',
                                    'fr_FR' => 'Utilisez directement vos récompenses basées sur la performance avec nos cartes Visa / MasterCard / American Express / JCB',
                                    'es_ES' => 'Utiliza directamente tus recompensas basadas en el rendimiento con nuestras tarjetas Visa / MasterCard / American Express / JCB',
                                    'th'    => 'ใช้ผลตอบแทนตามผลงานของคุณได้โดยตรงผ่านบัตร Visa / MasterCard / American Express / JCB ของเรา',
                                    'ru_RU' => 'Используйте свои вознаграждения на основе результатов напрямую с нашими картами Visa / MasterCard / American Express / JCB',
                                    'ja'    => '（近日公開）当社のVisa／MasterCard／American Express／JCBブランドカードでプロップトレーディングの収益を直接利用できます。',
                                    'ko_KR' => '성과 기반 리워드를 Visa / MasterCard / American Express / JCB 등 당사 카드로 바로 사용할 수 있습니다',
                                    'km'    => 'ប្រើរង្វាន់ផ្អែកលើលទ្ធផលរបស់អ្នកដោយផ្ទាល់ជាមួយកាត Visa / MasterCard / American Express / JCB របស់យើង',
                                    'bn_BD' => 'আপনার পারফরম্যান্স-ভিত্তিক রিওয়ার্ড সরাসরি আমাদের Visa / MasterCard / American Express / JCB কার্ড দিয়ে ব্যবহার করুন',
                                    'ur'    => 'اپنے کارکردگی پر مبنی انعام کو براہ راست ہمارے Visa / MasterCard / American Express / JCB کارڈز کے ساتھ استعمال کریں',
                                    'hk'    => '可直接透過我們品牌的 Visa / MasterCard / American Express / JCB 等使用您的績效獎勵',
                                    'ir'    => 'از پاداش مبتنی بر عملکرد خود مستقیماً با کارت‌های Visa / MasterCard / American Express / JCB ما استفاده کنید',
                                    'pt_BR' => 'Use diretamente suas recompensas baseadas em desempenho com nossos cartões Visa / MasterCard / American Express / JCB',
                                ];
                                $locale = cc_block_locale($texts);
                                echo $texts[$locale] ?? 'Use your performance-based rewards directly with our branded Visa/MasterCard/American Express/JCB...';
                            ?>
                        </p>
                    </div>
                </div>
                <p class="ic"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/payouts_ic3.png" width="108" height="114" alt="Debit/Credit/Prepaid Cards">
                </p>
            </div>
        </div>
        <div id="daily-payout-section" class="payouts__list">
            <?php
                $texts = [
                    'ja' => '<h2 class="center">最新の支払い実績</h2>',
                ];
                $locale = cc_block_locale($texts);echo $texts[$locale] ?? '';
            ?>
            
            <h3 class="h4">
                <?php
                    $texts = [
                        'th' => 'การจ่ายเงิน',
                        'zh_CN' => '收益支付',
                        'tr_TR' => 'Ödemeler',
                        'fr_FR' => 'Paiements',
                        'es_PE' => 'Payouts Recientes',
                        'ru_RU' => 'Выплаты',
                        'ja' => '支払い',
                        'ko_KR' => '지급',
                        'km' => 'ការទូទាត់',
                        'bn_BD' => 'পেআউট',
                        'hk' => '收益支付',
                        'ir' => 'پرداخت‌ها',
                        'id' => 'Pembayaran',
                        'pt_BR' => 'Pagamentos',
                    ];
                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Payouts';
                ?>
            </h3>
            <div class="payouts__frame">
                <ul id="daily-payout-list" class="payouts-list">
                    
                </ul>
            </div>
            <div class="btn center">
                <p id="btnViewMorePayout" class="btn__viewmore"><span>
                    <?php
                        
                        $texts = [
                            'th' => 'โหลดเพิ่มเติม',
                            'zh_CN' => '加载更多',
                            'tr_TR' => 'Daha Fazla Yükle',
                            'fr_FR' => 'Charger plus',
                            'es_PE' => 'Ver más payouts',
                            'es_ES' => 'Cargar más',
                            'ru_RU' => 'Загрузить ещё',
                            'ja' => 'さらに支払い実績を見る',
                            'ko_KR' => '더 보기',
                            'km' => 'ផ្ទុកបន្ថែម',
                            'bn_BD' => 'আরও লোড করুন',
                            'hk' => '載入更多',
                            'ir' => 'بارگذاری بیشتر',
                            'id' => 'Muat Lebih Banyak',
                            'pt_BR' => 'Carregar mais',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Load More';
                    ?>
                </span></p>
            </div>
        </div>
    </div>
</section>
<!-- End Payouts -->