<?php get_header(); ?>

<main class="about-us__main">
    <?php get_template_part('template-parts/parts', 'fv'); ?>

    <div class="section__wrapper">
        <section class="company-policy">
            <h2 class="policy__title section__title">私達が大切にしていること</h2>
            <ul class="policy__content">
                <li class="policy__item">
                    <h3>飽くなき探求心で、革新を創り出す</h3>
                    <p>100年を超える歴史を誇りながらも、常に挑戦し続ける気概を忘れずに、未来を切り開くソリューションを提供し続けます。変化を恐れず、最新技術やトレンドを積極的に研究し、お客様のニーズを超える価値を生み出すことに情熱を燃やしています。</p>
                </li>
                <li class="policy__item">
                    <h3>デジタル技術の力で、未来を加速させる</h3>
                    <p>ITコンサルタント会社として、業務効率化やイノベーション創出に貢献するために、デジタル技術を活用した最適なソリューションを提案します。自動化、データ分析、AIなどの技術を駆使し、お客様のビジネスを革新し、未来への飛躍を力強くサポートします。</p>
                </li>
                <li class="policy__item">
                    <h3>人材こそが、未来への鍵</h3>
                    <p>従業員一人ひとりが、高い専門性と人間性を兼ね備えた人材であることが、お客様への最高のサービスにつながると確信しています。個々の能力やキャリア目標に合わせた育成プログラムや、多様な経験を積む機会を提供することで、成長を支援します。</p>
                </li>
                <li class="policy__item">
                    <h3>未経験者も歓迎！情熱と意欲があれば、誰でも活躍できる</h3>
                    <p>IT業界未経験の方でも、熱意と向上心があれば、当社で活躍できるチャンスがあります。研修やOJTを通じて、必要な知識やスキルを丁寧に習得し、即戦力となる人材へと育成します。先輩社員によるサポート体制も充実しているので、安心してスキルアップを目指せます。</p>
                </li>
                <li class="policy__item">
                    <h3>働きがいと充実感あふれる環境</h3>
                    <p>ワークライフバランスを重視し、従業員が働きがいと充実感を感じられる環境づくりに積極的に取り組んでいます。充実した福利厚生制度や、多様な働き方を可能にする制度を導入し、個々のライフスタイルに合わせた働き方を支援します。</p>
                </li>
            </ul>
        </section>

        <section class="message">
            <h2 class="message__title section__title">代表メッセージ</h2>
            <div class="message__ceo flex-box">
                <div class="message__ceo-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/ceo 1.jpg" alt="田中浩二郎の画像">
                </div>
                <div class="message__ceo-textarea">
                    <h3 class="ceo-title">あなたがやりたいこと<br>
                        それを全力でサポートできる、<br>
                        それがTETOTEの強みです。
                    </h3>
                    <p class="ceo-text">TETOTEは、ITコンサルティングとコンサル導入企業への営業を専門とする会社です。設立以来、私たちは「お客様の課題解決に真摯に取り組み、共に成長する」という理念を掲げ、お客様とパートナーと共に歩んできました。<span class="spacer"></span>
                        お客様のニーズを深く理解し、最適なソリューションを提供することで、数多くの課題解決を支援してきました。その結果、お客様との深い信頼関係を築き、共に成長することができています。<span class="spacer"></span>
                        TETOTEは、個々の能力や個性を尊重し、多様な人材が活躍できる環境づくりに力を入れています。年齢、性別、国籍、経験などに関係なく、意欲と向上心のある人材を歓迎します。<span class="spacer"></span>
                        私たちと共に、未来を創造していきましょう。</p>
                    <div class="ceo-name">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/ceo-name.svg" alt="田中浩二郎">
                    </div>
                </div>
            </div>
        </section>

        <section class="business">
            <h2 class="business__title section__title">事業紹介</h2>
            <p class="business__sabtitle sabtitle">TETOTEの主力事業である「コンサルティング」以外に、新規に取り組んでいる事業をいくつか
                紹介させていただきます。</p>
            <ul class="business__content">
                <li class="business__item flex-box">
                    <div class="business__img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/consulting 1.jpg" alt="">
                    </div>
                    <div class="business__textarea">
                        <h3 class="content__title content__title1">コンサルティング事業</h3>
                        <p class="content__sabtitle content__sabtitle1">お客様と伴走し、売上に直接貢献できる</p>
                        <p class="content__text content__text3">営業との連携で、人と組織の成長・変革に向けた計画立案・サービス実施、さらにフォローまで。コンサルタントとして一気通貫で携わります。</p>
                    </div>
                </li>
                <li class="business__item flex-box">
                    <div class="business__img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/solution-sales 1.jpg" alt="">
                    </div>
                    <div class="business__textarea">
                        <h3 class="content__title content__title2">ソリューション営業事業</h3>
                        <p class="content__sabtitle content__sabtitle2">お客様の課題を見つけ出し、必要な施策を提案する</p>
                        <p class="content__text content__text2">お客様が抱える課題へ、ヒアリングベースで提案型営業を行い、コンサルタントとの連携で課題解決を目指します。</p>
                    </div>
                </li>
                <li class="business__item flex-box">
                    <div class="business__img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/desiner 1.jpg" alt="">
                    </div>
                    <div class="business__textarea">
                        <h3 class="content__title content__title3">業務系システム開発事業</h3>
                        <p class="content__sabtitle content__sabtitle3">お客様の課題解決を強力にサポートするシステムを設計する</p>
                        <p class="content__text content__text3">基本設計書に従って開発とテストを実施し、本番稼働をサポート。企画から運用までの全工程を通じて包括的なアプローチで、安定した運用と迅速な対応を保証します。</p>
                    </div>
                </li>
            </ul>
        </section>

        <section class="company__info">
            <h2 class="company__title section__title">会社概要</h2>
            <dl class="company__content">
                <div class="flex-box">
                    <dt>会社名</dt>
                    <dd>TETOTE株式会社</dd>
                </div>
                <div class="flex-box">
                    <dt>所在地</dt>
                    <dd>〒100-0001 東京都千代田区千代田 1-1-1</dd>
                </div>
                <div class="flex-box">
                    <dt>代表者名</dt>
                    <dd>田中 浩二郎 (代表取締役)</dd>
                </div>
                <div class="flex-box">
                    <dt>事業内容</dt>
                    <dd class="company__service">・ITコンサルティング<br>
                        ・コンサル導入企業への営業</dd>
                </div>
                <div class="flex-box">
                    <dt>電話番号</dt>
                    <dd>03-1234-5678</dd>
                </div>
                <div class="flex-box">
                    <dt>ウェブサイトURL</dt>
                    <dd>https://tetote.co.jp</dd>
                </div>
                <div class="flex-box">
                    <dt>メールアドレス</dt>
                    <dd>tetote@tetote.co.jp</dd>
                </div>
                <div class="flex-box">
                    <dt>設立年月</dt>
                    <dd>1923年4月1日</dd>
                </div>
            </dl>
        </section>
    </div>
</main>

<?php get_footer(); ?>