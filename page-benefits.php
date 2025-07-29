<?php get_header(); ?>

<main class="main">
    <?php get_template_part('template-parts/parts', 'fv'); ?>

    <div class="subpage__wrapper">
        <section class="systems">
            <h2 class="systems__title section__title">各種制度</h2>
            <dl class="systems__content">
                <div class="flex-box systems__item">
                    <dt>手当</dt>
                    <dd class="line-height">
                        ・通勤手当（上限月5万円）<br>
                        ・時間外割増手当<br>
                        ・役職手当<br>
                        ・退職金
                    </dd>
                </div>
                <div class="flex-box systems__item">
                    <dt>制度</dt>
                    <dd>財形貯蓄</dd>
                </div>
                <div class="flex-box systems__item">
                    <dt>保険</dt>
                    <dd>社会保険完備</dd>
                </div>
                <div class="flex-box systems__item">
                    <dt>施設</dt>
                    <dd class="line-height facility">
                        ・社員向けジム<br>
                        ・社内託児所
                    </dd>
                </div>
                <div class="flex-box systems__item">
                    <dt>休暇・休日</dt>
                    <dd class="line-height">
                        ・完全週休2日制<br>
                        ・年次有給休暇（初年度10日／年度途中入社は比例付与）<br>
                        ・年末年始休暇（12月29日～1月3日：6日間）<br>
                        ・夏季休暇（6月～9月中：5日間）<br>
                        ・慶弔休暇<br>
                        ・産前産後休暇<br>
                        ・リフレッシュ休暇（3年勤続で5日／以降5年勤続ごとに5日支給）
                    </dd>
                </div>
            </dl>
        </section>

        <section class="voice">
            <h2 class="voice__title section__title">制度利用者の声</h2>
            <div class="voice__content grid-box">
                <li class="voice__item">
                    <p class="staff__job">2013年入社</p>
                    <p class="staff__name">堀内 優</p>
                    <p class="staff__text">
                        資格取得のための費用を会社が負担してくれる制度を利用して、念願の応用技術者資格を取得できました。<br>
                        この制度は、自己啓発を支援してくれるので、とても助かります。今後は、さらにスキルアップを目指して、他の資格も取得していきたいと思っています。<br>
                        会社が成長を支援してくれるので、安心して仕事に取り組むことができます。
                    </p>
                </li>
                <li class="voice__item">
                    <p class="staff__job">2015年入社</p>
                    <p class="staff__name">神凪 理沙</p>
                    <p class="staff__text">
                        出産後、育休を取得して、現在は短時間勤務で働いています。会社が育児に理解があるので、安心して仕事に集中できます。<br>
                        特に、社内託児所があるので、子供を預けながら安心して働けるのは助かります。また、短時間勤務制度も充実しているので、自分のペースで仕事復帰することができました。<br>
                        今後は、子供の成長に合わせて、勤務時間を調整しながら、長く働き続けたいと思っています。
                    </p>
                </li>
            </div>
            <div class="voice__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/benefits/benefits-user-voices 1.jpg" alt="社員の写真">
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>