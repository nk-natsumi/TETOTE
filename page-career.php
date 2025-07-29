<?php get_header(); ?>

<main class="main">
    <?php get_template_part('template-parts/parts', 'fv'); ?>

    <div class="subpage__wrapper">
        <div class="career">
            <h2 class="career__title section__title">キャリアパスに沿った研修制度を用意</h2>
            <p class="career__sabtitle sabtitle">弊社では、コンサルタントのキャリアパスを、大きく4つのステージに分けています。</p>
            <div class="career__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/career/tetote-carrer-path 1.jpg" alt="キャリアバス図">
            </div>
            <p class="career__text sabtitle">TETOTE は、コンサルタントのキャリアパスを支えるために、以下の独自の研修制度を設けています。</p>
        </div>

        <ul class="training__content">
            <li class="training__item">
                <h2 class="training__title">1.ケーススタディ研修</h2>
                <p class="training__text">
                    TETOTE の過去のプロジェクト事例を基にしたケーススタディ研修を実施しています。<br>
                    この研修では、実際のプロジェクトで直面する課題を解決するために、分析力、問題解決能力、プレゼンテーション能力などを実践的に習得することができます。
                </p>
            </li>
            <li class="training__item">
                <h2 class="training__title">2. クライアント対応研修</h2>
                <p class="training__text">
                    TETOTE は、クライアントとの信頼関係構築を重視しています。<br>
                    この研修では、クライアントとのコミュニケーションスキル、交渉スキル、プレゼンテーションスキルなどを習得し、クライアントの課題解決に貢献できるコンサルタントを育成します。
                </p>
            </li>
            <li class="training__item">
                <h2 class="training__title">3. 専門知識研修</h2>
                <p class="training__text">
                    財務、会計、ITなど、コンサルタント業務に必要な専門知識を習得するための研修を実施しています。<br>
                    TETOTE は、幅広い分野の知識を持つコンサルタントを育成し、クライアントに最適なソリューションを提供できるようにしています。
                </p>
            </li>
            <li class="training__item">
                <h2 class="training__title">4. マネジメント研修</h2>
                <p class="training__text">
                    プロジェクトマネジメント、リーダーシップ、チームビルディングなど、マネジメントスキルを習得するための研修を実施しています。<br>
                    TETOTE は、将来的にマネジメント層を担うコンサルタントを育成し、組織全体の成長を促進しています。
                </p>
            </li>
            <li class="training__item">
                <h2 class="training__title">5. 外部研修</h2>
                <p class="training__text">
                    社外で実施される研修にも積極的に参加することができます。<br>
                    TETOTE は、最新の知識やスキルを習得し、常に成長し続けるコンサルタントを育成します。
                </p>
            </li>
        </ul>
    </div>
</main>

<?php get_footer(); ?>