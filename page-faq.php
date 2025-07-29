<?php get_header(); ?>
<main class="faq">
    <?php get_template_part('template-parts/parts', 'fv'); ?>

    <section class="faq__wrapper section__wrapper">
        <nav class="faq__nav page__nav">
            <ul class="faq__nav-list page__nav-list">
                <li class="nav-item">
                    <a href="#application" class="nav-application">
                        応募・選考について<span></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#about-career" class="nav-about-career">
                        キャリアについて<span></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#about-benefits" class="nav-about-benefits">
                        福利厚生について<span></span>
                    </a>
                </li>
            </ul>
        </nav>

        <div id="application" class="application faq__content">
            <h2 class="faq__title section__title">応募・選考について</h2>
            <div class="faq__accordion">
                <details class="faq__item">
                    <summary class="faq__summary">
                            <span class="faq__mark">Q</span>
                            <span class="faq__question">応募資格はありますか？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>応募にあたって、特別な資格は必要ありません。
                            <br>IT業界未経験の方も歓迎しています。意欲と向上心をお持ちの方であれば、どなたでもチャレンジしていただけます。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">応募方法は？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>弊社採用サイトからエントリーしてください。
                        </p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">選考フローは？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>一般的なフローは以下の通りです：
                            エントリー → 書類選考 → 面接（1〜2回）→ 内定
                            ※職種や状況により変更になる場合があります。
                        </p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">選考にかかる時間は？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>ご応募から内定までは、約2週間〜1ヶ月程度を想定しています。ご希望のスケジュールがあれば、面接時にご相談ください。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">面接では何を聞かれますか？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>これまでのご経験や、入社後に挑戦したいこと、働く上で大切にしている価値観などを伺います。リラックスしてお話しください。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">面接官はどんな人ですか？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>現場で活躍している社員や、部門責任者が担当します。あなたの強みや想いをしっかり受け止められるよう、温かく丁寧な対応を心がけています。</p>
                    </div>
                </details>
            </div>
        </div>
        <div id="about-career" class="faq__content">
            <h2 class="faq__title section__title">キャリアについて</h2>
            <div class="faq__accordion">
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">自分の希望するキャリアパスに進むことはできますか？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>はい、可能です。定期的な面談を通じて、あなたの目標や希望をしっかりヒアリングし、キャリア形成をサポートします。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">転勤はありますか？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>業務の必要に応じて、転勤が発生する場合があります。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">転勤の希望は出せますか？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>はい、ご希望を伺ったうえで、社内の状況と照らし合わせて調整いたします。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">ワークライフバランスは？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>働きやすい環境づくりに力を入れており、残業時間の削減や有給取得の推奨などを徹底しています。ライフステージに合わせた働き方も可能です。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">具体的にはどのような制度がありますか？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>主な制度として、通勤手当や各種手当、休暇制度、資格取得支援などをご用意しています。<br>
                            詳細は<a href="<?php echo home_url('/benefits/'); ?>">
                                福利厚生について（BENEFITS）</a>のページをご覧ください。
                        </p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">育児休暇制度はありますか？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>はい、あります。産前産後休暇・育児休暇の制度が整っており、男女ともに取得実績があります。
                            さらに、育休後の短時間勤務制度や社内託児所など、子育てと両立しやすい環境づくりに注力しています。実際に制度を活用して復職している社員も在籍しており、安心して長く働ける体制が整っています。</p>
                    </div>
                </details>
            </div>
        </div>
        <div id="about-benefits" class="faq__content">
            <h2 class="faq__title section__title">福利厚生について</h2>
            <div class="faq__accordion">
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">どのような福利厚生制度がありますか？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>TETOTEでは、安心して長く働けるよう、さまざまな福利厚生制度を整えています。
                            社会保険完備、通勤手当（上限月5万円）、退職金制度、社員向けジム、社内託児所のほか、資格取得支援制度や産前産後・育児休暇など、働く人にやさしい環境づくりに力を入れています。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">財形貯蓄制度の内容は？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>財形貯蓄を支援する制度です。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">社内イベントの内容は？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>社員旅行、忘年会、スポーツ大会など、社内交流を深めるイベントを定期的に開催しています。参加は自由で、普段あまり関わらない部署のメンバーとも交流できる貴重な機会となっています。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question"> 部活動について教えてください。</span>
                    </summary>
                    <div class="faq__answer">
                        <p>有志による部活動が多数あり、会社から活動費の補助も出ます。たとえば、フットサル・写真・ランニングなどさまざまなジャンルがあり、初心者も気軽に参加できます。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">資格取得支援制度はいくら補助が出ますか？</span>
                    </summary>
                    <div class="faq__answer">
                        <p>対象資格に合格した場合、受験料を全額補助しています。さらに、応用技術者試験など特定の資格ではお祝い金の支給もあります。実際に制度を活用して資格を取得し、キャリアアップを実現している社員も多くいます。</p>
                    </div>
                </details>
                <details class="faq__item">
                    <summary class="faq__summary">
                        <span class="faq__mark">Q</span>
                        <span class="faq__question">年次有給休暇について教えてください</span>
                    </summary>
                    <div class="faq__answer">
                        <p>入社6ヶ月経過後に10日付与され、その後は勤続年数に応じて増加します。年度途中入社の方は、在籍月数に応じた日数が比例付与されます。さらに、半日単位での取得も可能で、柔軟に利用できる体制です。</p>
                    </div>
                </details>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>