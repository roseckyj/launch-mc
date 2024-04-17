<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minecraft Launch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <h1>Minecraft Launch Script Builder</h1>
        <p>This is a builder for the single file Minecraft launch script</p>

        <form action="get.php" method="get">

            <div class="form-floating mt-3">
                <select class="form-select" id="version" name="version" aria-label="Minecraft version">
                </select>
                <label for="version">Minecraft version</label>
            </div>

            <div class="form-floating mt-3">
                <select class="form-select" id="language" name="language" aria-label="Game Language">
                    <option value="af_za">Afrikaans</option>
                    <option value="ar_sa">اللغة العربية (alLuġah al'Arabiyye)</option>
                    <option value="ast_es">Asturianu</option>
                    <option value="az_az">Azərbaycanca (Azərbaycan)</option>
                    <option value="ba_ru">Башҡортса</option>
                    <option value="bar">Boarisch</option>
                    <option value="be_by">Беларуская (Беларусь)</option>
                    <option value="bg_bg">Български (България)</option>
                    <option value="br_fr">Brezhoneg (Breizh)</option>
                    <option value="brb">Braobans</option>
                    <option value="bs_ba">Bosanski (Bosna i Hercegovina)</option>
                    <option value="ca_es">Català (Catalunya)</option>
                    <option value="cs_cz">Čeština (Česko)</option>
                    <option value="cy_gb">Cymraeg (Cymru)</option>
                    <option value="da_dk">Dansk (Danmark)</option>
                    <option value="de_at">Österreichisches Deitsch</option>
                    <option value="de_ch">Schwiizerdutsch</option>
                    <option value="de_de">Deutsch</option>
                    <option value="el_gr">Ελληνικά (Ελλάδα)</option>
                    <option value="en_au">English (Australia)</option>
                    <option value="en_ca">English (Canada)</option>
                    <option value="en_gb">English (United Kingdom)</option>
                    <option value="en_nz">English (New Zealand)</option>
                    <option value="en_pt">Pirate Speak</option>
                    <option value="en_ud">ɥsᴉꞁᵷuƎ (uʍoᗡ ǝpᴉsd∩)</option>
                    <option value="en_us" selected>English (US)</option>
                    <option value="enp">Anglish</option>
                    <option value="enws">Shakespearean English</option>
                    <option value="eo_uy">Esperanto</option>
                    <option value="es_ar">Español (Argentina)</option>
                    <option value="es_cl">Español (Chile)</option>
                    <option value="es_ec">Español (Ecuador)</option>
                    <option value="es_es">Español (España)</option>
                    <option value="es_mx">Español (México)</option>
                    <option value="es_uy">Español (Uruguay)</option>
                    <option value="es_ve">Español (Venezuela)</option>
                    <option value="esan">Andalûh</option>
                    <option value="et_ee">Eesti (Eesti)</option>
                    <option value="eu_es">Euskara (Euskal Herria)</option>
                    <option value="fa_ir">فارسی (Fārsiy)</option>
                    <option value="fi_fi">Suomi (Suomi)</option>
                    <option value="fil_ph">Filipino (Filipinas)</option>
                    <option value="fo_fo">Føroyskt (Føroyar)</option>
                    <option value="fr_ca">Français (Québec)</option>
                    <option value="fr_fr">Français (France)</option>
                    <option value="fra_de">Fränggisch (Franggn)</option>
                    <option value="fur_it">Furlan (Friûl)</option>
                    <option value="fy_nl">Frysk (Fryslân)</option>
                    <option value="ga_ie">Gaeilge (Éire)</option>
                    <option value="gd_gb">Gàidhlig (Alba)</option>
                    <option value="gl_es">Galego (Galicia)</option>
                    <option value="haw_us">ʻŌlelo Hawaiʻi (Hawai‘i)</option>
                    <option value="he_il">עברית ('Ivriyþ)</option>
                    <option value="hi_in">हिन्दी (Hindī)</option>
                    <option value="hr_hr">Hrvatski (Hrvatska)</option>
                    <option value="hu_hu">Magyar (Magyarország)</option>
                    <option value="hy_am">Հայերեն (Hayeren)</option>
                    <option value="id_id">Bahasa Indonesia (Indonesia)</option>
                    <option value="ig_ng">Igbo (Naijiria)</option>
                    <option value="io_en">Ido</option>
                    <option value="is_is">Íslenska (Ísland)</option>
                    <option value="isv">Medžuslovjansky</option>
                    <option value="it_it">Italiano (Italia)</option>
                    <option value="ja_jp">日本語 (Nihongo)</option>
                    <option value="jbo_en">la .lojban.</option>
                    <option value="ka_ge">ქართული (Kharthuli)</option>
                    <option value="kk_kz">Қазақша (Qazaqşa)</option>
                    <option value="kn_in">ಕನ್ನಡ (Kannađa)</option>
                    <option value="ko_kr">한국어 (Hangugeo)</option>
                    <option value="ksh">Kölsch/Ripoarisch</option>
                    <option value="kw_gb">Kernewek (Kernow)</option>
                    <option value="la_la">Latina (Latium)</option>
                    <option value="lb_lu">Lëtzebuergesch (Lëtzebuerg)</option>
                    <option value="li_li">Limburgs</option>
                    <option value="lmo">Lombard (Lombardia)</option>
                    <option value="lo_la">ລາວ (ປະເທດລາວ)</option>
                    <option value="lol_us">LOLCAT (Kingdom of Cats)</option>
                    <option value="lt_lt">Lietuvių</option>
                    <option value="lv_lv">Latviešu (Latvija)</option>
                    <option value="lzh">文言（華夏）(Wényán (Huáxià))</option>
                    <option value="mk_mk">Македонски (Makedonski)</option>
                    <option value="mn_mn">Монгол (Mongol)</option>
                    <option value="ms_my">Bahasa Melayu (Malaysia)</option>
                    <option value="mt_mt">Malti (Malta)</option>
                    <option value="nah">Mēxikatlahtōlli (Mēxiko)</option>
                    <option value="nds_de">Platdüütsk</option>
                    <option value="nl_be">Vlaams (Vlaanderen)</option>
                    <option value="nl_nl">Nederlands (Nederland)</option>
                    <option value="nn_no">Norsk nynorsk (Norge)</option>
                    <option value="oc_fr">Occitan</option>
                    <option value="ovd">Övdalsk</option>
                    <option value="pl_pl">Polski (Polska)</option>
                    <option value="pt_br">Português (Brasil)</option>
                    <option value="pt_pt">Português (Portugal)</option>
                    <option value="qya_aa">Quenya</option>
                    <option value="ro_ro">Română (România)</option>
                    <option value="rpr">Дореформенный русскiй (Doreformennɨĭ russkiĭ)</option>
                    <option value="ru_ru">Русский (Russkiy)</option>
                    <option value="ry_ua">Руснацькый (Пудкарпатя, Украина)</option>
                    <option value="sah_sah">Сахалыы (Cаха Сирэ)</option>
                    <option value="se_no">Davvisámegiella</option>
                    <option value="sk_sk">Slovenčina (Slovensko)</option>
                    <option value="sl_si">Slovenščina (Slovenija)</option>
                    <option value="so_so">Af-Soomaali (Soomaaliya)</option>
                    <option value="sq_al">Shqip (Shqiperia)</option>
                    <option value="sr_cs">Srpski (Srbija)</option>
                    <option value="sr_sp">Српски (Србија)</option>
                    <option value="sv_se">Svenska (Sverige)</option>
                    <option value="sxu">Säggs'sch</option>
                    <option value="szl">Ślōnskŏ</option>
                    <option value="ta_in">தமிழ் (Tamił)</option>
                    <option value="th_th">ไทย (thay)</option>
                    <option value="tl_ph">Tagalog (Pilipinas)</option>
                    <option value="tlh_aa">tlhIngan Hol (tlhIngan wo')</option>
                    <option value="tok">toki pona (ma pona)</option>
                    <option value="tr_tr">Türkçe (Türkiye)</option>
                    <option value="tt_ru">Татарча</option>
                    <option value="uk_ua">Українська (Ukrayins'ka)</option>
                    <option value="val_es">Català (Valencià)</option>
                    <option value="vec_it">Vèneto</option>
                    <option value="vi_vn">Tiếng Việt (Việt Nam)</option>
                    <option value="yi_de">ייִדיש (Yidiš)</option>
                    <option value="yo_ng">Yorùbá</option>
                    <option value="zh_cn">简体中文（中国大陆） (Jiǎntǐ Zhōngwén (Zhōngguó Dàlù))</option>
                    <option value="zh_hk">繁體中文（香港特別行政區） (Fàahntái Jūngmàhn (Hēunggóng Dahkbiht Hàhngjingkēui))</option>
                    <option value="zh_tw">繁體中文（台灣） (Fántǐ Zhōngwén (Táiwān))</option>
                    <option value="zlm_arab">بهاس ملايو (مليسيا)</option>
                </select>
                <label for="version">Game Language</label>
            </div>

            <div class="input-group mt-3">
                <div class="input-group-text">
                    <span>Minecraft Server</span>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="server" name="server" placeholder="Server Name" value="Emcify Brno">
                    <label for="floatingInputGroup1">Server Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="ip" name="ip" placeholder="Server IP" value="brno.emcify.cz">
                    <label for="floatingInputGroup1">Server IP</label>
                </div>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" checked id="fullscreen" name="fullscreen">
                <label class="form-check-label" for="fullscreen">
                    Force fullscreen
                </label>
            </div>

            <div class="col-auto mt-3">
                <button type="submit" class="btn btn-primary mb-3">Generate script</button>
            </div>
        </form>

    </div>

    <script>
        const versionSelect = document.getElementById('version');

        fetch('https://piston-meta.mojang.com/mc/game/version_manifest_v2.json')
            .then(response => response.json())
            .then(data => {
                data.versions
                    .filter(version => version.type === "release")
                    .forEach(version => {
                        const option = document.createElement('option');
                        option.value = version.id;
                        option.innerText = version.id;
                        versionSelect.appendChild(option);
                    });
            });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>