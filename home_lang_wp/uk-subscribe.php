<!-- Subscribe -->
<section class="subscribe" style="padding-top:60px;">
    <div class="container">
        <div class="subscribe__content">
            <div class="cnt">
                <?php
                    
                    $texts = [
                        'th' => '<h3>สมัครรับข้อมูลเพื่อ <span>ก้าวล้ำ<br>ในโลกการเทรด!</span></h3>',
                        'zh_CN' => '<h3>订阅以 <span>在交易中<br>保持领先！</span></h3>',
                        'tr_TR' => '<h3>Abone olun ve <span>Trading’de<br>Önde Kalın!</span></h3>',
                        'fr_FR' => '<h3>Abonnez-vous pour <span>Rester<br>En Avance en Trading !</span></h3>',
                        'es_PE' => '<h3>Suscríbete para <span>Mantenerte<br>Adelante en el Trading</span></h3>',
                        'es_ES' => '<h3>Suscríbete para <span>Mantenerte<br>Adelante en el Trading</span></h3>',
                        'ru_RU' => '<h3>Подпишитесь, чтобы <span>Оставаться<br>Впереди в трейдинге!</span></h3>',
                        'ja' => '<h3>購読して <span>トレードで<br>一歩先へ！</span></h3>',
                        'ko_KR' => '<h3>구독하고 <span>트레이딩에서<br>앞서 나가세요!</span></h3>',
                        'km' => '<h3>ចុះឈ្មោះដើម្បី <span>ឈានមុខ<br>ក្នុងការជួញដូរ!</span></h3>',
                        'bn_BD' => '<h3>সাবস্ক্রাইব করুন <span>ট্রেডিংয়ে<br>এগিয়ে থাকতে!</span></h3>',
                        'hk' => '<h3>訂閱以 <span>在交易中<br>保持領先！</span></h3>',
                        'ir' => '<h3>مشترک شوید تا <span>در معامله‌گری<br>یک قدم جلوتر باشید!</span></h3>',
                        'ur' => '<h3>سبسکرائب کریں <span>ٹریڈنگ میں <br>ہمیشہ آگے رہیں!</span></h3>',
                        'id' => '<h3>Berlangganan untuk <span>Tetap<br>Unggul dalam Trading!</span></h3>',
                        'pt_BR' => '<h3>Inscreva-se para <span>Ficar<br>À Frente no Trading!</span></h3>',
                    ];
                    $locale = cc_block_locale($texts);echo $texts[$locale] ?? '<h3>Subscribe to <span>Stay <br>Ahead in Trading!</span></h3>';
                ?>
                <div class="desc"><p>
                    <?php
                        
                        $texts = [
                            'th' => 'อย่าพลาดเรื่องราวจริง กลยุทธ์ที่พิสูจน์แล้ว และผลตอบแทนก้อนโตจากเทรดเดอร์ชั้นนำ',
                            'zh_CN' => '不要错过来自顶级交易者的真实故事、成熟策略和丰厚收益',
                            'tr_TR' => 'Gerçek hikayeleri, kanıtlanmış stratejileri ve en iyi traderlardan büyük kazançları kaçırmayın',
                            'fr_FR' => 'Ne manquez pas les histoires réelles, les stratégies éprouvées et les gains importants des meilleurs traders',
                            'es_PE' => 'No te pierdas historias reales, estrategias comprobadas y grandes ganancias de los mejores traders',
                            'es_ES' => 'No te pierdas historias reales, estrategias comprobadas y grandes ganancias de los mejores traders',
                            'ru_RU' => 'Не упустите реальные истории, проверенные стратегии и большие выплаты от лучших трейдеров',
                            'ja' => 'トップトレーダーの実体験、実証済みの戦略、そして大きな利益をお見逃しなく',
                            'ko_KR' => '최고의 트레이더들의 실제 이야기, 검증된 전략, 그리고 큰 수익 기회를 놓치지 마세요',
                            'km' => 'កុំខកខានរឿងពិត យុទ្ធសាស្ត្រដែលបានបញ្ជាក់ និងប្រាក់ចំណេញធំពីអ្នកជួញដូរល្អបំផុត',
                            'bn_BD' => 'শীর্ষ ট্রেডারদের বাস্তব গল্প, প্রমাণিত কৌশল এবং বড় আয়ের সুযোগ মিস করবেন না',
                            'hk' => '不要錯過頂級交易者的真實故事、成熟策略和豐厚收益',
                            'ir' => 'داستان‌های واقعی، استراتژی‌های اثبات‌شده و سودهای بزرگ از معامله‌گران برتر را از دست ندهید',
                            'ur' => 'بہترین ٹریڈرز کی حقیقی کہانیاں، آزمودہ حکمتِ عملیاں اور بڑی ادائیگیاں مت چھوڑیں',
                            'id' => 'Jangan lewatkan kisah nyata, strategi yang terbukti, dan keuntungan besar dari trader terbaik',
                            'pt_BR' => 'Não perca histórias reais, estratégias comprovadas e grandes ganhos dos melhores traders',
                        ];
                        $locale = cc_block_locale($texts);echo $texts[$locale] ?? "Don't miss out on real stories, proven strategies, and big payouts from top traders.";
                    ?>
                </p></div>
                <div class="btn btn__subscribe">
                    <p><a href="https://www.youtube.com/@wemastertrade_official/" target="_blank"><span>
                        <?php
                            
                            $texts = [
                                'th' => 'สมัครสมาชิกช่อง',
                                'zh_CN' => '订阅频道',
                                'tr_TR' => 'Kanala Abone Ol',
                                'fr_FR' => 'S’abonner à la chaîne',
                                'es_PE' => 'Ver más',
                                'es_ES' => 'Suscribirse al canal',
                                'ru_RU' => 'Подписаться на канал',
                                'ja' => 'チャンネル登録',
                                'ko_KR' => '채널 구독',
                                'km' => 'ជាវឆានែល',
                                'bn_BD' => 'চ্যানেল সাবস্ক্রাইব করুন',
                                'hk' => '訂閱頻道',
                                'ir' => 'اشتراک کانال',
                                'ur' => 'چینل سبسکرائب کریں',
                                'id' => 'Berlangganan Channel',
                                'pt_BR' => 'Inscrever-se no canal',
                            ];
                            $locale = cc_block_locale($texts);echo $texts[$locale] ?? 'Subscribe Channel';
                        ?>
                    </span></a></p>
                </div>
            </div>
            <p class="subscribe__img"><img loading="lazy" src="/wp-content/themes/flatsome/uk-template/images/subscribe_WMTT.png" width="906" height="711" alt="Subscribe to Stay Ahead in Trading!"></p>
        </div>
    </div>
</section>
<!-- End Subscribe -->